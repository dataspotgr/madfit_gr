<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:07:14
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\components\search_filters\context_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6ce2c24aa4_29779812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87b0525ae8d485f96f5b2ec781aad6f004ed336f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\components\\search_filters\\context_search.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6ce2c24aa4_29779812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('search'));
if ($_smarty_tpl->tpl_vars['context_search']->value) {
$_smarty_tpl->_assignInScope('label', (($tmp = $_smarty_tpl->tpl_vars['context_search']->value['label'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("search") ?? null : $tmp));
$_smarty_tpl->_assignInScope('form_id', (($tmp = $_smarty_tpl->tpl_vars['context_search']->value['form_id'] ?? null)===null||$tmp==='' ? "search_form" ?? null : $tmp));
$_smarty_tpl->_assignInScope('name', (($tmp = $_smarty_tpl->tpl_vars['context_search']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['context_search']->value['id'] ?? null : $tmp));?><div class="context-search"><label class="context-search__label input-prepend"><input type="search" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['context_search']->value['id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="input-fill context-search__input" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['context_search']->value['value']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['context_search']->value['value'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
"/><span class="add-on context-search__addon"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"search"),$_smarty_tpl);?>
</span></label></div><?php }
}
}
