<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:35:02
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_availability.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea53b669e085_65504907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb777dbd048eeb77a3d8ffb0c332c0bb0433dd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_availability.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ea53b669e085_65504907 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("availability")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
