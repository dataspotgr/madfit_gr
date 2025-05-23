<?php
$schema['top']['ds_dashboard_addons']['items']['ds_eldico_bridge'] = array(
    'attrs' => array(
        'class' => 'is-addon'
    ),
    'href' => 'javascript:void(0)',
    'position' => 400
);
$schema['top']['ds_dashboard_addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_get_products'] = array(
    'href' => 'ds_eldico_bridge.eldico_products',
    'position' => 350
);
$schema['top']['ds_dashboard_addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_get_categories'] = array(
    'href' => 'ds_eldico_bridge.eldico_categories',
    'position' => 410
);
$schema['top']['ds_dashboard_addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_logs_divider'] = array(
    'type'      => 'divider',
    'position'  => 450
);
$schema['top']['ds_dashboard_addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_categories_match'] = array(
    'href' => 'ds_eldico_bridge.categories_match',
    'position' => 470
);
$schema['top']['ds_dashboard_addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_products_integrate'] = array(
    'href' => 'ds_eldico_bridge.integrate&cronjob=0', //manually update products
    'position' => 480
);
$schema['top']['ds_dashboard_addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_categories_match_divider'] = array(
    'type'      => 'divider',
    'position'  => 485
);
$schema['top']['ds_dashboard_addons']['items']['ds_eldico_bridge']['subitems']['ds_eldico_bridge_logs'] = array(
    'href'      => 'ds_eldico_bridge.logs',
    'position'  => 500
);
return $schema;