<?php

use Tygh\Registry;
use Tygh\Http;
use Tygh\Settings;

if (!defined('BOOTSTRAP')) { die('Access denied'); }


function test(){
    $settings = Registry::get('addons.ds_boxnow');
    return $settings['api_url'];
}

function fn_ds_boxnow_tracking_number($shipment_id)
{
    $tracking_number = db_get_field('SELECT tracking_number FROM ?:shipments WHERE shipment_id = ?i', $shipment_id);

    if (empty($tracking_number)) {
        return false; 
    }

    return $tracking_number;
}

function fn_ds_boxnow_boxnow_carrier($shipment_id)
{
    $carrier = db_get_field('SELECT carrier FROM ?:shipments WHERE shipment_id = ?i', $shipment_id);

    if (empty($carrier)) {
        return false; 
    }

    return $carrier;
}

function fn_ds_boxnow_product_weight($product_id)
{
    $weight = db_get_field('SELECT weight FROM ?:products WHERE product_id = ?i', $product_id);

    if (empty($weight)) {
        return false; 
    }
    return $weight;
}

function fn_ds_boxnow_get_contact_info_from_settings()
{
    $contact = [];

    $contact['contactName'] = Settings::instance()->getValue('company_name', 'Company') ?? 'Store';
    $contact['contactEmail'] = Settings::instance()->getValue('company_site_administrator', 'Company') ?? 'noreply@example.com'; // fallback if you don’t have this, change it
    $contact['contactNumber'] = Settings::instance()->getValue('company_phone', 'Company') ?? '+302100000000';

    return $contact;
}

function fn_ds_boxnow_get_field_of_locker_id(){
    $field_id = db_get_field('SELECT field_id FROM ?:profile_fields WHERE field_name = ?s', 's_locker_id');
    return $field_id;
}

