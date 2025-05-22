<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:07:34
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_amount.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6cf6401150_13155212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '937662ad6a76c5323b494724282fa15ab7c45fba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_amount.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6cf6401150_13155212 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("amount")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
