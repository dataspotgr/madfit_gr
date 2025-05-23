<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:54:29
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\buttons\add_empty_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683061f56f6b92_97254228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f229fbf30be799b2d3fd4895aeab2726d06afda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\buttons\\add_empty_item.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683061f56f6b92_97254228 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="btn btn-add" name="add" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add");?>
</a>&nbsp;<?php }
}
