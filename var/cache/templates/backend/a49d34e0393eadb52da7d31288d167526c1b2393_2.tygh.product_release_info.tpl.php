<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:26:26
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\product_release_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f17f2df9fb0_62187140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a49d34e0393eadb52da7d31288d167526c1b2393' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\product_release_info.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f17f2df9fb0_62187140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('env_provider', (($tmp = $_smarty_tpl->tpl_vars['env_provider']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["product.env"] ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_name_shown', (($tmp = $_smarty_tpl->tpl_vars['is_product_shown']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_version_shown', (($tmp = $_smarty_tpl->tpl_vars['is_version_shown']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_time_shown', (($tmp = $_smarty_tpl->tpl_vars['is_time_shown']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('release_time', $_smarty_tpl->tpl_vars['env_provider']->value->getReleaseTime());
$_tmp_array = isset($_smarty_tpl->tpl_vars['release_time']) ? $_smarty_tpl->tpl_vars['release_time']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['params']["[month]"] = $_smarty_tpl->__($_smarty_tpl->tpl_vars['release_time']->value['params']["[month]"]);
$_smarty_tpl->_assignInScope('release_time', $_tmp_array);?><span class="product-release"><?php if ($_smarty_tpl->tpl_vars['is_name_shown']->value) {?><span class="product-release__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['env_provider']->value->getProductName(), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['is_version_shown']->value) {?><span class="product-release__version">v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['env_provider']->value->getProductVersion(), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['is_time_shown']->value) {?><span class="product-release__time">(<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['release_time']->value['message'],$_smarty_tpl->tpl_vars['release_time']->value['params']);?>
)</span><?php }?></span><?php }
}
