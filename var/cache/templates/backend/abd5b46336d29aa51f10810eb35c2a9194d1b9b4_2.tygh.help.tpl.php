<?php
/* Smarty version 4.3.0, created on 2025-03-21 07:29:53
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd77e1289636_92880193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abd5b46336d29aa51f10810eb35c2a9194d1b9b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\help.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_67dd77e1289636_92880193 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('note'));
if ($_smarty_tpl->tpl_vars['content']->value) {?>
<div class="pull-right note-subheader">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "notes_picker", null, null);?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('act'=>"notes",'id'=>"content_".((string)$_smarty_tpl->tpl_vars['id']->value)."_notes",'text'=>$_smarty_tpl->__("note"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'notes_picker')), 0, false);
?>
</div>
<?php }
}
}
