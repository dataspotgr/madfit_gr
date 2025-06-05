<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:51:21
=======
/* Smarty version 4.3.0, created on 2025-05-27 12:50:33
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\icon_deprecated.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_68386659cf5857_53383184',
=======
  'unifunc' => 'content_68358ae9d93e54_61914240',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb72ce1dd51f197f25ede97a095fdfdd20037736' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\icon_deprecated.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996626,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_68386659cf5857_53383184 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_68358ae9d93e54_61914240 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="cs-icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if (fn_is_rtl_language()) {?>dir="rtl" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['data']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'data_value', false, 'data_name');
$_smarty_tpl->tpl_vars['data_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_name']->value => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->do_else = false;
if ($_smarty_tpl->tpl_vars['data_value']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->tpl_vars['icon_text']->value) {
echo $_smarty_tpl->tpl_vars['icon_text']->value;
}?></span><?php }
}
}
