<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:54:32
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_buttons.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683061f87cc138_65975800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c5ce20d27ec0dc2dced15b7e3d7d2b2ab5ecc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_buttons.pre.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683061f87cc138_65975800 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product_data']->value['product_type'] === constant("\Tygh\Addons\ProductVariations\Product\Type\Type::PRODUCT_TYPE_VARIATION")) {?>
    <?php $_smarty_tpl->_assignInScope('allow_clone', false ,false ,2);
}
}
}
