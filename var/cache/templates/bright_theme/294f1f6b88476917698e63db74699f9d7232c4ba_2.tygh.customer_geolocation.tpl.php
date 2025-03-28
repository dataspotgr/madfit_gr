<?php
/* Smarty version 4.3.0, created on 2025-03-26 02:43:09
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\geo_maps\views\geo_maps\customer_geolocation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3cc2d568e39_40448435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '294f1f6b88476917698e63db74699f9d7232c4ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\geo_maps\\views\\geo_maps\\customer_geolocation.tpl',
      1 => 1742455422,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_67e3cc2d568e39_40448435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.location_detection_disabled','ok','geo_maps.location_detection_disabled','ok'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-geo-maps__geolocation__location-selector" data-ca-geo-map-location-element="location_selector">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"geo_maps:customer_location_selector"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"geo_maps:customer_location_selector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ty-geo-maps__geolocation__map"
         data-ca-geo-map-location-element="map"
    ></div>

    <div class="ty-geo-maps__geolocation__map__load-error hidden"
         data-ca-geo-map-location-element="map_load_error_message">
        <?php echo $_smarty_tpl->__("geo_maps.location_detection_disabled");?>

    </div>

    <div class="buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_meta'=>"ty-btn__primary cm-dialog-closer ty-btn ty-float-right ty-geo-maps__geolocation__set-location pending",'but_text'=>$_smarty_tpl->__("ok")), 0, false);
?>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"geo_maps:customer_location_selector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/views/geo_maps/customer_geolocation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/views/geo_maps/customer_geolocation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-geo-maps__geolocation__location-selector" data-ca-geo-map-location-element="location_selector">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"geo_maps:customer_location_selector"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"geo_maps:customer_location_selector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ty-geo-maps__geolocation__map"
         data-ca-geo-map-location-element="map"
    ></div>

    <div class="ty-geo-maps__geolocation__map__load-error hidden"
         data-ca-geo-map-location-element="map_load_error_message">
        <?php echo $_smarty_tpl->__("geo_maps.location_detection_disabled");?>

    </div>

    <div class="buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_meta'=>"ty-btn__primary cm-dialog-closer ty-btn ty-float-right ty-geo-maps__geolocation__set-location pending",'but_text'=>$_smarty_tpl->__("ok")), 0, true);
?>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"geo_maps:customer_location_selector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php }
}
}
