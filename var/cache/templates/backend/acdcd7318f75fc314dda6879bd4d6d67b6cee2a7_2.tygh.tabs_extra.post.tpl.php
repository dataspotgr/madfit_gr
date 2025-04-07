<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:01:10
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\categories\tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea4bc62d21a5_67476223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acdcd7318f75fc314dda6879bd4d6d67b6cee2a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\tabs_extra.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' => 1,
  ),
),false)) {
function content_67ea4bc62d21a5_67476223 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || !fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>0), 0, false);
}
}
}
