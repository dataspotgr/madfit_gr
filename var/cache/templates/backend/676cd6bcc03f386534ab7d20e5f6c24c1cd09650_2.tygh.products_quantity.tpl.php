<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:51:29
=======
/* Smarty version 4.3.0, created on 2025-05-23 14:07:04
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\products\components\search_filters\products_quantity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683866614e7520_49064506',
=======
  'unifunc' => 'content_683056d821af95_61106810',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '676cd6bcc03f386534ab7d20e5f6c24c1cd09650' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\products\\components\\search_filters\\products_quantity.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996702,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_683866614e7520_49064506 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683056d821af95_61106810 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
$_smarty_tpl->_assignInScope('have_amount_filter', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_items']->value, 'ff');
$_smarty_tpl->tpl_vars['ff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ff']->value) {
$_smarty_tpl->tpl_vars['ff']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['ff']->value['field_type'] == "A") {?>
        <?php $_smarty_tpl->_assignInScope('have_amount_filter', 1);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('have_amount_filter', $_smarty_tpl->tpl_vars['have_amount_filter']->value ,false ,2);
}
}
