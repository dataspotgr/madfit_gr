<?php
/* Smarty version 4.3.0, created on 2025-05-22 13:51:18
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\blocks\product_filters\horizontal_filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f01a63384d6_92105096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92be7f07970ade8a20ce40f69bf3c3fb2a4e3991' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\blocks\\product_filters\\horizontal_filters.tpl',
      1 => 1742455413,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_filters/components/product_filter_datepicker.tpl' => 2,
    'tygh:blocks/product_filters/components/product_filter_slider.tpl' => 2,
    'tygh:blocks/product_filters/components/product_filter_variants.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_682f01a63384d6_92105096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),4=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),5=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),6=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('close','close'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/product_filters.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['block']->value['type'] == "product_filters") {?>
    <?php $_smarty_tpl->_assignInScope('ajax_div_ids', "product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*");?>
    <?php $_smarty_tpl->_assignInScope('curl', $_smarty_tpl->tpl_vars['config']->value['current_url']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('curl', fn_url("products.search"));?>
    <?php $_smarty_tpl->_assignInScope('ajax_div_ids', '');
}?>

<?php $_smarty_tpl->_assignInScope('filter_base_url', fn_query_remove($_smarty_tpl->tpl_vars['curl']->value,"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"));?>

<div class="ty-horizontal-product-filters cm-product-filters cm-horizontal-filters"
    data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-base-url="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-tooltip-class = "ty-product-filters__tooltip"
    data-ca-tooltip-right-class = "ty-product-filters__tooltip--right"
    data-ca-tooltip-mobile-class = "ty-tooltip--mobile"
    data-ca-tooltip-layout-selector = "[data-ca-tooltip-layout='true']"
    data-ce-tooltip-events-tooltip = "mouseenter"
    id="product_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="ty-product-filters__wrapper">
<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'filter', false, NULL, 'filters', array (
));
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>

    <?php $_smarty_tpl->_assignInScope('filter_uid', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']));?>

    <?php $_smarty_tpl->_assignInScope('reset_url', '');?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants'] || $_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>
        <?php $_smarty_tpl->_assignInScope('reset_url', $_smarty_tpl->tpl_vars['filter_base_url']->value);?>
        <?php $_smarty_tpl->_assignInScope('fh', fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id']));?>
        <?php if ($_smarty_tpl->tpl_vars['fh']->value) {?>
            <?php $_smarty_tpl->_assignInScope('reset_url', fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)));?>
        <?php }?>
    <?php }?>

    <div class="ty-horizontal-product-filters-dropdown">
        <div id="sw_elm_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-horizontal-product-filters-dropdown__wrapper cm-combination <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants'] || $_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>active<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']) {?> (<?php echo htmlspecialchars((string) smarty_modifier_sizeof($_smarty_tpl->tpl_vars['filter']->value['selected_variants']), ENT_QUOTES, 'UTF-8');?>
)<?php }
if ($_smarty_tpl->tpl_vars['reset_url']->value) {?><a class="cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle"),$_smarty_tpl);?>
</a><?php }
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-horizontal-product-filters-dropdown__icon ty-icon-down-micro"),$_smarty_tpl);?>
</div>
        <div id="elm_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box hidden ty-horizontal-product-filters-dropdown__content cm-horizontal-filters-content">

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:product_filters_variants_element"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, true);
?>
                    <?php }?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, true);
?>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <div class="ty-product-filters__tools clearfix">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("close"),'but_meta'=>"cm-external-click",'but_external_click_id'=>"sw_elm_filter_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value)), 0, true);
?>
            </div>
        </div>
    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }?>
</div>
<!--product_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<div data-ca-tooltip-layout="true" class="hidden">
    <button type="button" data-ca-scroll=".ty-mainbox-title" class="cm-scroll ty-tooltip--link ty-tooltip--filter"><span class="tooltip-arrow"></span></button>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/horizontal_filters.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/horizontal_filters.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/product_filters.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['block']->value['type'] == "product_filters") {?>
    <?php $_smarty_tpl->_assignInScope('ajax_div_ids', "product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*");?>
    <?php $_smarty_tpl->_assignInScope('curl', $_smarty_tpl->tpl_vars['config']->value['current_url']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('curl', fn_url("products.search"));?>
    <?php $_smarty_tpl->_assignInScope('ajax_div_ids', '');
}?>

<?php $_smarty_tpl->_assignInScope('filter_base_url', fn_query_remove($_smarty_tpl->tpl_vars['curl']->value,"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"));?>

<div class="ty-horizontal-product-filters cm-product-filters cm-horizontal-filters"
    data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-base-url="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-tooltip-class = "ty-product-filters__tooltip"
    data-ca-tooltip-right-class = "ty-product-filters__tooltip--right"
    data-ca-tooltip-mobile-class = "ty-tooltip--mobile"
    data-ca-tooltip-layout-selector = "[data-ca-tooltip-layout='true']"
    data-ce-tooltip-events-tooltip = "mouseenter"
    id="product_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="ty-product-filters__wrapper">
<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'filter', false, NULL, 'filters', array (
));
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>

    <?php $_smarty_tpl->_assignInScope('filter_uid', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']));?>

    <?php $_smarty_tpl->_assignInScope('reset_url', '');?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants'] || $_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>
        <?php $_smarty_tpl->_assignInScope('reset_url', $_smarty_tpl->tpl_vars['filter_base_url']->value);?>
        <?php $_smarty_tpl->_assignInScope('fh', fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id']));?>
        <?php if ($_smarty_tpl->tpl_vars['fh']->value) {?>
            <?php $_smarty_tpl->_assignInScope('reset_url', fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)));?>
        <?php }?>
    <?php }?>

    <div class="ty-horizontal-product-filters-dropdown">
        <div id="sw_elm_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-horizontal-product-filters-dropdown__wrapper cm-combination <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants'] || $_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>active<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']) {?> (<?php echo htmlspecialchars((string) smarty_modifier_sizeof($_smarty_tpl->tpl_vars['filter']->value['selected_variants']), ENT_QUOTES, 'UTF-8');?>
)<?php }
if ($_smarty_tpl->tpl_vars['reset_url']->value) {?><a class="cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle"),$_smarty_tpl);?>
</a><?php }
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-horizontal-product-filters-dropdown__icon ty-icon-down-micro"),$_smarty_tpl);?>
</div>
        <div id="elm_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box hidden ty-horizontal-product-filters-dropdown__content cm-horizontal-filters-content">

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:product_filters_variants_element"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, true);
?>
                    <?php }?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, true);
?>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <div class="ty-product-filters__tools clearfix">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("close"),'but_meta'=>"cm-external-click",'but_external_click_id'=>"sw_elm_filter_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value)), 0, true);
?>
            </div>
        </div>
    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }?>
</div>
<!--product_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<div data-ca-tooltip-layout="true" class="hidden">
    <button type="button" data-ca-scroll=".ty-mainbox-title" class="cm-scroll ty-tooltip--link ty-tooltip--filter"><span class="tooltip-arrow"></span></button>
</div>
<?php }
}
}
