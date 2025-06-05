<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:51:24
=======
/* Smarty version 4.3.0, created on 2025-05-23 14:06:57
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\products\components\context_menu\edit_selected.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_6838665c6b2e98_55655923',
=======
  'unifunc' => 'content_683056d1393de4_63673271',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '437127f680f59aa5747b7b1a8d56d503bd17f956' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\products\\components\\context_menu\\edit_selected.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996701,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6838665c6b2e98_55655923 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683056d1393de4_63673271 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--edit-products hidden-phone">
    <span class="bulk-edit__btn-content bulk-edit__btn-content--no-padding">
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-process-items bulk-edit__link",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>$_smarty_tpl->tpl_vars['params']->value['form']), true);?>

    </span>
</li>
<?php }
}
