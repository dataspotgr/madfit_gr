<?php
/* Smarty version 4.3.0, created on 2025-03-26 04:04:57
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\email_templates\snippets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3df59238586_35755526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef9cf130ea265c1963113c0b0badcf36c777d4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\email_templates\\snippets.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/notification_settings/components/navigation_section.tpl' => 1,
    'tygh:views/snippets/components/list.tpl' => 1,
    'tygh:views/snippets/components/adv_buttons.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_67e3df59238586_35755526 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('snippets'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/navigation_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active_section'=>$_smarty_tpl->tpl_vars['active_section']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('return_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);
$_smarty_tpl->_assignInScope('result_ids', (($tmp = $_smarty_tpl->tpl_vars['result_ids']->value ?? null)===null||$tmp==='' ? "content_snippets" ?? null : $tmp));
$_smarty_tpl->_assignInScope('type', (($tmp = $_smarty_tpl->tpl_vars['type']->value ?? null)===null||$tmp==='' ? "mail" ?? null : $tmp));
$_smarty_tpl->_assignInScope('addon', (($tmp = $_smarty_tpl->tpl_vars['addon']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
<div id="content_snippets">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/snippets/components/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('snippets'=>$_smarty_tpl->tpl_vars['snippets']->value,'type'=>"mail",'addon'=>'','result_ids'=>"content_snippets",'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value), 0, false);
?>
<!--content_snippets--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/snippets/components/adv_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('result_ids'=>$_smarty_tpl->tpl_vars['result_ids']->value,'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'addon'=>$_smarty_tpl->tpl_vars['addon']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("snippets"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
