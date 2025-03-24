<?php
/* Smarty version 4.3.0, created on 2025-03-20 02:22:27
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_options_settings.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbde5342e4b8_49827483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc45657fdce504d6e608b5a3b80b174241ce543' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_options_settings.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dbde5342e4b8_49827483 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("options_type") && !$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("exceptions_type")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
