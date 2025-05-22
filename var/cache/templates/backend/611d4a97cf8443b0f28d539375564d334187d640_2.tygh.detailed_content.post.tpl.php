<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:30:36
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\seo\hooks\companies\detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f18ec8acf46_81681074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '611d4a97cf8443b0f28d539375564d334187d640' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\seo\\hooks\\companies\\detailed_content.post.tpl',
      1 => 1747915842,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/seo/common/seo_name_field.tpl' => 1,
  ),
),false)) {
function content_682f18ec8acf46_81681074 (Smarty_Internal_Template $_smarty_tpl) {
if (!fn_allowed_for("ULTIMATE")) {
$_smarty_tpl->_subTemplateRender("tygh:addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'object_name'=>"company_data",'object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>"m"), 0, false);
}
}
}
