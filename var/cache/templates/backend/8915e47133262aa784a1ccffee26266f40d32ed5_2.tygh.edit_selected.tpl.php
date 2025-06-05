<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-30 11:53:28
=======
/* Smarty version 4.3.0, created on 2025-05-27 14:48:07
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\categories\components\context_menu\edit_selected.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_68397208236417_24619329',
=======
  'unifunc' => 'content_6835a6777cdcc7_46400409',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8915e47133262aa784a1ccffee26266f40d32ed5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\categories\\components\\context_menu\\edit_selected.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996675,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_68397208236417_24619329 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6835a6777cdcc7_46400409 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content bulk-edit__btn-content--no-padding">
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-process-items bulk-edit__link",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form",'data'=>array("data-ca-bulkedit-disable-save-button"=>true)), true);?>

    </span>
</li>
<?php }
}
