<?php
/* Smarty version 4.3.0, created on 2025-03-20 02:22:28
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_usergroup_ids.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbde54afffd1_56827361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b401022401c9621e9af18cca0467dc40d0c0e9b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_usergroup_ids.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dbde54afffd1_56827361 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("usergroup_ids")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
