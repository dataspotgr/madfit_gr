<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:26:02
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\addons\components\manage\addon_install_datetime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68305b4a5aaae4_90812908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbef4d04fb2f293ead77c3ae886086cfcf7c29cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\addons\\components\\manage\\addon_install_datetime.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68305b4a5aaae4_90812908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('show_install_datetime', (($tmp = $_smarty_tpl->tpl_vars['show_install_datetime']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_install_datetime']->value) {?>
        <div class="hidden"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['install_datetime'], ENT_QUOTES, 'UTF-8');?>
</div>
<?php }
}
}
