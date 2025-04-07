<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:01:26
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\products\components\search_filters\products_order_ids.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea4bd685a2d2_77767187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f3faae926b1ce420b06f57e24a1efa47efeb71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\products\\components\\search_filters\\products_order_ids.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/orders/picker.tpl' => 1,
  ),
),false)) {
function content_67ea4bd685a2d2_77767187 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
$_smarty_tpl->_subTemplateRender("tygh:pickers/orders/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_ids'=>$_smarty_tpl->tpl_vars['search']->value['order_ids'],'no_item_text'=>$_smarty_tpl->__("no_items"),'data_id'=>"order_ids",'input_name'=>"order_ids",'view_mode'=>"simple"), 0, false);
}
}
