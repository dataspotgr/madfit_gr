<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:07:12
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\products\components\search_filters\products_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6ce07d39b8_48850137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76eee34b53c74acd0290b391e0f6550310da3c2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\products\\components\\search_filters\\products_status.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6ce07d39b8_48850137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('all_product_statuses', array());
$_smarty_tpl->_assignInScope('is_checked_some_all_product_statuses', false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_all_product_statuses(), 'status_name', false, 'status_id');
$_smarty_tpl->tpl_vars['status_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status_id']->value => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('is_search_status_equal_status_id', ($_smarty_tpl->tpl_vars['search']->value['status'] === $_smarty_tpl->tpl_vars['status_id']->value));?>
    <?php if ($_smarty_tpl->tpl_vars['is_search_status_equal_status_id']->value) {?>
        <?php $_smarty_tpl->_assignInScope('is_checked_some_all_product_statuses', true);?>
    <?php }?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['all_product_statuses']) ? $_smarty_tpl->tpl_vars['all_product_statuses']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["status_".((string)$_smarty_tpl->tpl_vars['status_id']->value)] = array('key'=>"status_".((string)(mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'))),'label'=>$_smarty_tpl->tpl_vars['status_name']->value,'value'=>$_smarty_tpl->tpl_vars['status_id']->value,'is_checked'=>$_smarty_tpl->tpl_vars['is_search_status_equal_status_id']->value);
$_smarty_tpl->_assignInScope('all_product_statuses', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('all_product_statuses', array_merge(array('status_empty'=>array('key'=>"status_empty",'label'=>"--",'value'=>false,'is_checked'=>!$_smarty_tpl->tpl_vars['is_checked_some_all_product_statuses']->value)),$_smarty_tpl->tpl_vars['all_product_statuses']->value));?>

<?php $_smarty_tpl->_assignInScope('all_product_statuses', $_smarty_tpl->tpl_vars['all_product_statuses']->value ,false ,2);
}
}
