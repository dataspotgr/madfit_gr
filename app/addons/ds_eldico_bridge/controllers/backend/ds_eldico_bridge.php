<?php

use Tygh\Registry;
use Tygh\Http;

if (!defined('BOOTSTRAP')) { die('Access denied'); }


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

}

if($mode == "eldico_products") {
    $xml_url = Registry::get('addons.ds_eldico_bridge.website_url');
    $username = Registry::get('addons.ds_eldico_bridge.user_email_api');
    $password = Registry::get('addons.ds_eldico_bridge.user_password_api');

    $url = "https://".$username.":".$password."@".$xml_url;
    $xmlstr = get_xml_from_url($url);
    $xmlobj = new SimpleXMLElement($xmlstr);

    $total_products_count = 0;
    $total_products_insert = 0;
    $total_products_update = 0;

    if ($xmlobj) {
        $temp_char = array();
        foreach ($xmlobj->product as $product_xml_item) {
            //$strtotime        = strtotime("now");
            $date_format        = date("d/m/Y H:i:s");
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


            $extra_images = array();
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

            if( count($extra_images) > 0 ) {
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
                    'eldc_date_updated'         => $date_updated,
                );
                $product_uppdated = db_query('UPDATE ?:eldico_bridge_products SET ?u WHERE id = ?i', $data_update_products, $check_product_id);
                if($product_uppdated) {
                    echo "product_id :: " . $check_product_id . " updated! \n";
                }
            } else { //INSERT
                $product_bridge_date_created = date('d-m-Y H:i:s');
                $total_products_count++;
                $total_products_insert++;
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
                    'eldc_date_created'          => $product_bridge_date_created,
                );
                //echo "INSERTED " . $kkk_sku . "<br />";
                $product_inserted = db_query('INSERT INTO ?:eldico_bridge_products ?e', $data_insert_products);
                if($product_inserted) {
                    echo "product_id :: " . $check_product_id . " inserted! \n";
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