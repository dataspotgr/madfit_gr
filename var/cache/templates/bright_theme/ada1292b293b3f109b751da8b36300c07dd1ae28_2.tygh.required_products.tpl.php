<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:50:28
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\required_products\blocks\product_tabs\required_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2ba428b9c4_48046661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada1292b293b3f109b751da8b36300c07dd1ae28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\required_products\\blocks\\product_tabs\\required_products.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/products_list.tpl' => 2,
  ),
),false)) {
function content_682f2ba428b9c4_48046661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['required_products']) {
$_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>"Y",'details_page'=>false,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>false,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>false,'show_product_labels'=>false,'show_discount_label'=>false,'show_shipping_label'=>false,'show_product_amount'=>true,'show_product_options'=>true,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/required_products/blocks/product_tabs/required_products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/required_products/blocks/product_tabs/required_products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['required_products']) {
$_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>"Y",'details_page'=>false,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>false,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>false,'show_product_labels'=>false,'show_discount_label'=>false,'show_shipping_label'=>false,'show_product_amount'=>true,'show_product_options'=>true,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0, true);
}
}
}
}
