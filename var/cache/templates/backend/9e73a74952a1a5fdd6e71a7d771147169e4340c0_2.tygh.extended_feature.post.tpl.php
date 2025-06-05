<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-30 11:48:17
=======
/* Smarty version 4.3.0, created on 2025-05-23 10:51:52
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\seo\hooks\product_features\extended_feature.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683970d14ae0f8_45626968',
=======
  'unifunc' => 'content_68302918c28907_34801963',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e73a74952a1a5fdd6e71a7d771147169e4340c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\seo\\hooks\\product_features\\extended_feature.post.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747915842,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/seo/common/seo_name_field.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_683970d14ae0f8_45626968 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_68302918c28907_34801963 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
if ($_smarty_tpl->tpl_vars['feature_type']->value == smarty_modifier_enum("ProductFeatures::EXTENDED") && ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR"))) {
$_smarty_tpl->_subTemplateRender("tygh:addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_data'=>$_smarty_tpl->tpl_vars['var']->value,'object_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."]",'hide_title'=>true,'object_id'=>$_smarty_tpl->tpl_vars['var']->value['variant_id'],'object_type'=>"e"), 0, false);
}
}
}
