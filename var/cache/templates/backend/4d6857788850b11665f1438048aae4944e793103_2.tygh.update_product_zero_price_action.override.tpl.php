<?php
/* Smarty version 4.3.0, created on 2025-03-20 02:22:27
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_zero_price_action.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbde53d00f41_28601318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d6857788850b11665f1438048aae4944e793103' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_zero_price_action.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dbde53d00f41_28601318 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("zero_price_action")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
