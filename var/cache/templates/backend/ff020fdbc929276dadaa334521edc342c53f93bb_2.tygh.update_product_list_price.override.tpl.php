<?php
/* Smarty version 4.3.0, created on 2025-03-20 02:22:27
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_list_price.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbde53b56c44_97621257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff020fdbc929276dadaa334521edc342c53f93bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_list_price.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dbde53b56c44_97621257 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("list_price")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
