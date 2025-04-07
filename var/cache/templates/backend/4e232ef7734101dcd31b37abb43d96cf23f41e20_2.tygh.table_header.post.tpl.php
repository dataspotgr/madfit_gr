<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:35:09
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_bundles\hooks\product_picker\table_header.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea53bd91daf7_56822270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e232ef7734101dcd31b37abb43d96cf23f41e20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_bundles\\hooks\\product_picker\\table_header.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ea53bd91daf7_56822270 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('price','discount','value','discounted_price','product_bundles.show_on_product_page'));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "product_bundles" || $_smarty_tpl->tpl_vars['extra_mode']->value === "product_bundles") {?>
    <th><?php echo $_smarty_tpl->__("price");?>
</th>
    <th><?php echo $_smarty_tpl->__("discount");?>
</th>
    <th><?php echo $_smarty_tpl->__("value");?>
</th>
    <th><?php echo $_smarty_tpl->__("discounted_price");?>
</th>
    <th><?php echo $_smarty_tpl->__("product_bundles.show_on_product_page");?>
</th>
<?php }
}
}
