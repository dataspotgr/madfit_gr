<?php

use Tygh\Registry;
use Tygh\Http;

if (!defined('BOOTSTRAP')) { die('Access denied'); }


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($mode == "features_active") {
        if( isset($_POST['feature_status']) && !empty($_POST['feature_status']) ) {
            $feature_status_arr = $_POST['feature_status'];
            foreach ($feature_status_arr as $feature_status) {
                if($feature_status[2] == 1) {
                    $update_data_feature = array(
                        'eldc_feature_status' => $feature_status[2] //this is always 1
                    );
                    $update_feature = db_query('UPDATE ?:eldico_bridge_features SET ?u WHERE `id` = ?i', $update_data_feature, $feature_status[0]);
                }
                else {
                    //de-activate all others features statuses
                    $update_data_feature = array(
                        'eldc_feature_status' => 0
                    );
                    $update_feature = db_query('UPDATE ?:eldico_bridge_features SET ?u WHERE `id` = ?i', $update_data_feature, $feature_status[0]);
                }
            } // end foreach loop
//            fn_print_r($_POST['feature_status']);
//            die;
            fn_set_notification('N', __('sent_notice'), "Επιτυχής ολοκλήρωση ενημέρωσης χαρακτηριστικών!");
        }
    }
}

if($mode == "eldico_products") {
    $xml_url  = Registry::get('addons.ds_eldico_bridge.ds_bridge_url');
    $username = Registry::get('addons.ds_eldico_bridge.ds_bridge_username');
    $password = Registry::get('addons.ds_eldico_bridge.ds_bridge_password');

    if($username && $password) {
        $url = "https://" . $username . ":" . $password . "@" . $xml_url;
    }
    else {
        $url = "https://".$xml_url;
    }

    $xmlstr = get_xml_from_url($url);
    $xmlobj = new SimpleXMLElement($xmlstr);

    $total_products_count = 0;
    $total_products_insert = 0;
    $total_products_update = 0;

    //fn_print_r($xmlobj);

    if ($xmlobj) {
        //$temp_char = array();
        foreach ($xmlobj->Products->Product as $product_xml_item) {
            //$strtotime        = strtotime("now");
            $date_format        = date("d/m/Y H:i:s");
            $eldc_flag          = 0;

            $product_id         = $product_xml_item->Product_ID;
            $code               = $product_xml_item->Code;
            $barcode            = $product_xml_item->BarCode;
            $title              = $product_xml_item->ProductTitle;
            $description        = $product_xml_item->ProductDescription;
            $small_description  = $product_xml_item->ProductSmallDescription;
            $large_description  = $product_xml_item->ProductLargeDescription;
            $image              = $product_xml_item->ProductImage;
            $manufacturer       = $product_xml_item->Manufacturer;
            $category_id        = $product_xml_item->CategoryId;
            $category           = $product_xml_item->Category;
            $wholesale_price    = $product_xml_item->WholesalePrice;
            $discount_category  = $product_xml_item->DiscountCategory;
            $retail_price       = $product_xml_item->RetailPrice;
            $price_change       = $product_xml_item->PriceChange;
            $premium_product    = $product_xml_item->PremiumProduct;
            $recycle            = $product_xml_item->Recycle;
            $availability       = $product_xml_item->Availability;
            $athens             = $product_xml_item->Athens;
            $thessaloniki       = $product_xml_item->Thessaloniki;
            $expected           = $product_xml_item->Expected;
            $warranty           = $product_xml_item->Warranty;
            $country            = $product_xml_item->Country;
            $box_weight         = $product_xml_item->BoxWeight;
            $box_volume         = $product_xml_item->BoxVolume;
            $package_info       = $product_xml_item->PackagingInfo;
            $product_dimensions = $product_xml_item->ProductDimensions;
            $product_weight     = $product_xml_item->ProductWeight;
            $product_volume     = $product_xml_item->ProductVolume;
            $specifications     = $product_xml_item->Specifications;
            $additional_infos   = $product_xml_item->AdditionalInfos;
            $parent_code        = $product_xml_item->ParentCode;
            $vat                = $product_xml_item->Vat;
            $warn_gr            = $product_xml_item->WARNGR;
            $warn_en            = $product_xml_item->WARNEN;
            $distributor        = $product_xml_item->DISTRIBUTOR;
            $minimum_quantity   = $product_xml_item->MinimumQuantity;
            $increment_quantity = $product_xml_item->IncrementQuantity;


            //$extra_images = array();
            if( isset($product_xml_item->ProductExtraImage_1) && !empty($product_xml_item->ProductExtraImage_1) ) {
                $extra_images[] = $product_xml_item->ProductExtraImage_1;
            }
            if( isset($product_xml_item->ProductExtraImage_2) && !empty($product_xml_item->ProductExtraImage_2) ) {
                $extra_images[] = $product_xml_item->ProductExtraImage_2;
            }
            if( isset($product_xml_item->ProductExtraImage_3) && !empty($product_xml_item->ProductExtraImage_3) ) {
                $extra_images[] = $product_xml_item->ProductExtraImage_3;
            }
            if( isset($product_xml_item->ProductExtraImage_4) && !empty($product_xml_item->ProductExtraImage_4) ) {
                $extra_images[] = $product_xml_item->ProductExtraImage_4;
            }

            if( isset($extra_images) && count($extra_images) > 0 ) {
                $additional_images = implode(",",$extra_images);
            }
            else {
                $additional_images = "";
            }

            //check if product already exists
            $check_product_id = db_get_field("SELECT `id` FROM ?:eldico_bridge_products WHERE `eldc_product_id` = ?i", $product_id);
            if ($check_product_id) { //UPDATE
                $date_updated = date('d-m-Y H:i:s');
                $total_products_count++;
                $total_products_update++;
                $eldc_flag = 1;

                $data_update_products = array(
                    'eldc_product_id'           => $product_id,
                    'eldc_code'                 => $code,
                    'eldc_barcode'              => $barcode,
                    'eldc_product_title'        => $title,
                    'eldc_product_description'  => $description,
                    'eldc_small_description'    => $small_description,
                    'eldc_large_description'    => $large_description,
                    'eldc_product_image'        => $image,
                    'eldc_product_extra_image'  => $additional_images,
                    'eldc_manufacturer'         => $manufacturer,
                    'eldc_category_id'          => $category_id,
                    'eldc_category'             => $category,
                    'eldc_wholesale_price'      => $wholesale_price,
                    'eldc_discount_category'    => $discount_category,
                    'eldc_retail_price'         => $retail_price,
                    'eldc_price_change'         => $price_change,
                    'eldc_premium_product'      => $premium_product,
                    'eldc_recycle'              => $recycle,
                    'eldc_availability'         => $availability,
                    'eldc_athens'               => $athens,
                    'eldc_thessaloniki'         => $thessaloniki,
                    'eldc_expected'             => $expected,
                    'eldc_warranty'             => $warranty,
                    'eldc_country'              => $country,
                    'eldc_box_weight'           => $box_weight,
                    'eldc_box_volume'           => $box_volume,
                    'eldc_packaging_info'       => $package_info,
                    'eldc_product_dimensions'   => $product_dimensions,
                    'eldc_product_weight'       => $product_weight,
                    'eldc_product_volume'       => $product_volume,
                    'eldc_specifications'       => $specifications,
                    'eldc_additional_infos'     => $additional_infos,
                    'eldc_parent_code'          => $parent_code,
                    'eldc_vat'                  => $vat,
                    'eldc_warn_gr'              => $warn_gr,
                    'eldc_warn_en'              => $warn_en,
                    'eldc_distributor'          => $distributor,
                    'eldc_minimum_quantity'     => $minimum_quantity,
                    'eldc_flag'                 => $eldc_flag,
                    'eldc_increment_quantity'   => $increment_quantity,
                    'eldc_date_updated'         => $date_updated,
                );
                $product_updated = db_query('UPDATE ?:eldico_bridge_products SET ?u WHERE id = ?i', $data_update_products, $check_product_id);
                if($product_updated) {
                    echo "product_id :: " . $check_product_id . " updated! \n";
                }
            } else { //INSERT
                $product_bridge_date_created = date('d-m-Y H:i:s');
                $total_products_count++;
                $total_products_insert++;
                $eldc_flag = 2;

                $data_insert_products = array(
                    'eldc_product_id'           => $product_id,
                    'eldc_code'                 => $code,
                    'eldc_barcode'              => $barcode,
                    'eldc_product_title'        => $title,
                    'eldc_product_description'  => $description,
                    'eldc_small_description'    => $small_description,
                    'eldc_large_description'    => $large_description,
                    'eldc_product_image'        => $image,
                    'eldc_product_extra_image'  => $additional_images,
                    'eldc_manufacturer'         => $manufacturer,
                    'eldc_category_id'          => $category_id,
                    'eldc_category'             => $category,
                    'eldc_wholesale_price'      => $wholesale_price,
                    'eldc_discount_category'    => $discount_category,
                    'eldc_retail_price'         => $retail_price,
                    'eldc_price_change'         => $price_change,
                    'eldc_premium_product'      => $premium_product,
                    'eldc_recycle'              => $recycle,
                    'eldc_availability'         => $availability,
                    'eldc_athens'               => $athens,
                    'eldc_thessaloniki'         => $thessaloniki,
                    'eldc_expected'             => $expected,
                    'eldc_warranty'             => $warranty,
                    'eldc_country'              => $country,
                    'eldc_box_weight'           => $box_weight,
                    'eldc_box_volume'           => $box_volume,
                    'eldc_packaging_info'       => $package_info,
                    'eldc_product_dimensions'   => $product_dimensions,
                    'eldc_product_weight'       => $product_weight,
                    'eldc_product_volume'       => $product_volume,
                    'eldc_specifications'       => $specifications,
                    'eldc_additional_infos'     => $additional_infos,
                    'eldc_parent_code'          => $parent_code,
                    'eldc_vat'                  => $vat,
                    'eldc_warn_gr'              => $warn_gr,
                    'eldc_warn_en'              => $warn_en,
                    'eldc_distributor'          => $distributor,
                    'eldc_minimum_quantity'     => $minimum_quantity,
                    'eldc_increment_quantity'   => $increment_quantity,
                    'eldc_flag'                 => $eldc_flag,
                    'eldc_date_created'         => $product_bridge_date_created,
                );
                $product_inserted = db_query('INSERT INTO ?:eldico_bridge_products ?e', $data_insert_products);
                if($product_inserted) {
                    echo "product_id :: " . $product_id . " inserted! \n";
                }
            }
        } //end foreach loop
    }
    else {
        fn_set_notification('E', __('error_notice'), __('ds_eldico_bridge_error_connecting'));
    }

    Tygh::$app['view']->assign('products_total', $total_products_count);
    Tygh::$app['view']->assign('products_created', $total_products_insert);
    Tygh::$app['view']->assign('products_updated', $total_products_update);
}

