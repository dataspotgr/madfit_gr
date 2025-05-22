<?php
/* Smarty version 4.3.0, created on 2025-04-24 16:56:20
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\components\menu\get_secondary_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680a43041698b9_54151570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42848db50ac3639097f4b37c9deed9a11341bf3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\components\\menu\\get_secondary_items.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680a43041698b9_54151570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "get_items", null, null);?>
        <?php if ((defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null)) {?>
        <?php $_smarty_tpl->_assignInScope('items', array());?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('items', $_smarty_tpl->tpl_vars['navigation']->value['static']['secondary']);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('secondary_items', $_smarty_tpl->tpl_vars['items']->value ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
