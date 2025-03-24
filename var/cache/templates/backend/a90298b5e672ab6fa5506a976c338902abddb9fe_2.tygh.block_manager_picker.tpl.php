<?php
/* Smarty version 4.3.0, created on 2025-03-21 02:38:46
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\products\components\picker\block_manager_picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd33a6864ab6_31958310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a90298b5e672ab6fa5506a976c338902abddb9fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\products\\components\\picker\\block_manager_picker.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_67dd33a6864ab6_31958310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.explode.php','function'=>'smarty_modifier_explode',),));
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_ids'=>smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['item_ids']->value),'multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'view_mode'=>$_smarty_tpl->tpl_vars['view_mode']->value,'show_positions'=>$_smarty_tpl->tpl_vars['show_positions']->value,'allow_clear'=>false,'for_current_storefront'=>true,'additional_query_params'=>http_build_query((($tmp = $_smarty_tpl->tpl_vars['additional_query_params']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp))), 0, false);
}
}
