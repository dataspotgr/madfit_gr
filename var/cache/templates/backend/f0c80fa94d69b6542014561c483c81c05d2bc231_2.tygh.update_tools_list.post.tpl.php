<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:04:29
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\vendor_communication\hooks\advanced_import\update_tools_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6c3d3e3ee8_52785190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c80fa94d69b6542014561c483c81c05d2bc231' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\advanced_import\\update_tools_list.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 1,
  ),
),false)) {
function content_680b6c3d3e3ee8_52785190 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['id']->value != 0 && ($_smarty_tpl->tpl_vars['preset']->value['company_id'] != 0 || $_smarty_tpl->tpl_vars['preset']->value['company_id'] == 0 && $_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_IMPORT_PRESET') ? constant('VC_OBJECT_TYPE_IMPORT_PRESET') : null),'object_id'=>$_smarty_tpl->tpl_vars['id']->value,'menu_button'=>true), 0, false);
}
}
}
