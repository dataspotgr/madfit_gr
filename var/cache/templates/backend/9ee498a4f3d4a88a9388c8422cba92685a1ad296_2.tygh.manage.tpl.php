<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:40:50
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\email_templates\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68305ec2df15a0_29186303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ee498a4f3d4a88a9388c8422cba92685a1ad296' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\email_templates\\manage.tpl',
      1 => 1747996680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/object_group.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_68305ec2df15a0_29186303 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','import','import','export','import','email_templates'));
$_smarty_tpl->_assignInScope('return_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('can_update', fn_check_permissions('snippets','update','admin','POST'));
$_smarty_tpl->_assignInScope('edit_link_text', $_smarty_tpl->__("edit"));?>

<?php if (!$_smarty_tpl->tpl_vars['can_update']->value) {?>
    <?php $_smarty_tpl->_assignInScope('edit_link_text', $_smarty_tpl->__("view"));
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'group_id');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_id']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>

<div id="content_email_templates_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['group_id']->value != "C") {?>class="hidden"<?php }?>>
<div class="items-container">
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-objects table-responsive table-responsive-w-titles">
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value, 'email_template');
$_smarty_tpl->tpl_vars['email_template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email_template']->value) {
$_smarty_tpl->tpl_vars['email_template']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_prefix'=>$_smarty_tpl->tpl_vars['group_id']->value,'id'=>$_smarty_tpl->tpl_vars['email_template']->value->getId(),'text'=>$_smarty_tpl->tpl_vars['email_template']->value->getName(),'status'=>$_smarty_tpl->tpl_vars['email_template']->value->getStatus(),'href'=>"email_templates.update?template_id=".((string)$_smarty_tpl->tpl_vars['email_template']->value->getId()),'object_id_name'=>"template_id",'table'=>"template_emails",'href_delete'=>'','delete_target_id'=>'','skip_delete'=>true,'header_text'=>$_smarty_tpl->tpl_vars['email_template']->value->getName(),'no_popup'=>true,'no_table'=>true,'draggable'=>false,'link_text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'nostatus'=>!$_smarty_tpl->tpl_vars['can_update']->value), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>
<!--content_email_templates_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox')), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "import_form", null, null);?>
    <div class="install-addon">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="import_email_templates" enctype="multipart/form-data">
            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151" height="141" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"filename[]",'allowed_ext'=>"xml"), 0, false);
?>
            </div>
            <div class="buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("import"),'but_name'=>"dispatch[email_templates.import]",'cancel_action'=>"close"), 0, false);
?>
            </div>
        </form>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("import"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'import_form'),'id'=>"import_email_templates_form"), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'href'=>"email_templates.export",'text'=>$_smarty_tpl->__("export"),'method'=>"POST"), true);?>
</li>

        <?php if (fn_check_permissions("email_templates","import","admin","POST")) {?>
            <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"import_email_templates_form",'link_text'=>$_smarty_tpl->__("import"),'act'=>"link",'link_class'=>"cm-dialog-auto-size",'content'=>'','general_class'=>"action-btn"), 0, true);
?></li>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items'),'class'=>"cm-tab-tools tab-tools hidden",'id'=>"tools_email_templates_C"), true);?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items'),'class'=>"cm-tab-tools tab-tools hidden",'id'=>"tools_email_templates_A"), true);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("email_templates"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}
