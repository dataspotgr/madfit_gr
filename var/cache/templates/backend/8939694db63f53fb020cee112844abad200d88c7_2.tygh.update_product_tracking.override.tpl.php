<?php
/* Smarty version 4.3.0, created on 2025-05-28 14:03:52
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_tracking.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6836ed9829fa89_38881751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8939694db63f53fb020cee112844abad200d88c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_tracking.override.tpl',
      1 => 1747996606,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6836ed9829fa89_38881751 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tracking")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