if($mode == "categories") { //add from TEMP to cs-cart
    $categories = db_get_array("SELECT DISTINCT(`eldc_category`) FROM ?:eldico_bridge_products");
    if($categories) {
        foreach ($categories as $category) {
            $category_explode = explode("->", $category['eldc_category']);
            $count_category_explode = count($category_explode);
            for($i = 0; $i < $count_category_explode; $i++) {
                $category_item = trim($category_explode[$i]);
                $check_category = fn_ds_eldico_bridge_check_category_id_by_name($category_item);
                if (!$check_category) { //INSERT NEW PARENT CATEGORY
                    if($i == 0) {
                        $data_category = array(
                            'category' => ($category_item) ? $category_item : 0,
                            'company_id' => fn_get_runtime_company_id(),
                            'status' => 'A'
                        );
                        $create_category = createCategoryAPI($data_category);
                        //$create_category = (!$check_category) ? createCategoryAPI($data_category) : updateCategoryAPI($data_category);
    //                }
                    }
                    elseif($i == 1) { //second level category
                        $check_category_first_level = fn_ds_eldico_bridge_check_category_id_by_name(trim($category_explode[$i - 1])); //returns category_id
                        $data_category_first = array(
                            'category' => ($category_item) ? $category_item : 0,
                            'company_id' => fn_get_runtime_company_id(),
                            'parent_id' => $check_category_first_level,
                            'status' => 'A'
                        );
                        $create_category = createCategoryAPI($data_category_first);
                    }
                    else { //third level category (max level we could have)
                        $check_category_second_level = fn_ds_eldico_bridge_check_category_id_by_name(trim($category_explode[$i - 1])); //returns category_id
                        //echo $check_category_second_level;
                        //die;
                        $data_category_second = array(
                            'category' => ($category_item) ? $category_item : 0,
                            'company_id' => fn_get_runtime_company_id(),
                            'parent_id' => $check_category_second_level,
                            'status' => 'A'
                        );
                        $create_category = createCategoryAPI($data_category_second);
                    }
                }
                else {
                    echo "category name :: " . $check_category . " already exists SKIPPED! \n";
                }
            } //end for loop
            //initialize array of categories and subcategories
            if($data_category)
                unset($data_category);
            if($data_category_first)
                unset($data_category_first);
            if($data_category_second)
                unset($data_category_second);
        } //end foreach loop
    }
}

