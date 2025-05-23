<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:54:27
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_tax_ids.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683061f316d1c1_06227940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba360dcec43eb1253cb8405a7516d1b73cd0af80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_tax_ids.override.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683061f316d1c1_06227940 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tax_ids")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
