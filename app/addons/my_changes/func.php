<?php

use Tygh\Registry;

function get_sale_percentage($product_id) {
    // Get database connection
    $db = Tygh::$app['db'];

    // Fetch list price and sale price
    $product_data = $db->getRow("SELECT list_price FROM cscart_products WHERE product_id = ?i", $product_id);
    $price_data = $db->getRow("SELECT price FROM cscart_product_prices WHERE product_id = ?i ORDER BY lower_limit ASC LIMIT 1", $product_id);

    // Check if list price exists and is greater than zero
    if (!empty($product_data['list_price']) && $product_data['list_price'] > 0) {
        $list_price = $product_data['list_price'];
        $sale_price = !empty($price_data['price']) ? $price_data['price'] : $list_price;

        // Calculate discount percentage
        if ($list_price > $sale_price) {
            $discount_percentage = (($list_price - $sale_price) / $list_price) * 100;
            return round($discount_percentage, 2) . '%';
        }
    }
    
    return '0%'; // No discount
}
