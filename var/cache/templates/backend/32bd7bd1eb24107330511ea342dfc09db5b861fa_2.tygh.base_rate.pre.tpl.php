<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:27:57
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\store_locator\hooks\shippings\base_rate.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd5b4dcfa051_18859070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32bd7bd1eb24107330511ea342dfc09db5b861fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\store_locator\\hooks\\shippings\\base_rate.pre.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dd5b4dcfa051_18859070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('can_specify_base_rate', $_smarty_tpl->tpl_vars['shipping']->value['rate_calculation'] == "M" || $_smarty_tpl->tpl_vars['store_locator_shipping']->value ,false ,2);
}
}
