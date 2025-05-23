<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:51:20
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\profiles\components\context_menu\notify_checkboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68306138ba26f0_04634740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ca72c285f31c9d064d926fee33c0185f233398c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\profiles\\components\\context_menu\\notify_checkboxes.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/notify_checkboxes.tpl' => 1,
  ),
),false)) {
function content_68306138ba26f0_04634740 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0, false);
}
}
