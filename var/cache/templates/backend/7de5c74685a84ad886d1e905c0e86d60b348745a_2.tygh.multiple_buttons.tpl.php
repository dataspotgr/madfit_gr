<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:03:12
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\buttons\multiple_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6bf0b4f849_90168637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7de5c74685a84ad886d1e905c0e86d60b348745a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\buttons\\multiple_buttons.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/add_empty_item.tpl' => 1,
    'tygh:buttons/clone_item.tpl' => 1,
    'tygh:buttons/remove_item.tpl' => 1,
  ),
),false)) {
function content_680b6bf0b4f849_90168637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('tag_level', (($tmp = $_smarty_tpl->tpl_vars['tag_level']->value ?? null)===null||$tmp==='' ? "1" ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_unique_id', (($tmp = $_smarty_tpl->tpl_vars['is_unique_id']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('add_empty_item_on_click', $_smarty_tpl->tpl_vars['is_unique_id']->value ? "Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", undefined, undefined, true);" : "Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).");");
if ($_smarty_tpl->tpl_vars['on_add']->value) {
$_smarty_tpl->_assignInScope('add_empty_item_on_click', ((string)$_smarty_tpl->tpl_vars['add_empty_item_on_click']->value)." ".((string)$_smarty_tpl->tpl_vars['on_add']->value));
}
$_smarty_tpl->_assignInScope('clone_item_on_click', $_smarty_tpl->tpl_vars['is_unique_id']->value ? "Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", true, undefined, true);" : "Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", true);");
if ($_smarty_tpl->tpl_vars['only_delete']->value != "Y") {?><div class="btn-group"><?php if (!$_smarty_tpl->tpl_vars['hide_add']->value) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/add_empty_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_onclick'=>$_smarty_tpl->tpl_vars['add_empty_item_on_click']->value,'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0, false);
}
if (!$_smarty_tpl->tpl_vars['hide_clone']->value) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/clone_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_onclick'=>$_smarty_tpl->tpl_vars['clone_item_on_click']->value,'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0, false);
}
}
$_smarty_tpl->_subTemplateRender("tygh:buttons/remove_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('only_delete'=>$_smarty_tpl->tpl_vars['only_delete']->value,'but_class'=>"cm-delete-row"), 0, false);
if ($_smarty_tpl->tpl_vars['only_delete']->value != "Y") {?></div><?php }
}
}
