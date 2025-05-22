<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:23:59
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\pickers\profile_fields\js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ec2faa4f96_46083720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11a6bf5a08126668b9070aebbdc1bc77a8859074' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\pickers\\profile_fields\\js.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6811ec2faa4f96_46083720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('id','description','required','required_profile_field_description','edit','remove'));
?>
<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['sortable']->value) {?> profile-field-picker__sortable-row<?php }
if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <td width="1%" data-th="&nbsp;">
        <?php if ($_smarty_tpl->tpl_vars['sortable']->value) {?>
            <input type="hidden" name="field_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <span class="handler"></span>
        <?php }?>
    </td>
    <td data-th="<?php echo $_smarty_tpl->__("id");?>
">
        <a href="<?php echo htmlspecialchars((string) fn_url("profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field_id']->value)), ENT_QUOTES, 'UTF-8');?>
">&nbsp;<span>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;</a></td>
    <td data-th="<?php echo $_smarty_tpl->__("description");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8');?>
</td>
    <td <?php if ($_smarty_tpl->tpl_vars['adjust_requireability']->value === false) {?>class="hidden"<?php }?> data-th="<?php echo $_smarty_tpl->__("required");?>
">
        <input type="hidden"
            name="block_data[content][items][required][field_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
            value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['clone']->value || smarty_modifier_in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['disable_required']->value)) {?>
                disabled
            <?php }?>
        >
        <input type="checkbox"
            name="block_data[content][items][required][field_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
            value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['required']->value === smarty_modifier_enum("YesNo::YES")) {?>
                checked
            <?php }?>
            <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['disable_required']->value)) {?>
                disabled
                <?php if ($_smarty_tpl->tpl_vars['disable_description']->value[$_smarty_tpl->tpl_vars['field_name']->value]) {?>
                    title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['disable_description']->value[$_smarty_tpl->tpl_vars['field_name']->value], ENT_QUOTES, 'UTF-8');?>
"
                <?php } else { ?>
                    title="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("required_profile_field_description",array("[field_name]"=>$_smarty_tpl->tpl_vars['description']->value)), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            <?php }?>
        >
    </td>
    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
    <td class="nowrap" data-th="&nbsp;">
        <div class="hidden-tools">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field_id']->value)), true);?>
</li>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['field_id']->value)."', 'pf_'); return false;"), true);?>
</li>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        </div>
    </td>
    <?php }?>
</tr>
<?php }
}
