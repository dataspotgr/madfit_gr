<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:03:03
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\table_col_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6be7ba0123_80495084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a83ccd3e2c458fbb78d3c73d507022e4e7d91b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\table_col_head.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6be7ba0123_80495084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('c_url', $_smarty_tpl->tpl_vars['c_url']->value ? $_smarty_tpl->tpl_vars['c_url']->value : fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('rev', $_smarty_tpl->tpl_vars['rev']->value ? $_smarty_tpl->tpl_vars['rev']->value : (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents,content_top_navigation" ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['type']->value) {?><a class="cm-ajax th-text-overflow <?php if ($_smarty_tpl->tpl_vars['type']->value === $_smarty_tpl->tpl_vars['search']->value['sort_by']) {?>th-text-overflow--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['type']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['rev']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo (($tmp = $_smarty_tpl->tpl_vars['text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['type']->value) ?? null : $tmp);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['text']->value) {?><span class="th-text-overflow"<?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</span><?php }
}
}
