<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:01:21
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\products\components\context_menu\edit_selected.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea4bd10f5d38_37046097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '437127f680f59aa5747b7b1a8d56d503bd17f956' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\products\\components\\context_menu\\edit_selected.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ea4bd10f5d38_37046097 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--edit-products hidden-phone">
    <span class="bulk-edit__btn-content bulk-edit__btn-content--no-padding">
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-process-items bulk-edit__link",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>$_smarty_tpl->tpl_vars['params']->value['form']), true);?>

    </span>
</li>
<?php }
}
