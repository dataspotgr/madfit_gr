<?php
/* Smarty version 4.3.0, created on 2025-03-26 03:44:47
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\vendor_communication\hooks\orders\tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3da9fb9f995_79220842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92e3d4fb52fa26298da9c2275e5f323e743369ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\orders\\tabs_extra.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/thread_view.tpl' => 2,
  ),
),false)) {
function content_67e3da9fb9f995_79220842 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/thread_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value,'is_user_can_manage_order_thread'=>$_smarty_tpl->tpl_vars['is_user_can_manage_customer_order_thread']->value,'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0, false);
}
if ($_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/thread_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value,'is_user_can_manage_order_thread'=>$_smarty_tpl->tpl_vars['is_user_can_manage_vendor_order_thread']->value,'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0, true);
}
}
}
