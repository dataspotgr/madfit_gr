<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:50:21
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\product_bundles\hooks\products\product_tabs.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2b9dc76e70_14224566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '818afb6e000c700ed692da03cb8b4f2b0f19acfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\product_bundles\\hooks\\products\\product_tabs.pre.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f2b9dc76e70_14224566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.component.php','function'=>'smarty_block_component',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['product_bundles']['show_bundles'] === "before_product_description") {?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/hooks/products/product_tabs.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/hooks/products/product_tabs.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['product_bundles']['show_bundles'] === "before_product_description") {?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
