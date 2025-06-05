<?php
$schema['top']['addons']['items']['ds_eldico_bridge'] = array(
    'attrs' => array(
        'class' => 'is-addon'
    ),
    'href' => 'javascript:void(0)',
    'position' => 10
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_get_products'] = array(
    'href' => 'ds_eldico_bridge.eldico_products',
    'position' => 50
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_get_categories'] = array(
    'href' => 'ds_eldico_bridge.categories',
    'position' => 100
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_products_categories'] = array(
    'href' => 'ds_eldico_bridge.products_categories',
    'position' => 100
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_categories_divider'] = array(
    'type'      => 'divider',
    'position'  => 150
);
//$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_categories_match'] = array(
//    'href' => 'ds_eldico_bridge.categories_match',
//    'position' => 470
//);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_products_integrate'] = array(
    'href' => 'ds_eldico_bridge.integrate&cronjob=0', //manually update products
    'position' => 250
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_categories_match_divider'] = array(
    'type'      => 'divider',
    'position'  => 300
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_features'] = array(
    'href' => 'ds_eldico_bridge.features',
    'position' => 350
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_features_add'] = array(
    'href' => 'ds_eldico_bridge.features_add',
    'position' => 380
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_features_variants'] = array(
    'href' => 'ds_eldico_bridge.features_variants',
    'position' => 400
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_features_active'] = array(
    'href' => 'ds_eldico_bridge.features_active',
    'position' => 450
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_features_variants_add'] = array(
    'href' => 'ds_eldico_bridge.features_variants_add',
    'position' => 500
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_features_divider'] = array(
    'type'      => 'divider',
    'position'  => 550
);
$schema['top']['addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_logs'] = array(
    'href'      => 'ds_eldico_bridge.logs',
    'position'  => 900
);
return $schema;