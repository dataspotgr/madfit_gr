<?php

use Tygh\Http;
use Tygh\Registry;
use Tygh\Settings;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

function get_xml_from_url($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    $xmlstr = curl_exec($ch);// or die(curl_error($ch));
    curl_close($ch);
    return $xmlstr;
}

/**
 * CS-Cart API Functions
 */

function createEldicoProductAPI($product_data) {
    $website_url        = Registry::get('addons.ds_eldico_bridge.website_url');
    $user_email_api     = Registry::get('addons.ds_eldico_bridge.user_email_api');
    $user_password_api  = Registry::get('addons.ds_eldico_bridge.user_password_api');
    $admin_base64 = base64_encode($user_email_api.":".$user_password_api);

    if(!empty($admin_base64)) {
        $product_data_string = json_encode($product_data);
        //var_dump($product_data);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $website_url."/api.php?_d=products",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $product_data_string,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic ".$admin_base64,
                "Content-Type: application/json",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        //var_dump($response);
        $err = curl_error($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if (!$err) {
            return array(
                'http_code' => $http_code,
                'response'  => $response
            );
        }
        else {
            return array(
                'http_code' => $http_code,
                'response'  => $response,
                'error'     => $err
            );
            //return "cURL Error #:" . $err;
        }
    }
}

function updateEldicoProductAPI($product_id, $product_data) {
    $website_url        = Registry::get('addons.ds_eldico_bridge.website_url');
    $user_email_api     = Registry::get('addons.ds_eldico_bridge.user_email_api');
    $user_password_api  = Registry::get('addons.ds_eldico_bridge.user_password_api');
    $admin_base64 = base64_encode($user_email_api.":".$user_password_api);
    if(!empty($admin_base64)) {
        $product_data_json = json_encode($product_data);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $website_url."/api.php?_d=products/".$product_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $product_data_json,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic " . $admin_base64,
                "Content-Type: application/json",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if (!$err) {
            return array(
                'http_code' => $http_code,
                'response'  => $response
            );
        }
        else {
            return array(
                'http_code' => $http_code,
                'response'  => $response,
                'error'     => $err
            );
            //return "cURL Error #:" . $err;
        }
    }
}

function createVariantsAPI($feature_id, $data_variants) {
    $website_url        = Registry::get('addons.ds_eldico_bridge.website_url');
    $user_email_api     = Registry::get('addons.ds_eldico_bridge.user_email_api');
    $user_password_api  = Registry::get('addons.ds_eldico_bridge.user_password_api');
    $admin_base64 = base64_encode($user_email_api.":".$user_password_api);
    if(!empty($admin_base64)) {
        $product_data_json = json_encode($data_variants);
        //echo $product_data_json;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $website_url."/api.php?_d=features/".$feature_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $product_data_json,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic " . $admin_base64,
                "Content-Type: application/json",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if (!$err) {
            return array(
                'http_code' => $http_code,
                'response'  => $response
            );
        }
        else {
            return array(
                'http_code' => $http_code,
                'response'  => $response,
                'error'     => $err
            );
            //return "cURL Error #:" . $err;
        }
    }
}

function getVariantsAPI($feature_id) {
    $website_url        = Registry::get('addons.ds_eldico_bridge.website_url');
    $user_email_api     = Registry::get('addons.ds_eldico_bridge.user_email_api');
    $user_password_api  = Registry::get('addons.ds_eldico_bridge.user_password_api');
    $admin_base64 = base64_encode($user_email_api.":".$user_password_api);
    if(!empty($admin_base64)) {
        //$product_data_json = json_encode($data_variants);
        //echo $product_data_json;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $website_url."/api.php?_d=features/".$feature_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            //CURLOPT_POSTFIELDS => $product_data_json,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic " . $admin_base64,
                "Content-Type: application/json",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if (!$err) {
            return array(
                'http_code' => $http_code,
                'response'  => $response
            );
        }
        else {
            return array(
                'http_code' => $http_code,
                'response'  => $response,
                'error'     => $err
            );
        }
    }
}

function createCategoryAPI($data_category) {
    $website_url        = Registry::get('addons.ds_eldico_bridge.website_url');
    $user_email_api     = Registry::get('addons.ds_eldico_bridge.user_email_api');
    $user_password_api  = Registry::get('addons.ds_eldico_bridge.user_password_api');
    $admin_base64 = base64_encode($user_email_api.":".$user_password_api);
    if(!empty($admin_base64)) {
        $product_data_json = json_encode($data_category);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $website_url."/api.php?_d=categories/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $product_data_json,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic " . $admin_base64,
                "Content-Type: application/json",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if (!$err) {
            return array(
                'http_code' => $http_code,
                'response'  => $response
            );
        }
        else {
            return array(
                'http_code' => $http_code,
                'response'  => $response,
                'error'     => $err
            );
            //return "cURL Error #:" . $err;
        }
    }
}

function updateCategoryAPI($data_category) {
    $website_url        = Registry::get('addons.ds_eldico_bridge.website_url');
    $user_email_api     = Registry::get('addons.ds_eldico_bridge.user_email_api');
    $user_password_api  = Registry::get('addons.ds_eldico_bridge.user_password_api');
    $admin_base64 = base64_encode($user_email_api.":".$user_password_api);
    if(!empty($admin_base64)) {
        $product_data_json = json_encode($data_category);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $website_url."/api.php?_d=categories/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $product_data_json,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic " . $admin_base64,
                "Content-Type: application/json",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if (!$err) {
            return array(
                'http_code' => $http_code,
                'response'  => $response
            );
        }
        else {
            return array(
                'http_code' => $http_code,
                'response'  => $response,
                'error'     => $err
            );
            //return "cURL Error #:" . $err;
        }
    }
}

function createFeatureAPI($data_feature) {
    $website_url        = Registry::get('addons.ds_eldico_bridge.website_url');
    $user_email_api     = Registry::get('addons.ds_eldico_bridge.user_email_api');
    $user_password_api  = Registry::get('addons.ds_eldico_bridge.user_password_api');
    $admin_base64 = base64_encode($user_email_api.":".$user_password_api);
    if(!empty($admin_base64)) {
        $data_feature_json = json_encode($data_feature);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $website_url."/api.php?_d=features/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data_feature_json,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic " . $admin_base64,
                "Content-Type: application/json",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if (!$err) {
            return array(
                'http_code' => $http_code,
                'response'  => $response
            );
        }
        else {
            return array(
                'http_code' => $http_code,
                'response'  => $response,
                'error'     => $err
            );
            //return "cURL Error #:" . $err;
        }
    }
}

/**
 * CS-Cart Add-on's Functions
 */
function fn_ds_eldico_bridge_get_brand_variant_id_by_name($brand_name) {
    $variant_id = db_get_field("SELECT `variant_id` FROM ?:product_feature_variant_descriptions WHERE `variant` = ?s", $brand_name);
    if($variant_id) {
        return $variant_id;
    }
}

function fn_ds_eldico_bridge_check_category_id_by_name($category_name) {
    $category_id = db_get_field("SELECT `category_id` FROM ?:category_descriptions WHERE `category` = ?s AND `lang_code` = ?s", $category_name, CART_LANGUAGE);
    if($category_id) {
        return $category_id;
    }
}

function fn_ds_eldico_bridge_get_cscart_category_id_by_name($category_name) {
    $category_id = db_get_field("SELECT `category_id` FROM ?:category_descriptions WHERE `category` = ?s AND `lang_code` = ?s", $category_name, CART_LANGUAGE);
    if($category_id) {
        return $category_id;
    }
}

function fn_ds_eldico_bridge_get_feature_status() {
    $features_statuses = db_get_array("SELECT * FROM ?:eldico_bridge_features");
    if($features_statuses) {
        return $features_statuses;
    }
}

function fn_ds_eldico_bridge_get_features_names() {
    $features = db_get_array("SELECT id, eldc_specifications 
                                    FROM ?:eldico_bridge_products 
                                        WHERE (eldc_specifications <> '') 
                                          GROUP BY eldc_specifications");
    if($features) {
        foreach ($features as $feature) {
            if( $feature['eldc_specifications'] ) { //some values has 0, thus in this way we prevent the execution of features below
                $feature_explode = '';
                $feature_explode = explode("|", $feature['eldc_specifications']);
                if($feature_explode) {
                    foreach ($feature_explode as $sub_feature) {
                        $sub_feature_explode = explode(":", $sub_feature);
                        if( !empty(trim($sub_feature_explode[0])) ) {
                            $feature_item = trim($sub_feature_explode[0]);
                        }
                        $feature_names[] = $feature_item;
                    } //end foreach loop
                }
            }
        } //end foreach loop

        $features_names_unique = array_unique($feature_names);
        foreach ($features_names_unique as $feature_name_unique) {
            $check_feature_name = fn_eldico_bridge_check_feature_name($feature_name_unique);
            if($check_feature_name) {
                continue;
            }
            else {
                //INSERT Feature Name
                $data_feature = array(
                    'cscart_feature_id' => 0,
                    'eldc_feature_name' => $feature_name_unique,
                    'eldc_feature_status' => 0
                );
                $insert_feature_name = db_query('INSERT INTO ?:eldico_bridge_features ?e', $data_feature);
                if($insert_feature_name) {
                    echo "feature name :: " . $feature_name_unique . " inserted! \n";
                }
            }
        } //end foreach loop
    }
//    fn_print_r(array_unique($feature_names));
}

function fn_eldico_bridge_check_feature_name($feature_name) {
    $feature_name_id = db_get_field("SELECT id FROM ?:eldico_bridge_features WHERE `eldc_feature_name` = ?s ", $feature_name);
    if($feature_name_id) {
        return $feature_name_id;
    }
}

function fn_eldico_bridge_get_feature_id_by_name($feature_name) {
    $feature_id = db_get_field("SELECT `id` FROM ?:eldico_bridge_features WHERE `eldc_feature_name` = ?s", $feature_name);
    if($feature_id) {
        return $feature_id;
    }
}

function fn_eldico_bridge_check_feature_variant_name($feature_name, $get_feature_id) {
    $feature_variant_id = db_get_field("SELECT `id` FROM ?:eldico_bridge_features_variants WHERE `eldc_feature_id` = ?i AND `eldc_feature_variant` = ?s", $get_feature_id, $feature_name);
    if($feature_variant_id) {
        return $feature_variant_id;
    }
}

function fn_ds_eldico_bridge_get_features_variants_names() {
    $products_features_variants = db_get_array("SELECT id, eldc_product_id, eldc_specifications 
                                                        FROM ?:eldico_bridge_products 
                                                          WHERE (eldc_specifications <> '')");
    if ($products_features_variants) {
        foreach ($products_features_variants as $products_feature_variant) {
            if( $products_feature_variant['eldc_specifications'] ) { //some values has 0, thus in this way we prevent the execution of features below
                $feature_explode = '';
                $feature_explode = explode("|", $products_feature_variant['eldc_specifications']);
                if($feature_explode) {
                    foreach ($feature_explode as $sub_feature) {
                        $sub_feature_explode = explode(":", $sub_feature);
                        if( !empty(trim($sub_feature_explode[0])) && !empty(trim($sub_feature_explode[1])) ) {
                            $get_feature_id = fn_eldico_bridge_get_feature_id_by_name(trim($sub_feature_explode[0]));
                            $feature_variant_name = trim($sub_feature_explode[1]);

                            //check if variant name already exists
                            $exist_variant_name = fn_eldico_bridge_check_feature_variant_name($feature_variant_name, $get_feature_id);
                            if(!$exist_variant_name) { //if not exist, INSERT
                                $create_features_variants = array(
                                    'eldc_feature_id'       => $get_feature_id,
                                    'eldc_id'               => $products_feature_variant['id'],
                                    'eldc_product_id'       => $products_feature_variant['eldc_product_id'],
                                    'eldc_feature_variant'  => $feature_variant_name
                                );

                                $add_variant_name = db_query("INSERT INTO ?:eldico_bridge_features_variants ?e", $create_features_variants);
                            }
                        }
                    } //end foreach loop
                }
            }
        } // end foreach loop
    }
}

function fn_ds_eldico_bridge_add_features_variants_names()
{
    $active_features_status = db_get_array("SELECT `id` FROM ?:eldico_bridge_features WHERE eldc_feature_status = ?i", 1);
    if ($active_features_status) {
        foreach ($active_features_status as $eldico_bridge_features_id) {
            $active_features = db_get_array("SELECT bfv.id, bf.cscart_feature_id, bf.eldc_feature_name, bfv.eldc_feature_variant
                                                FROM ?:eldico_bridge_features bf
                                                  INNER JOIN ?:eldico_bridge_features_variants bfv ON bfv.eldc_feature_id = bf.id
                                                  WHERE bf.eldc_feature_status = 1 AND bfv.eldc_feature_id = ?i", $eldico_bridge_features_id['id']); //LIMIT 1 //get new variants ONLY, thus INSERT
            //fn_print_r($active_features);
            //die;
            if ($active_features) {
                foreach ($active_features as $active_feature_variant_value) { //get variant values only
                    $data_variant_values[]['variant'] = $active_feature_variant_value['eldc_feature_variant'];
                } //end foreach loop
                //echo json_encode($data_variant_values);
                //fn_print_r($data_variant_values);
                //die;
                $data_variant['company_id'] = fn_get_runtime_company_id();
                $data_variant['feature_type'] = 'S';
                $data_variant['feature_name'] = $active_features[0]['eldc_feature_name'];
                $data_variant['variants'] = $data_variant_values;
                $cscart_feature_id = $active_features[0]['cscart_feature_id'];
                //fn_print_r($data_variant);
                //echo json_encode($data_variant);
                //die;
                $create_feature_variant = createVariantsAPI($cscart_feature_id, $data_variant);
                if ($create_feature_variant['http_code'] == 200) {
                    echo "variant_id(s) for feature_id :: " . $cscart_feature_id . " inserted! \n";
                    //if variants INSERT-ed successfully, get variant_id(s) and UPDATE the table cscart_eldico_bridge_features_variants
                    $get_feature_variants = getVariantsAPI($cscart_feature_id);
                    if ($get_feature_variants['http_code'] == 200) {
                        $feature_variants = json_decode($get_feature_variants['response']);
                        $active_features_count = 0;
                        foreach ($feature_variants->variants as $feature_variant) {
                            $data_variant_arr = array(
                                'feature_variant_id' => $feature_variant->variant_id
                            );
                            $update_eldico_bridge_features_variants = db_query("UPDATE ?:eldico_bridge_features_variants SET ?u WHERE `id` = ?i", $data_variant_arr, $active_features[$active_features_count]['id']);
                            $active_features_count++;
                        } // end foreach loop
                        //fn_print_r($get_feature_variants);
                        //die;
                    }
                } else {
                    echo "response= " . $create_feature_variant['response'] . "\n";
                    echo "error else= " . $create_feature_variant['error'];
                }
                unset($data_variant_values);
                unset($data_variant);
            }
        } //end foreach loop

        $active_features = db_get_array("SELECT bfv.id, bf.cscart_feature_id, bf.eldc_feature_name, bfv.eldc_feature_variant
                                        FROM ?:eldico_bridge_features bf
                                        INNER JOIN ?:eldico_bridge_features_variants bfv ON bfv.eldc_feature_id = bf.id
                                        WHERE bf.eldc_feature_status = 1"); //LIMIT 1 //get new variants ONLY, thus INSERT
        //fn_print_r($active_features);
        //die;
        if ($active_features) {
            foreach ($active_features as $active_feature_variant_value) { //get variant values only
                $data_variant_values[]['variant'] = $active_feature_variant_value['eldc_feature_variant'];
            }
            //echo json_encode($data_variant_values);
            //fn_print_r($data_variant_values);
            //die;
            $data_variant['company_id'] = fn_get_runtime_company_id();
            $data_variant['feature_type'] = 'S';
            $data_variant['feature_name'] = $active_features[0]['eldc_feature_name'];
            $data_variant['variants'] = $data_variant_values;
            $cscart_feature_id = $active_features[0]['cscart_feature_id'];
//        fn_print_r($data_variant);
            //echo json_encode($data_variant);
            //die;
            $create_feature_variant = createVariantsAPI($cscart_feature_id, $data_variant);
            if ($create_feature_variant['http_code'] == 200) {
                echo "variant_id(s) for feature_id :: " . $cscart_feature_id . " inserted! \n";
                //if variants INSERTed successfully, get variant_id(s) and UPDATE the table cscart_eldico_bridge_features_variants
                $get_feature_variants = getVariantsAPI($cscart_feature_id);
                if ($get_feature_variants['http_code'] == 200) {
                    $feature_variants = json_decode($get_feature_variants['response']);
                    $active_features_count = 0;
                    foreach ($feature_variants->variants as $feature_variant) {
                        $data_variant_arr = array(
                            'feature_variant_id' => $feature_variant->variant_id
                        );
                        $update_eldico_bridge_features_variants = db_query("UPDATE ?:eldico_bridge_features_variants SET ?u WHERE `id` = ?i", $data_variant_arr, $active_features[$active_features_count]['id']);
                        $active_features_count++;
                    } // end foreach loop
                    //fn_print_r($get_feature_variants);
                    //die;
                }
            } else {
                echo "response= " . $create_feature_variant['response'] . "\n";
                echo "error else= " . $create_feature_variant['error'];
            }
            unset($data_variant_values);
            unset($data_variant);
        }
    }
}

function fn_ds_eldico_bridge_check_feature_name($cscart_feature_name) {
    $feature_exist = db_get_field("SELECT `pf`.`feature_id` 
                                        FROM ?:product_features pf
                                          INNER JOIN ?:product_features_descriptions pfd ON pf.feature_id = pfd.feature_id
                                          WHERE `pfd`.`description` = ?s", $cscart_feature_name);
    if($feature_exist) {
        return $feature_exist;
    }
}

function fn_ds_eldico_bridge_add_active_features() {
    $get_features_active = db_get_array("SELECT * FROM ?:eldico_bridge_features WHERE `eldc_feature_status` = 1");
    if($get_features_active) {
        foreach ($get_features_active as $create_feature) {
            $check_feature = fn_ds_eldico_bridge_check_feature_name($create_feature['eldc_feature_name']);
            if($check_feature) {
                continue;
            }

            $create_data_feature = array(
                'company_id'    => 1,
                'description'   => $create_feature['eldc_feature_name'],
                'feature_type'  => 'S' //Αναζήτηση προϊόντος με φίλτρα
                //'categories_path' => '' //Comma-separated string of category IDs
            );
            $feature_results = createFeatureAPI($create_data_feature);
            if($feature_results['http_code'] == 201) { //created
                $feature_decode = json_decode($feature_results['response']);
                if($feature_decode->feature_id) { //UPDATE cscart_feature_id at eldico_bridge_features
                    $date_update_bridge_features = array(
                        'cscart_feature_id' => $feature_decode->feature_id
                    );
                    $update_cscart_feature_id = db_query('UPDATE ?:eldico_bridge_features SET ?u WHERE `id` = ?i', $date_update_bridge_features, $create_feature['id']);
                    if($update_cscart_feature_id) {
                        echo "feature_id :: " . $update_cscart_feature_id . " created! \n";
                    }
                }
            }
            else {
                $data_error_feature_add = array(
                    'eldc_comments' => $feature_results['http_code'],
                    'eldc_log'      => $feature_results['response']
                );
                fn_ds_eldico_bridge_logs($data_error_feature_add);
            }
            unset($create_data_feature);
        } // end foreach loop
    }
}


function fn_ds_eldico_bridge_logs($data_logs) {
    if($data_logs) {
        $data_logs_results = array(
            'eldc_comments' => ( !empty($data_logs['eldc_comments']) ) ? $data_logs['eldc_comments'] : '',
            'eldc_log'      => ( !empty($data_logs['eldc_log']) ) ? !empty($data_logs['eldc_log']) : ''
        );
        $update_cscart_feature_id = db_query('INSERT INTO ?:eldico_bridge_logs ?e', $data_logs_results);
    }
}

/**
 * DEPRECATED Functions
 *
 */

function fn_ds_eldico_bridge_get_main_category_id_by_name($category_name) { //DEPRECATED
    $category_id = db_get_field("SELECT `category_id` FROM ?:category_descriptions WHERE `category` = ?s AND `lang_code` = ?s", $category_name, CART_LANGUAGE);
    if($category_id) {
        return $category_id;
    }
}

function fn_ds_eldico_bridge_get_category_ids_by_name($category_name) { //DEPRECATED

}

function fn_ds_eldico_bridge_add_features_variants_names_OLD() { //DEPRECATED
    $active_features = db_get_array("SELECT * FROM ?:eldico_bridge_features WHERE `eldc_feature_status` = 1");
    if ($active_features) {
        foreach ($active_features as $active_feature) {
            $query_feature = '%'.$active_feature["eldc_feature_name"].'%';
            $products_features_variants = db_get_array("SELECT id, eldc_product_id, eldc_specifications 
                                                            FROM ?:eldico_bridge_products 
                                                            WHERE (eldc_specifications <> '') AND `eldc_specifications` LIKE ?l", $query_feature); //where l => LIKE '%%'

            //fn_print_r($products_features_variants);

            if ($products_features_variants) {
                foreach ($products_features_variants as $products_feature_variant) {
                    $products_feature_variant['id'];
                    echo "<br />";
                    echo "product_id= ".$products_feature_variant['eldc_product_id'];
                    echo "<br />";
                    //$products_feature_variant['eldc_specifications'];
                } // end foreach loop
            }
        } // end foreach loop
    }
}