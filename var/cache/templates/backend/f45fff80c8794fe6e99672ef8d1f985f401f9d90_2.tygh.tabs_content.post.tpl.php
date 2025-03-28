<?php
/* Smarty version 4.3.0, created on 2025-03-26 03:44:47
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\orders\tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3da9fac9ba9_31311262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f45fff80c8794fe6e99672ef8d1f985f401f9d90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\orders\\tabs_content.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/discussion.tpl' => 1,
  ),
),false)) {
function content_67e3da9fac9ba9_31311262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0, false);
}
}