function fn_ds_boxnow_create_shipment_post($shipment_data, $shipment_id, $order_info)
{
    // error_log('DEBUG: shipment_data = ' . print_r($shipment_data, true));
    // error_log('DEBUG: shipment_id = ' . print_r($shipment_id, true));
    // error_log('DEBUG: order_info = ' . print_r($order_info, true));

    

    if (!empty($shipment_data['carrier']) && $shipment_data['carrier'] === 'boxnow') {

        //error_log("BOXNOW carrier selected for order_id {$shipment_data['order_id']}");

        $order_info = fn_get_order_info($shipment_data['order_id']);
        error_log('DEBUG: order_info = ' . print_r($order_info['fields'][fn_ds_boxnow_get_field_of_locker_id()], true));

        if (empty($order_info)) {
            error_log("ERROR: Order info could not be loaded for order_id {$shipment_data['order_id']}");
            return;
        }

     
        $settings = Registry::get('addons.ds_boxnow');
        $client_id = $settings['client_id'] ?? '';
        $client_secret = $settings['client_secret'] ?? '';
        $api_url = $settings['api_url'] ?? 'https://api-production.boxnow.gr';
        $origin_location_id = $settings['origin_id']; 

        if (empty($client_id) || empty($client_secret)) {
            error_log('ERROR: BoxNow Client ID or Client Secret not configured.');
            return;
        }

       
        $auth_url = rtrim($api_url, '/') . '/api/v1/auth-sessions';
        $auth_payload = [
            'grant_type' => 'client_credentials',
            'client_id' => $client_id,
            'client_secret' => $client_secret,
        ];
        $auth_headers = [
            'Content-Type: application/json',
        ];
        $auth_response = Http::post($auth_url, json_encode($auth_payload), ['headers' => $auth_headers]);
        $auth_data = json_decode($auth_response, true);

        if (empty($auth_data['access_token'])) {
            error_log("ERROR: BoxNow authentication failed. Response: " . print_r($auth_response, true));
            return;
        }

        $access_token = $auth_data['access_token'];

        if ($api_url === 'https://api-stage.boxnow.gr') {
            $destination_location_id = '4';
        } else {
            $destination_location_id = (string) $order_info['fields'][fn_ds_boxnow_get_field_of_locker_id()];
        }
        
          
        if (empty($destination_location_id)) {
            error_log("ERROR: Destination location ID not found in order fields for order_id {$shipment_data['order_id']}");
            return;
        }

        $contact_name = trim(($order_info['firstname'] ?? '') . ' ' . ($order_info['lastname'] ?? ''));
        $contact_email = $order_info['email'] ?? 'no-reply@example.com';
        $contact_phone = $order_info['phone'] ?? '+306900000000';

        $contact_website = fn_ds_boxnow_get_contact_info_from_settings();
        //error_log('DEBUG: contact_website = ' . print_r($contact_website, true));
    
        $items = [];
        if (!empty($order_info['products'])) {
            foreach ($order_info['products'] as $cart_id => $product) {
                $product_weight = fn_ds_boxnow_product_weight($product['product_id']);
                if ($product_weight) {
                    $product['weight'] = $product_weight;
                } else {
                    $product['weight'] = 1; // Default weight if not found
                }

                $items[] = [
                    'id' => (string) $product['product_id'],
                    'name' => $product['product'],
                    'value' => number_format($product['price'], 2, '.', ''),
                    'compartmentSize' => 1, 
                    'weight' => (int) $product['weight'] 
                ];
                //error_log('DEBUG: weight = ' . print_r($product, true));
            }
        }

        if (strpos($contact_website['contactNumber'], '+30') !== 0) {
            $contact_website['contactNumber'] = '+30' . ltrim($contact_website['contactNumber'], '0');
        }
        
        if (strpos($contact_phone, '+30') !== 0) {
            $contact_phone = '+30' . ltrim($contact_phone, '0');
        }
      
        $delivery_payload = [
            "orderNumber" => (string) $shipment_data['order_id'] . '-' . time(),
            "invoiceValue" => number_format($order_info['total'], 2, '.', ''),
            "paymentMode" => "prepaid",
            "amountToBeCollected" => "0.00",
            //"notifyOnAccepted" => $contact_website['contactEmail'],
            "notifyOnAccepted" => $contact_email,
            "origin" => [
                "contactNumber" => $contact_website['contactNumber'],
                "contactEmail"  => $contact_website['contactEmail'],
                "contactName"   => $contact_website['contactName'],
                "locationId" => (string) $origin_location_id
            ],
            "destination" => [
                "contactNumber" => $contact_phone,
                "contactEmail" => $contact_email,
                "contactName" => $contact_name,
                "locationId" => $destination_location_id
            ],
            "items" => $items
        ];

        $delivery_url = rtrim($api_url, '/') . '/api/v1/delivery-requests';
        $delivery_headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $access_token,
        ];
        $delivery_response = Http::post($delivery_url, json_encode($delivery_payload), ['headers' => $delivery_headers]);
        $delivery_data = json_decode($delivery_response, true);

        //error_log("BOXNOW delivery request response: " . print_r($delivery_data, true));
     
        if (!empty($delivery_data['parcels'][0]['id'])) {
            $tracking_number = $delivery_data['parcels'][0]['id'];

            $real_shipment_id = db_get_field(
                'SELECT s.shipment_id FROM ?:shipments AS s INNER JOIN ?:shipment_items AS si ON si.shipment_id = s.shipment_id WHERE si.order_id = ?i ORDER BY s.shipment_id DESC',
                $shipment_data['order_id']
            );

            if (!empty($real_shipment_id)) {
                db_query('UPDATE ?:shipments SET tracking_number = ?s WHERE shipment_id = ?i', $tracking_number, $real_shipment_id);
                error_log("Tracking number {$tracking_number} saved to shipment {$real_shipment_id}");
            } else {
                error_log("ERROR: Could not find shipment linked to order_id {$shipment_data['order_id']}");
            }
        } else {
            error_log("ERROR: BoxNow delivery request failed or invalid response structure. Full response: " . print_r($delivery_data, true));
        }
    }
}