<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:30:36
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\companies\tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f18ec99b399_92525444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '316fc4afa4eb2cdbee0ebbb09ec8a379ec8ed68a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\companies\\tabs_content.post.tpl',
      1 => 1747915842,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/discussion.tpl' => 1,
  ),
),false)) {
function content_682f18ec99b399_92525444 (Smarty_Internal_Template $_smarty_tpl) {
if (!fn_allowed_for("ULTIMATE")) {?>
	<?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0, false);
}
}
}
