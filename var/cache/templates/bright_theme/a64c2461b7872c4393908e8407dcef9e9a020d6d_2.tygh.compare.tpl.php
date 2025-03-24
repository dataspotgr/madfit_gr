<?php
/* Smarty version 4.3.0, created on 2025-03-20 05:40:27
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\views\product_features\compare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dc0cbb535ff0_06975036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a64c2461b7872c4393908e8407dcef9e9a020d6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\views\\product_features\\compare.tpl',
      1 => 1742455415,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/continue_shopping.tpl' => 4,
    'tygh:common/image.tpl' => 2,
    'tygh:common/product_data.tpl' => 2,
    'tygh:blocks/list_templates/simple_list.tpl' => 2,
    'tygh:buttons/button.tpl' => 4,
    'tygh:common/subheader.tpl' => 2,
  ),
),false)) {
function content_67dc0cbb535ff0_06975036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),5=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),6=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),7=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_products_selected','all_features','all_features','similar_only','similar_only','different_only','different_only','remove','remove','remove','clear_list','add_feature','add','compare','no_products_selected','all_features','all_features','similar_only','similar_only','different_only','different_only','remove','remove','remove','clear_list','add_feature','add','compare'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['comparison_data']->value) {?>
    <p class="ty-no-items ty-compare__no-items"><?php echo $_smarty_tpl->__("no_products_selected");?>
</p>
    <div class="buttons-container ty-compare__button-empty">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0, false);
?>
    </div>
<?php } else { ?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <div class="ty-compare">
        <div class="ty-compare__wrapper">
            <table class="ty-compare-products">
                <tr>
                    <td class="ty-compare-products__menu">
                        <ul class="ty-compare-menu">
                            <li class="ty-compare-menu__item"><?php if ($_smarty_tpl->tpl_vars['action']->value != "show_all") {?><a class="ty-compare-menu__a" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare.show_all"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("all_features");?>
</a><?php } else { ?><span class="ty-compare-menu__elem"><?php echo $_smarty_tpl->__("all_features");?>
</span><?php }?></li>
                            <li class="ty-compare-menu__item"><?php if ($_smarty_tpl->tpl_vars['action']->value != "similar_only") {?><a class="ty-compare-menu__a" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare.similar_only"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("similar_only");?>
</a><?php } else { ?><span class="ty-compare-menu__elem"><?php echo $_smarty_tpl->__("similar_only");?>
</span><?php }?></li>
                            <li class="ty-compare-menu__item"><?php if ($_smarty_tpl->tpl_vars['action']->value != "different_only") {?><a class="ty-compare-menu__a" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare.different_only"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("different_only");?>
</a><?php } else { ?><span class="ty-compare-menu__elem"><?php echo $_smarty_tpl->__("different_only");?>
</span><?php }?></li>
                        </ul>
                    </td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison_data']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <td class="ty-compare-products__product">
                        <?php $_smarty_tpl->_assignInScope('compare_product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:product_compare"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:product_compare"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="ty-compare-products__item">
                            <div class="ty-compare-products__delete"><a href="<?php echo htmlspecialchars((string) fn_url("product_features.delete_product?product_id=".((string)$_smarty_tpl->tpl_vars['compare_product_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-remove"  title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-remove__icon"),$_smarty_tpl);?>
<span class="ty-remove__txt"><?php echo $_smarty_tpl->__("remove");?>
</span></a></div>
                            <div class="ty-compare-products__img"><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['compare_product_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'obj_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0, true);
?></a></div>
                        </div>

                        <div class="ty-compare-products__item">
                            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['compare_product_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:product_compare"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_old_price'=>true,'show_price_values'=>true,'show_price'=>true,'show_clean_price'=>true), 0, true);
?>
                        <div class="ty-compare-products__item">
                            <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>

                            <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                            <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                        </div>

                        <div class="ty-compare-products__item"><?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('min_qty'=>true,'product'=>$_smarty_tpl->tpl_vars['product']->value,'show_add_to_cart'=>true,'but_role'=>"action",'hide_price'=>true), 0, true);
?></div>
                    </td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            </table>

            <div class="ty-compare-feature">
                <table class="ty-compare-feature__table">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison_data']->value['product_features'], 'group_features', false, 'group_id', 'feature_groups', array (
));
$_smarty_tpl->tpl_vars['group_features']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_id']->value => $_smarty_tpl->tpl_vars['group_features']->value) {
$_smarty_tpl->tpl_vars['group_features']->do_else = false;
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_features']->value, '_feature', false, 'id', 'product_features', array (
));
$_smarty_tpl->tpl_vars['_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['_feature']->value) {
$_smarty_tpl->tpl_vars['_feature']->do_else = false;
?>
                        <tr class="ty-compare-feature__row">
                            <td class="ty-compare-feature__item ty-compare-sort">
                                <strong class="ty-compare-sort__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_feature']->value, ENT_QUOTES, 'UTF-8');?>
:</strong>
                                    <a href="<?php echo htmlspecialchars((string) fn_url("product_features.delete_feature?feature_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-compare-sort__a ty-icon-cancel-circle" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
                            </td>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison_data']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <td class="ty-compare-feature__item ty-compare-feature_item_size">

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['id']->value]) {?>
                                    <?php $_smarty_tpl->_assignInScope('feature', $_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['id']->value]);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('feature', $_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['group_id']->value]['subfeatures'][$_smarty_tpl->tpl_vars['id']->value]);?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix'] && $_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] === smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?><span class="ty-compare-checkbox" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['feature']->value['value'] === "Y") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);
}?></span><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX") && $_smarty_tpl->tpl_vars['feature']->value['variants']) {?><ul class="ty-compare-list"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><li class="ty-compare-list__item"><span class="ty-compare-checkbox" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);?>
</span>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php } elseif (in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],array(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"),smarty_modifier_enum("ProductFeatures::EXTENDED"),smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
break 1;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((string) (($tmp = floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']) ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['feature']->value['value'] ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['suffix'] && $_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');
}?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        </div>
    </div>

    <div class="buttons-container ty-compare__buttons">
        <?php $_smarty_tpl->_assignInScope('r_url', fn_url(''));?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("clear_list"),'but_href'=>"product_features.clear_list?redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"ty-btn__tertiary"), 0, false);
?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['comparison_data']->value['hidden_features']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("add_feature")), 0, false);
?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_feature_form">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php echo smarty_function_html_checkboxes(array('name'=>"add_features",'options'=>$_smarty_tpl->tpl_vars['comparison_data']->value['hidden_features'],'columns'=>"4"),$_smarty_tpl);?>

        <div class="buttons-container ty-mt-s">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add"),'but_name'=>"dispatch[product_features.add_feature]"), 0, true);
?>
        </div>
    </form>
    <?php }
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("compare");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/product_features/compare.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/product_features/compare.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['comparison_data']->value) {?>
    <p class="ty-no-items ty-compare__no-items"><?php echo $_smarty_tpl->__("no_products_selected");?>
</p>
    <div class="buttons-container ty-compare__button-empty">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0, true);
?>
    </div>
<?php } else { ?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <div class="ty-compare">
        <div class="ty-compare__wrapper">
            <table class="ty-compare-products">
                <tr>
                    <td class="ty-compare-products__menu">
                        <ul class="ty-compare-menu">
                            <li class="ty-compare-menu__item"><?php if ($_smarty_tpl->tpl_vars['action']->value != "show_all") {?><a class="ty-compare-menu__a" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare.show_all"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("all_features");?>
</a><?php } else { ?><span class="ty-compare-menu__elem"><?php echo $_smarty_tpl->__("all_features");?>
</span><?php }?></li>
                            <li class="ty-compare-menu__item"><?php if ($_smarty_tpl->tpl_vars['action']->value != "similar_only") {?><a class="ty-compare-menu__a" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare.similar_only"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("similar_only");?>
</a><?php } else { ?><span class="ty-compare-menu__elem"><?php echo $_smarty_tpl->__("similar_only");?>
</span><?php }?></li>
                            <li class="ty-compare-menu__item"><?php if ($_smarty_tpl->tpl_vars['action']->value != "different_only") {?><a class="ty-compare-menu__a" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare.different_only"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("different_only");?>
</a><?php } else { ?><span class="ty-compare-menu__elem"><?php echo $_smarty_tpl->__("different_only");?>
</span><?php }?></li>
                        </ul>
                    </td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison_data']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <td class="ty-compare-products__product">
                        <?php $_smarty_tpl->_assignInScope('compare_product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_features:product_compare"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_features:product_compare"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="ty-compare-products__item">
                            <div class="ty-compare-products__delete"><a href="<?php echo htmlspecialchars((string) fn_url("product_features.delete_product?product_id=".((string)$_smarty_tpl->tpl_vars['compare_product_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-remove"  title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-remove__icon"),$_smarty_tpl);?>
<span class="ty-remove__txt"><?php echo $_smarty_tpl->__("remove");?>
</span></a></div>
                            <div class="ty-compare-products__img"><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['compare_product_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'obj_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0, true);
?></a></div>
                        </div>

                        <div class="ty-compare-products__item">
                            <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['compare_product_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_features:product_compare"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_old_price'=>true,'show_price_values'=>true,'show_price'=>true,'show_clean_price'=>true), 0, true);
?>
                        <div class="ty-compare-products__item">
                            <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>

                            <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                            <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                        </div>

                        <div class="ty-compare-products__item"><?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('min_qty'=>true,'product'=>$_smarty_tpl->tpl_vars['product']->value,'show_add_to_cart'=>true,'but_role'=>"action",'hide_price'=>true), 0, true);
?></div>
                    </td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            </table>

            <div class="ty-compare-feature">
                <table class="ty-compare-feature__table">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison_data']->value['product_features'], 'group_features', false, 'group_id', 'feature_groups', array (
));
$_smarty_tpl->tpl_vars['group_features']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_id']->value => $_smarty_tpl->tpl_vars['group_features']->value) {
$_smarty_tpl->tpl_vars['group_features']->do_else = false;
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_features']->value, '_feature', false, 'id', 'product_features', array (
));
$_smarty_tpl->tpl_vars['_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['_feature']->value) {
$_smarty_tpl->tpl_vars['_feature']->do_else = false;
?>
                        <tr class="ty-compare-feature__row">
                            <td class="ty-compare-feature__item ty-compare-sort">
                                <strong class="ty-compare-sort__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_feature']->value, ENT_QUOTES, 'UTF-8');?>
:</strong>
                                    <a href="<?php echo htmlspecialchars((string) fn_url("product_features.delete_feature?feature_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-compare-sort__a ty-icon-cancel-circle" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
                            </td>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison_data']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <td class="ty-compare-feature__item ty-compare-feature_item_size">

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['id']->value]) {?>
                                    <?php $_smarty_tpl->_assignInScope('feature', $_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['id']->value]);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('feature', $_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['group_id']->value]['subfeatures'][$_smarty_tpl->tpl_vars['id']->value]);?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix'] && $_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] === smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?><span class="ty-compare-checkbox" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['feature']->value['value'] === "Y") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);
}?></span><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX") && $_smarty_tpl->tpl_vars['feature']->value['variants']) {?><ul class="ty-compare-list"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><li class="ty-compare-list__item"><span class="ty-compare-checkbox" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);?>
</span>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php } elseif (in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],array(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"),smarty_modifier_enum("ProductFeatures::EXTENDED"),smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
break 1;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((string) (($tmp = floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']) ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['feature']->value['value'] ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['suffix'] && $_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');
}?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        </div>
    </div>

    <div class="buttons-container ty-compare__buttons">
        <?php $_smarty_tpl->_assignInScope('r_url', fn_url(''));?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("clear_list"),'but_href'=>"product_features.clear_list?redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"ty-btn__tertiary"), 0, true);
?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['comparison_data']->value['hidden_features']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("add_feature")), 0, true);
?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_feature_form">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php echo smarty_function_html_checkboxes(array('name'=>"add_features",'options'=>$_smarty_tpl->tpl_vars['comparison_data']->value['hidden_features'],'columns'=>"4"),$_smarty_tpl);?>

        <div class="buttons-container ty-mt-s">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add"),'but_name'=>"dispatch[product_features.add_feature]"), 0, true);
?>
        </div>
    </form>
    <?php }
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("compare");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
