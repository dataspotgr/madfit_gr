<?php

use Tygh\Registry;
use Tygh\Http;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'get_label') {
    $shipment_id = isset($_REQUEST['shipment_id']) ? intval($_REQUEST['shipment_id']) : 0;

    if ($shipment_id) {
        $tracking_number = fn_ds_boxnow_tracking_number($shipment_id);

        if (!empty($tracking_number)) {
            $settings = Registry::get('addons.ds_boxnow'); // ✅ Correct addon id: ds_boxnow

            $client_id = $settings['client_id'] ?? '';
            $client_secret = $settings['client_secret'] ?? '';
            $api_url = $settings['api_url'] ?? 'https://api-stage.boxnow.gr'; // default api

            if (empty($client_id) || empty($client_secret)) {
                fn_set_notification('E', __('error'), __('boxnow_credentials_missing'));
                return array(CONTROLLER_STATUS_REDIRECT, 'shipments.manage');
            }

            // Step 1: Authenticate
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

            if (!empty($auth_data['access_token'])) {
                $access_token = $auth_data['access_token'];

                // Step 2: Fetch Label PDF
                $label_url = rtrim($api_url, '/') . '/api/v1/parcels/' . $tracking_number . '/label.pdf';
                $label_headers = [
                    'Authorization: Bearer ' . $access_token,
                ];
                $response = Http::get($label_url, [], ['headers' => $label_headers]);

                if (!empty($response)) {
                    header('Content-Type: application/pdf');
                    header('Content-Disposition: inline; filename="boxnow_label_' . $tracking_number . '.pdf"');
                    echo $response;
                    exit;
                } else {
                    fn_set_notification('E', __('error'), __('boxnow_label_not_found'));
                }
            } else {
                fn_set_notification('E', __('error'), __('boxnow_authentication_failed'));
            }
        } else {
            fn_set_notification('E', __('error'), __('boxnow_tracking_number_not_found'));
        }
    } else {
        fn_set_notification('E', __('error'), __('boxnow_invalid_shipment'));
    }

    return array(CONTROLLER_STATUS_NO_PAGE);
}


if ($mode == 'cancel_shipment') {
    $shipment_id = intval($_REQUEST['shipment_id']);
    $tracking_number = fn_ds_boxnow_tracking_number($shipment_id);

    if (!$tracking_number) {
        fn_set_notification('E', __('error'), __('boxnow_tracking_number_not_found'));
        return [CONTROLLER_STATUS_REDIRECT, 'shipments.manage'];
    }

    $settings = Registry::get('addons.ds_boxnow');
    $client_id = $settings['client_id'] ?? '';
    $client_secret = $settings['client_secret'] ?? '';
    $api_url = $settings['api_url'] ?? 'https://api-production.boxnow.gr';

    // Authenticate
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

    if (!empty($auth_data['access_token'])) {
        $access_token = $auth_data['access_token'];

        // Send cancel request
        $cancel_url = rtrim($api_url, '/') . '/api/v1/parcels/' . $tracking_number . ':cancel';
        $cancel_headers = [
            'Authorization: Bearer ' . $access_token,
            'Content-Type: application/json',
        ];
        $cancel_response = Http::post($cancel_url, '', ['headers' => $cancel_headers]);
        $cancel_data = json_decode($cancel_response, true);

        $http_status = Http::getStatus();

        if ($http_status == 200) {
            fn_set_notification('N', __('notice'), __('boxnow_shipment_cancelled_successfully'));
            fn_delete_shipments([$shipment_id]);
        } else {
            fn_set_notification('E', __('error'), __('boxnow_cancel_failed'));
        }

    } else { 
        fn_set_notification('E', __('error'), __('boxnow_authentication_failed'));
    }

    return [CONTROLLER_STATUS_REDIRECT, 'shipments.manage'];
}
