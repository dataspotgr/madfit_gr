<?php
<<<<<<< HEAD
<<<<<<<< HEAD:var/cache/templates/backend/25f76eefcf20a640c5a40ea85847baebe6e1abf6_2.tygh.tabs_content.post.tpl.php
/* Smarty version 4.3.0, created on 2025-06-02 09:25:20
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\categories\tabs_content.post.tpl' */
========
/* Smarty version 4.3.0, created on 2025-05-23 11:22:56
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\orders\tabs_content.post.tpl' */
>>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862:var/cache/templates/backend/f45fff80c8794fe6e99672ef8d1f985f401f9d90_2.tygh.tabs_content.post.tpl.php
=======
/* Smarty version 4.3.0, created on 2025-05-27 14:49:50
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\categories\tabs_content.post.tpl' */
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
<<<<<<<< HEAD:var/cache/templates/backend/25f76eefcf20a640c5a40ea85847baebe6e1abf6_2.tygh.tabs_content.post.tpl.php
  'unifunc' => 'content_683d43d0507423_55441519',
========
  'unifunc' => 'content_6830306074cec7_33678597',
>>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862:var/cache/templates/backend/f45fff80c8794fe6e99672ef8d1f985f401f9d90_2.tygh.tabs_content.post.tpl.php
=======
  'unifunc' => 'content_6835a6de7a7642_29163116',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f76eefcf20a640c5a40ea85847baebe6e1abf6' => 
    array (
<<<<<<< HEAD
<<<<<<<< HEAD:var/cache/templates/backend/25f76eefcf20a640c5a40ea85847baebe6e1abf6_2.tygh.tabs_content.post.tpl.php
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\tabs_content.post.tpl',
      1 => 1743766598,
========
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\orders\\tabs_content.post.tpl',
      1 => 1747915842,
>>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862:var/cache/templates/backend/f45fff80c8794fe6e99672ef8d1f985f401f9d90_2.tygh.tabs_content.post.tpl.php
=======
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\tabs_content.post.tpl',
      1 => 1747996585,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/discussion.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
<<<<<<<< HEAD:var/cache/templates/backend/25f76eefcf20a640c5a40ea85847baebe6e1abf6_2.tygh.tabs_content.post.tpl.php
function content_683d43d0507423_55441519 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || !fn_allowed_for("ULTIMATE")) {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>0), 0, false);
}
========
function content_6830306074cec7_33678597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0, false);
>>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862:var/cache/templates/backend/f45fff80c8794fe6e99672ef8d1f985f401f9d90_2.tygh.tabs_content.post.tpl.php
=======
function content_6835a6de7a7642_29163116 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || !fn_allowed_for("ULTIMATE")) {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>0), 0, false);
}
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
}
}
