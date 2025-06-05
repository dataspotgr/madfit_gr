<?php
/* Smarty version 4.3.0, created on 2025-05-23 10:47:31
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\exim\components\export_csv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68302813694749_64111929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24b44c105e79ef134b39a5ff04fe21bada1565a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\exim\\components\\export_csv.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68302813694749_64111929 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['fields']->value) {
echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['fields']->value);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_data']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['data']->value);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