if($mode == "products_categories") { //add cscart_category_id From Bridge to TEMP table (cscart_eldico_bridge_categories)
    $categories = db_get_array("SELECT `id`,`eldc_category` FROM ?:eldico_bridge_products");
    if($categories) {
        foreach ($categories as $category) {
            $category_explode = explode("->", $category['eldc_category']);
            $count_category_explode = count($category_explode);
            for($i = 0; $i < $count_category_explode; $i++) {
                $category_item = trim($category_explode[$i]);
                $check_category = fn_ds_eldico_bridge_check_category_id_by_name($category_item);
                if($check_category) {
                    $categories_products_arr[] = $check_category; //first index is cscart_category_id
                }
            } // end for loop
            $check_category_exists = db_get_field("SELECT `id` FROM ?:eldico_bridge_categories WHERE `eldico_bridge_products_id` = ?i", $category['id']);
            if(!$check_category_exists) { //INSERT
                $insert_category_product = array(
                    'eldico_bridge_products_id' => $category['id'],
                    'category_path'             => implode(",", $categories_products_arr),
                    'parent_id'                 => $categories_products_arr[0], //maybe it is useless
                    'cscart_category_id'        => $categories_products_arr[0]
                );
                $insert_category = db_query("INSERT INTO ?:eldico_bridge_categories ?e", $insert_category_product);
                if ($insert_category) {
                    echo "cscart_category_id :: " . $categories_products_arr[0] . " inserted! \n";
                }
            }
            else { //UPDATE
                $update_category_product = array(
                    'eldico_bridge_products_id' => $category['id'],
                    'category_path'             => implode(",", $categories_products_arr),
                    'parent_id'                 => $categories_products_arr[0], //maybe it is useless
                    'cscart_category_id'        => $categories_products_arr[0]
                );
                $insert_category = db_query("UPDATE ?:eldico_bridge_categories SET ?u WHERE `id` = ?i", $update_category_product, $categories_products_arr[0]);
                if ($insert_category) {
                    echo "cscart_category_id :: " . $categories_products_arr[0] . " inserted! \n";
                }
            }

            if( isset($categories_products_arr) ) {
                unset($categories_products_arr);
            }
        } // end foreach loop
    }
}

