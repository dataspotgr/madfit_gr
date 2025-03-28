<?php
/* Smarty version 4.3.0, created on 2025-03-26 15:59:24
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\components\preset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e4083c7ae3f0_89315818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0424cd983a094266a159f1b741c53f28bda34566' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\preset.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/tooltip.tpl' => 2,
    'tygh:addons/advanced_import/views/import_presets/components/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_67e4083c7ae3f0_89315818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','advanced_import.last_launch','advanced_import.never','advanced_import.last_status','advanced_import.last_status.','text_exim_data_imported','advanced_import.file','remove_this_item','error_file_not_found','choose','advanced_import.uploading_file','select_file','upload','advanced_import.has_modifiers','yes','no','import','clone','edit','advanced_import.file_will_be_deleted_are_you_sure_to_proceed','delete','advanced_import.export_example'));
?>
<tr class="import-preset cm-longtap-target" id="preset_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-longtap-action="setCheckBox"
    data-ca-longtap-target="input.cm-item"
    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
"
>
    <td class="left import-preset__checker mobile-hide">
        <input type="checkbox"
               name="preset_ids[]"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
"
               class="cm-item hide"
        />
    </td>

    <td class="import-preset__preset" data-th="<?php echo $_smarty_tpl->__("name");?>
">
        <a href="<?php echo htmlspecialchars((string) fn_url("import_presets.update?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['preset'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['company_id']->value != $_smarty_tpl->tpl_vars['preset']->value['company_id']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['preset']->value), 0, false);
?>
        <?php }?>
    </td>

    <td class="import-preset__last-launch" data-th="<?php echo $_smarty_tpl->__("advanced_import.last_launch");?>
">
        <?php if ($_smarty_tpl->tpl_vars['preset']->value['last_launch']) {?>
            <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['preset']->value['last_launch'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("advanced_import.never");?>

        <?php }?>
    </td>

    <td class="import-preset__last-status" data-th="<?php echo $_smarty_tpl->__("advanced_import.last_status");?>
">
        <?php if (!$_smarty_tpl->tpl_vars['preset']->value['last_status']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['preset']) ? $_smarty_tpl->tpl_vars['preset']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['last_status'] = 'X';
$_smarty_tpl->_assignInScope('preset', $_tmp_array);?>
        <?php }?>
        <span class="status--<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['preset']->value['last_status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("advanced_import.last_status.".((string)$_smarty_tpl->tpl_vars['preset']->value['last_status']));?>

            <?php if ($_smarty_tpl->tpl_vars['preset']->value['last_status'] == smarty_modifier_enum("Addons\\AdvancedImport\\ImportStatuses::SUCCESS")) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->__("text_exim_data_imported",array("[new]"=>$_smarty_tpl->tpl_vars['preset']->value['last_result']['N'],"[exist]"=>$_smarty_tpl->tpl_vars['preset']->value['last_result']['E'],"[skipped]"=>$_smarty_tpl->tpl_vars['preset']->value['last_result']['S'],"[total]"=>$_smarty_tpl->tpl_vars['preset']->value['last_result']['N']+$_smarty_tpl->tpl_vars['preset']->value['last_result']['E']+$_smarty_tpl->tpl_vars['preset']->value['last_result']['S']))), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['preset']->value['last_status'] == smarty_modifier_enum("Addons\\AdvancedImport\\ImportStatuses::FAIL") && is_array($_smarty_tpl->tpl_vars['preset']->value['last_result']['msg'])) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>implode("<br>",$_smarty_tpl->tpl_vars['preset']->value['last_result']['msg'])), 0, true);
?>
            <?php }?>
        </span>
    </td>

    <td class="import-preset__file" data-th="<?php echo $_smarty_tpl->__("advanced_import.file");?>
">
        <?php if ($_smarty_tpl->tpl_vars['preset']->value['file']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"remove_sign",'class'=>"cm-adv-import-filename-delete hand flex-inline top",'id'=>"clean_selection",'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"$".".ceAdvancedImport('removeFile', ".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id']).");")),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['preset']->value['file_type'] == smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::URL")) {?>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['file'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['file'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['preset']->value['file_type'] == smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::SERVER")) {?>
            <?php if ($_smarty_tpl->tpl_vars['preset']->value['file_path']) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['file'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <span class="type-error"><?php echo $_smarty_tpl->__("error_file_not_found",array("[file]"=>$_smarty_tpl->tpl_vars['preset']->value['file']));?>
</span>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['preset']->value['file_type'] === smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::LOCAL")) {?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['file'], ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'text'=>$_smarty_tpl->__("choose"),'class'=>"btn cm-dialog-auto-size",'target_id'=>"import_preset_file_upload_".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])), true);?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popups", null, null);?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popups');?>


                <div class="hidden" title="<?php echo $_smarty_tpl->__("advanced_import.uploading_file",array("[preset]"=>$_smarty_tpl->tpl_vars['preset']->value['preset']));?>
" id="import_preset_file_upload_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
                          method="post"
                          enctype="multipart/form-data">

                        <input type="hidden" name="preset_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
">
                        <div class="form-horizontal form-edit import-preset__fileuploader-form">

                            <div class="control-group">
                                <label class="control-label"><?php echo $_smarty_tpl->__("select_file");?>
:</label>
                                <div class="controls">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"upload[".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])."]",'id_var_name'=>"upload_".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id']),'prefix'=>$_smarty_tpl->tpl_vars['preset']->value['preset_id'],'allowed_ext'=>$_smarty_tpl->tpl_vars['allowed_ext']->value,'local_file_ignore'=>true), 0, false);
?>
                                </div>
                            </div>
                            <div class="buttons-container">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cancel_action'=>"close",'but_text'=>$_smarty_tpl->__("upload"),'but_meta'=>"cm-ajax cm-comet cm-post",'but_name'=>"dispatch[import_presets.upload]"), 0, false);
?>
                            </div>
                        </div>
                    </form>
                    <!--import_preset_file_upload_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>
    </td>

    <td class="import-preset__has-modifiers" data-th="<?php echo $_smarty_tpl->__("advanced_import.has_modifiers");?>
">
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['preset']->value['has_modifiers'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)) {?>
            <?php echo $_smarty_tpl->__("yes");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("no");?>

        <?php }?>
    </td>

    <td class="import-preset__run">
        <?php if ($_smarty_tpl->tpl_vars['preset']->value['file_type'] == smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::SERVER") && $_smarty_tpl->tpl_vars['preset']->value['file_path'] || $_smarty_tpl->tpl_vars['preset']->value['file_type'] == smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::URL") || ($_smarty_tpl->tpl_vars['preset']->value['file_type'] === smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::LOCAL"))) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url("advanced_import.import?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])), ENT_QUOTES, 'UTF-8');?>
"
               class="btn btn-primary cm-ajax cm-comet cm-post"
            ><?php echo $_smarty_tpl->__("import");?>
</a>
        <?php }?>
    </td>

    <td class="import-preset__tools">
        <div class="hidden-tools">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"advanced_import:preset_list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"advanced_import:preset_list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("clone"),'method'=>"POST",'href'=>"advanced_import.clone?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])), true);?>
</li>
                    <?php if (!$_smarty_tpl->tpl_vars['company_id']->value || $_smarty_tpl->tpl_vars['preset']->value['company_id'] == $_smarty_tpl->tpl_vars['company_id']->value) {?>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"import_presets.update?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])), true);?>
</li>
                        <li>
                            <?php ob_start();
echo $_smarty_tpl->__("advanced_import.file_will_be_deleted_are_you_sure_to_proceed");
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"import_presets.delete?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id']),'method'=>"POST",'data'=>array("data-ca-confirm-text"=>$_prefixVariable3)), true);?>

                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['preset']->value['file_extension'] === "csv") {?>
                        <li>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("advanced_import.export_example"),'method'=>"POST",'href'=>"advanced_import.export_example?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])), true);?>

                        </li>
                    <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"advanced_import:preset_list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        </div>
    </td>
<!--preset_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
--></tr>
<?php }
}
