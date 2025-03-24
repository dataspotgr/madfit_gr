<?php
/* Smarty version 4.3.0, created on 2025-03-20 02:22:33
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\attachments\views\components\add_new_attachments_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbde590d85c2_73127679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01f803589bb7b4d565fb24d6c9c02f37db7a5598' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\attachments\\views\\components\\add_new_attachments_files.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/attachments/views/attachments/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_67dbde590d85c2_73127679 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('new_attachment','add_attachment'));
?>
<div class="btn-toolbar clearfix">
    <div class="pull-right">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/attachments/views/attachments/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attachment'=>array(),'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_attachments_files",'text'=>$_smarty_tpl->__("new_attachment"),'link_text'=>$_smarty_tpl->__("add_attachment"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"general",'icon'=>"icon-plus"), 0, false);
?>
    </div>
</div>
<?php }
}
