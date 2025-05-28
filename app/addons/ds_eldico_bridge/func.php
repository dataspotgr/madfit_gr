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