if($mode == "features") { //add features names from Bridge to TEMP table in cs-cart (eldico_bridge_features)
    $features_names = fn_ds_eldico_bridge_get_features_names();
}

if($mode == "features_variants") { //add features variants names from Bridge to TEMP table in cs-cart (eldico_bridge_features_variants)
    $features_names = fn_ds_eldico_bridge_get_features_variants_names();
}

if($mode == "features_add") { //add features names from TEMP table to cs-cart - active ones only
    $features_add = fn_ds_eldico_bridge_add_active_features();
}

if($mode == "features_variants_add") { //add features variants from TEMP table to cs-cart (INSERT / UPDATE Features variants NOT Products)
    $features_variants_add = fn_ds_eldico_bridge_add_features_variants_names();
}

if($mode == "integrate") {
    if( !isset($_GET['cronjob']) ) {
        return;
    }

    $product_name                   = Registry::get('addons.ds_eldico_bridge.product_name');
    $product_sku                    = Registry::get('addons.ds_eldico_bridge.product_sku');
    $product_barcode                = Registry::get('addons.ds_eldico_bridge.product_barcode');
    $product_category               = Registry::get('addons.ds_eldico_bridge.product_category');
    $product_url                    = Registry::get('addons.ds_eldico_bridge.product_url');
    $product_price                  = Registry::get('addons.ds_eldico_bridge.product_price');
    $product_wholesale_price        = Registry::get('addons.ds_eldico_bridge.product_wholesale_price');
    $product_status                 = Registry::get('addons.ds_eldico_bridge.product_status');
    $product_stock_status           = Registry::get('addons.ds_eldico_bridge.product_stock_status');
    $product_seo_title              = Registry::get('addons.ds_eldico_bridge.product_seo_title');
    $product_general_description    = Registry::get('addons.ds_eldico_bridge.product_general_description');
    $product_short_description      = Registry::get('addons.ds_eldico_bridge.product_short_description');
    $product_large_description      = Registry::get('addons.ds_eldico_bridge.product_large_description');
    $products_dimensions            = Registry::get('addons.ds_eldico_bridge.products_dimensions');
    $product_weight                 = Registry::get('addons.ds_eldico_bridge.product_weight');
    $products_characteristics       = Registry::get('addons.ds_eldico_bridge.products_characteristics');
    $product_manufacturer           = Registry::get('addons.ds_eldico_bridge.product_brand');
    $product_dimensions             = Registry::get('addons.ds_eldico_bridge.product_dimensions');
    $product_images                 = Registry::get('addons.ds_eldico_bridge.product_images');


    if($_GET['cronjob'] == 0) {
        $products = db_get_array("SELECT * FROM ?:eldico_bridge_products LIMIT 50");
    }
    else { //cronjob = 1
        $products = db_get_array("SELECT * FROM ?:eldico_bridge_products");
    }

    $total_products_count = 0;
    $total_products_insert = 0;
    $total_products_update = 0;

    if($products) {
        foreach ($products as $product) {
            $data_product = array();
            $data_product["company_id"] = fn_get_runtime_company_id();

            $check_product = db_get_field("SELECT `product_id` FROM ?:products WHERE `product_code` = ?s", $product['eldc_code']);
            if($check_product) { //UPDATE
                if($product_name == "Y") {
                    if( !empty($product['eldc_product_title']) ) {
                        $data_product['product'] = $product['eldc_product_title'];
                    }
                }

                if($product_sku == "Y") {
                    if( !empty($product['eldc_code']) ) {
                        $data_product['product_code'] = $product['eldc_code'];
                    }
                }

                if($product_barcode == "Y") {
                    if( !empty($product['eldc_barcode']) ) {
                        $data_product["product_features"][12]["feature_type"] = "T";
                        $data_product["product_features"][12]["value"] = $product['eldc_barcode'];
                    }
                }

                if($product_category == "Y") { //example: Fitness -> Ελεύθερα Βάρη -> Μπάρες
                    if( !empty($product['eldc_category']) ) {
                        $categories = explode("->", $product['eldc_category']);
                        for($i = 0; $i < count($categories); $i++) {
                            if($i == 0) {
                                $cscart_category_id = fn_ds_eldico_bridge_get_cscart_category_id_by_name(trim($categories[$i]));
                                if($main_category) {
                                    $data_product['main_category'] = $cscart_category_id;
                                }
                            }
                            else {
                                $data_category_ids[] = $cscart_category_id;
                            }
                        } //end for loop
                        $data_product['category_ids'] = $data_category_ids;
                    }
                    else {
                        echo "product_id :: " . $check_product . " empty category .. SKIPPED! \n";
                        continue; //next product, because the specific one will not be updated without category
                    }
                }

                if($product_url == "Y") {

                }

                if($product_price == "Y") {
                    if( !empty($product['eldc_retail_price']) ) {
                        $data_product['price'] = $product['eldc_retail_price'];
                    }
                }

                if($product_wholesale_price == "Y") {

                }

                if($product_status == "Y") {
                    $eldc_athens = ($product['eldc_athens']) ? : 0;
                    $eldc_thessaloniki = ($product['eldc_thessaloniki']) ? : 0;
                    $total_amount = $eldc_athens + $eldc_thessaloniki;

                    if( $total_amount > 0 ) {
                        $data_product['amount'] = $total_amount;
                    }
                }

                if($product_stock_status == "Y") {
                    if( $product['eldc_availability'] > 0 ) {
                        $data_product['status'] = "A";
                    }
                    else {
                        $data_product['status'] = "D";
                    }
                }

                if($product_seo_title == "Y") {

                }

                if($product_general_description == "Y") {
                    if( !empty($product['eldc_product_description']) ) {
                        $data_product['promo'] = $product['eldc_product_description'];
                    }
                }

                if($product_short_description == "Y") {
                    if( !empty($product['eldc_small_description']) ) {
                        $data_product['short_description'] = $product['eldc_small_description'];
                    }
                }

                if($product_large_description == "Y") {
                    if( !empty($product['eldc_large_description']) ) {
                        $data_product['full_description'] = $product['eldc_large_description'];
                    }
                }

                if($product_manufacturer == "Y") {
                    ////Brands -> feature_id = 4
                    if(!empty($product['eldc_manufacturer'])) {
                        $brand_variant_id = fn_ds_eldico_bridge_get_brand_variant_id_by_name($product['eldc_manufacturer']);
                        if( !empty($brand_variant_id) ) {
                            $data_product["product_features"][4]["feature_type"] = "E";
                            $data_product["product_features"][4]["variant_id"] = $brand_variant_id;
                        }
                        else { //brand variant does not exist, thus INSERT variant name and then UPDATE the product with variant_id
                            $data_variants["company_id"] = fn_get_runtime_company_id();
                            $data_variants["variants"][]["variant"] = $product['eldc_manufacturer'];
                            $new_variant_id = createVariantsAPI(4, $data_variants);  // 4 stands for Brands
                            if( !empty($new_variant_id) ) {
                                $data_product["product_features"][4]["feature_type"] = "E";
                                $data_product["product_features"][4]["variant_id"] = $new_variant_id;
                            }
                        }
                    }
                }

                if($product_weight == "Y") {
                    if( !empty($product['eldc_product_weight']) ) {
                        $weight = explode("Kg", $product['eldc_product_weight']);
                        $data_product['weight'] = trim((int)$weight);
                    }
                }

                if($product_dimensions == "Y") {
                    if( !empty($product['eldc_product_dimensions']) ) {
                        $data_product['min_items_in_box'] = 1;
                        $dimensions = explode("x", $product['eldc_product_dimensions']);
                        $box_length = ($dimensions[0]) ? (int)$dimensions[0] : 0;
                        $box_width  = ($dimensions[1]) ? (int)$dimensions[1] : 0;
                        $box_height = ($dimensions[2]) ? (int)$dimensions[2] : 0;

                        $data_product['box_length'] = $box_length;
                        $data_product['box_width']  = $box_width;
                        $data_product['box_height'] = $box_height;
                    }
                }

                if($products_characteristics == "Y") {
                    $eldc_product_id = fn_ds_eldico_bridge_get_eldc_product_id_via_eldc_code($product['eldc_code']);
                    $product_specifications = db_get_array("SELECT pf.cscart_feature_id, fv.eldc_feature_id, fv.eldc_product_id, fv.eldc_feature_variant, fv.feature_variant_id 
                                                                FROM ?:eldico_bridge_products bp 
                                                                    INNER JOIN ?:eldico_bridge_features_variants fv ON fv.eldc_product_id = bp.eldc_product_id 
                                                                    INNER JOIN ?:eldico_bridge_features pf ON pf.id = fv.eldc_feature_id 
                                                                    WHERE fv.eldc_product_id = ?i", $eldc_product_id);
                    if($product_specifications) {
                        if($product_specifications[0]['feature_variant_id'] && $product_specifications[0]['cscart_feature_id']) {
                            foreach($product_specifications as $product_spec) {
                                $data_product["product_features"][$product_spec['cscart_feature_id']]["feature_type"]   = "S";
                                $data_product["product_features"][$product_spec['cscart_feature_id']]["feature_id"]     = $product_spec['cscart_feature_id'];
                                $data_product["product_features"][$product_spec['cscart_feature_id']]["variant_id"]     = $product_spec['feature_variant_id'];
                                $data_product["product_features"][$product_spec['cscart_feature_id']]["variants"][$product_spec['cscart_feature_id']] = array();
                                $data_product["product_features"][$product_spec['cscart_feature_id']]["variants"][$product_spec['cscart_feature_id']]['variant_id'] = $product_spec['feature_variant_id'];
                                $data_product["product_features"][$product_spec['cscart_feature_id']]["variants"][$product_spec['cscart_feature_id']]['variant'] = $product_spec['eldc_feature_variant'];
                            } // end foreach loop
                        }
                    }
                }

//                if($check_product == 6324) {
//                    echo json_encode($data_product);
//                    die;
//                }

                if($product_images == "Y") {
                    if(  !empty($product['eldc_product_image']) ) {
                        $data_product["main_pair"]["detailed"]["http_image_path"] = trim($product['eldc_product_image']);
                        $data_product["main_pair"]["detailed"]["image_path"] = trim($product['eldc_product_image']);
                        $data_product["main_pair"]["detailed"]["icon"] = $product['eldc_product_image'];
                        //additional images
                        if(  !empty($product['eldc_product_extra_image']) ) {
                            $explode_images = explode(',', $product['eldc_product_extra_image']);
                            $count_images = 0;
                            foreach ($explode_images as $image) {
                                $data_product["image_pairs"][$count_images]["detailed"]["image_path"] = trim($image);
                                $count_images++;
                            } //end foreach loop
                        }
                    }
                }

                $update_product = updateEldicoProductAPI($check_product,  $data_product);
                if($update_product['http_code'] == 200) {
                    echo "product_id :: " . $check_product . " with product_code :: " . $product['eldc_code']  . " updated! \n";
                    $total_products_update++;
                }
                else {
                    echo "error inserting product :: " . $update_product['response'] . " \n";
                }

                if( isset($update_product) ) {
                    unset($data_category_ids); //in order to discard the category_ids array from the specific product
                }
            }
            else { //INSERT
                if( !empty($product['eldc_product_title']) ) {
                    $data_product['product'] = $product['eldc_product_title'];
                }

                if( !empty($product['eldc_code']) ) {
                    $data_product['product_code'] = $product['eldc_code'];
                }

                if( !empty($product['eldc_barcode']) ) {
                    $data_product["product_features"][12]["feature_type"] = "T";
                    $data_product["product_features"][12]["value"] = $product['eldc_barcode'];
                }

                if( !empty($product['eldc_category']) ) { //example: Fitness -> Ελεύθερα Βάρη -> Μπάρες
                    $categories = explode("->", $product['eldc_category']);
                    for($i = 0; $i < count($categories); $i++) {
                        $cscart_category_id = fn_ds_eldico_bridge_get_cscart_category_id_by_name(trim($categories[$i]));
                        if($i == 0) {
                            if($cscart_category_id) {
                                $data_product['main_category'] = $cscart_category_id;
                            }
                        }
                        else {
                            $data_category_ids[] = $cscart_category_id;
                        }
                    } //end for loop
                    $data_product['category_ids'] = $data_category_ids;
                }
                else {
                    echo "product_id :: " . $check_product . " empty category .. SKIPPED! \n";
                    continue; //next product, because the specific one will not be updated without category
                }

                if($product_url == "Y") {

                }

                if( !empty($product['eldc_retail_price']) ) {
                    $data_product['price'] = $product['eldc_retail_price'];
                }

                if($product_wholesale_price == "Y") {

                }

                $eldc_athens = ($product['eldc_athens']) ? : 0;
                $eldc_thessaloniki = ($product['eldc_thessaloniki']) ? : 0;
                $total_amount = $eldc_athens + $eldc_thessaloniki;

                if( $total_amount > 0 ) {
                    $data_product['amount'] = $total_amount;
                }

                if( $product['eldc_availability'] > 0 ) {
                    $data_product['status'] = "A";
                }
                else {
                    $data_product['status'] = "D";
                }

                if($product_seo_title == "Y") {

                }

                if( !empty($product['eldc_product_description']) ) {
                    $data_product['promo'] = $product['eldc_product_description'];
                }

                if( !empty($product['eldc_small_description']) ) {
                    $data_product['short_description'] = $product['eldc_small_description'];
                }

                if( !empty($product['eldc_large_description']) ) {
                    $data_product['full_description'] = $product['eldc_large_description'];
                }

                ////Brands -> feature_id = 4
                if(!empty($product['eldc_manufacturer'])) {
                    $brand_variant_id = fn_ds_eldico_bridge_get_brand_variant_id_by_name($product['eldc_manufacturer']);
                    if( !empty($brand_variant_id) ) {
                        $data_product["product_features"][4]["feature_type"] = "E";
                        $data_product["product_features"][4]["variant_id"] = $brand_variant_id;
                    }
                    else { //brand variant does not exist, thus INSERT variant name and then UPDATE the product with variant_id
                        $data_variants["company_id"] = fn_get_runtime_company_id();
                        $data_variants["variants"][]["variant"] = $product['eldc_manufacturer'];
                        $new_variant_id = createVariantsAPI(4, $data_variants); //4 stands for Brands
                        //after inserted the new_variant_id get the value
                        $brand_variant_id = fn_ds_eldico_bridge_get_brand_variant_id_by_name($product['eldc_manufacturer']);
                        if( !empty($brand_variant_id) ) {
                            $data_product["product_features"][4]["feature_type"] = "E";
                            $data_product["product_features"][4]["variant_id"] = $brand_variant_id;
                        }
                    }
                }

                if( !empty($product['eldc_product_weight']) ) {
                    $weight = explode("Kg", $product['eldc_product_weight']);
                    $data_product['weight'] = (int)trim($weight[0]);
                }

                if( !empty($product['eldc_product_dimensions']) ) {
                    $data_product['min_items_in_box'] = 1;
                    $dimensions = explode("x", $product['eldc_product_dimensions']);
                    $box_length = ($dimensions[0]) ? (int)$dimensions[0] : 0;
                    $box_width  = ($dimensions[1]) ? (int)$dimensions[1] : 0;
                    $box_height = ($dimensions[2]) ? (int)$dimensions[2] : 0;

                    $data_product['box_length'] = $box_length;
                    $data_product['box_width']  = $box_width;
                    $data_product['box_height'] = $box_height;
                }

                if($products_characteristics == "Y") {
                    $eldc_product_id = fn_ds_eldico_bridge_get_eldc_product_id_via_eldc_code($product['eldc_code']);
                    $product_specifications = db_get_array("SELECT pf.cscart_feature_id, fv.eldc_feature_id, fv.eldc_product_id, fv.eldc_feature_variant, fv.feature_variant_id 
                                                                FROM ?:eldico_bridge_products bp 
                                                                    INNER JOIN ?:eldico_bridge_features_variants fv ON fv.eldc_product_id = bp.eldc_product_id 
                                                                    INNER JOIN ?:eldico_bridge_features pf ON pf.id = fv.eldc_feature_id 
                                                                    WHERE fv.eldc_product_id = ?i", $eldc_product_id);
                    if($product_specifications) {
                        if ($product_specifications[0]['feature_variant_id'] > 0 && $product_specifications[0]['cscart_feature_id'] > 0) {
                            foreach($product_specifications as $product_spec) {
                                $data_product["product_features"][$product_spec['cscart_feature_id']]["feature_type"]   = "S";
                                //$data_product["product_features"][$product_spec['cscart_feature_id']]["feature_id"]   = $product_spec['cscart_feature_id'];
                                $data_product["product_features"][$product_spec['cscart_feature_id']]["variant_id"]     = $product_spec['feature_variant_id'];
                                $data_product["product_features"][$product_spec['cscart_feature_id']]["variant"]        = $product_spec['eldc_feature_variant'];
                                //$data_product["product_features"][$product_spec['cscart_feature_id']]["variants"][$product_spec['cscart_feature_id']] = array();
                                //$data_product["product_features"][$product_spec['cscart_feature_id']]["variants"][$product_spec['cscart_feature_id']]['variant_id'] = $product_spec['feature_variant_id'];
                                //$data_product["product_features"][$product_spec['cscart_feature_id']]["variants"][$product_spec['cscart_feature_id']]['variant'] = $product_spec['eldc_feature_variant'];
                            }
                        }
                    }
                }

                if(  !empty($product['eldc_product_image']) ) {
                    $data_product["main_pair"]["detailed"]["http_image_path"] = trim($product['eldc_product_image']);
                    $data_product["main_pair"]["detailed"]["image_path"] = trim($product['eldc_product_image']);
                    $data_product["main_pair"]["detailed"]["icon"] = $product['eldc_product_image'];
                    //additional images
                    if(  !empty($product['eldc_product_extra_image']) ) {
                        $explode_images = explode(',', $product['eldc_product_extra_image']);
                        $count_images = 0;
                        foreach ($explode_images as $image) {
                            $data_product["image_pairs"][$count_images]["detailed"]["image_path"] = trim($image);
                            $count_images++;
                        } //end foreach loop
                    }
                }

//                echo json_encode($data_product);
//                die;

                $insert_product = createEldicoProductAPI($data_product);
                if($insert_product['http_code'] == 200) {
                    echo "product inserted! \n";
                    $total_products_insert++;
                }
                else {
                    echo "error inserting product :: " . $insert_product['response'] . " \n";
                }
                unset($data_category_ids); //in order to discard the category_ids array from the specific product
            }

            $total_products_count++;
            unset($data_product);
        } //end foreach loop
    }

    Tygh::$app['view']->assign('products_total', $total_products_count);
    Tygh::$app['view']->assign('products_created', $total_products_insert);
    Tygh::$app['view']->assign('products_updated', $total_products_update);

}