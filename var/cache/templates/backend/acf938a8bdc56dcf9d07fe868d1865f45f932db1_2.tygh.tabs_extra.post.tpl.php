<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:30:36
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\companies\tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f18eca9d985_37464005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acf938a8bdc56dcf9d07fe868d1865f45f932db1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\companies\\tabs_extra.post.tpl',
      1 => 1747915842,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' => 1,
  ),
),false)) {
function content_682f18eca9d985_37464005 (Smarty_Internal_Template $_smarty_tpl) {
if (!fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0, false);
}
}
}
