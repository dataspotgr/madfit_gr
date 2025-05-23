<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:54:26
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_min_qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683061f2df15d9_36280856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '537b9ec3ff3ec19b2bebdacdf6ed564afa3d51c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_min_qty.override.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683061f2df15d9_36280856 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("min_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
