<?php
/* Smarty version 4.3.0, created on 2025-03-26 04:04:57
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\snippets\components\adv_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3df598a1ef1_23490921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b93b6ca5d59a8e66a67003a91bb8fbcc6f499487' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\snippets\\components\\adv_buttons.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_67e3df598a1ef1_23490921 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('add_snippet','add_snippet'));
if (fn_check_permissions("snippets","update","admin","POST")) {?>
    <?php $_smarty_tpl->_assignInScope('return_url_escape', rawurlencode((string)$_smarty_tpl->tpl_vars['return_url']->value));?>
    <?php $_smarty_tpl->_assignInScope('is_btn_primary', (($tmp = $_smarty_tpl->tpl_vars['is_btn_primary']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <?php ob_start();
echo $_smarty_tpl->__("add_snippet");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('method'=>"POST",'id'=>"add_snippet",'text'=>$_prefixVariable1,'link_text'=>$_smarty_tpl->__("add_snippet"),'act'=>"general",'icon'=>"icon-plus",'href'=>"snippets.update?snippet_id=0&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['result_ids']->value)."&type=".((string)$_smarty_tpl->tpl_vars['type']->value)."&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value),'link_class'=>$_smarty_tpl->tpl_vars['is_btn_primary']->value ? "btn-primary nav__actions-btn-primary" : ''), 0, false);
}
}
}
