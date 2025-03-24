<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:27:58
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\store_locator\hooks\shippings\calculate_cost.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd5b4e8d1217_08171733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3137850f8d464fe8805489fa00a2e8dfee9d2354' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\store_locator\\hooks\\shippings\\calculate_cost.pre.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_field.tpl' => 1,
  ),
),false)) {
function content_67dd5b4e8d1217_08171733 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value && $_smarty_tpl->tpl_vars['shipping']->value['company_id'] == 0) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"calculate_data[company_id]",'id'=>"company_id_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0, false);
}
}
}
