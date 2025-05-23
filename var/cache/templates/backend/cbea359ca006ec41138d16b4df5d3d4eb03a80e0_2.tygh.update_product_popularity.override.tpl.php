<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:54:28
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_popularity.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683061f43c5149_01706805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbea359ca006ec41138d16b4df5d3d4eb03a80e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_popularity.override.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683061f43c5149_01706805 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("popularity")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
