<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:30:15
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\companies\components\company_status_switcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f18d7aa5c36_69574235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0ff646e3bbd6e53e1c3b27167549c3fccc69836' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\companies\\components\\company_status_switcher.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/switcher.tpl' => 1,
  ),
),false)) {
function content_682f18d7aa5c36_69574235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>"company-switch-storefront-status-button",'id'=>"switch_storefront_status_".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'checked'=>$_smarty_tpl->tpl_vars['company']->value['storefront_status'] == smarty_modifier_enum("StorefrontStatuses::OPEN"),'extra_attrs'=>array("data-ca-company-id"=>$_prefixVariable2,"data-ca-opened-status"=>$_prefixVariable3,"data-ca-closed-status"=>$_prefixVariable4,"data-ca-return-url"=>$_prefixVariable5)), 0, false);
}
}
