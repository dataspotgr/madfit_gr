<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:35:08
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\vendor_communication\hooks\products\update_tools_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea53bc074872_32667817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5c9e62e3abb70658fd8fc0fdaba106dc99a9827' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\products\\update_tools_list.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 1,
  ),
),false)) {
function content_67ea53bc074872_32667817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null),'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'menu_button'=>true,'divider'=>true), 0, false);
}
}
