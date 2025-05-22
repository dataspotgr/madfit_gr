<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

// Register your hook handler
fn_register_hooks(
    'create_shipment_post'
); 