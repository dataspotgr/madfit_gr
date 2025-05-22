<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:04:27
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6c3b4f6571_33336991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '176672fd85b432ff59abbcde0b1a83e905973e4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\update.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/advanced_import/views/import_presets/components/fileuploader.tpl' => 1,
    'tygh:addons/advanced_import/views/import_presets/components/archiveuploader.tpl' => 1,
    'tygh:views/companies/components/company_field.tpl' => 2,
    'tygh:common/subheader.tpl' => 3,
    'tygh:views/exim/components/csv_delimiters.tpl' => 1,
    'tygh:addons/advanced_import/views/import_presets/components/options.tpl' => 3,
    'tygh:buttons/button.tpl' => 5,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_680b6c3b4f6571_33336991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.to_json.php','function'=>'smarty_modifier_to_json',),));
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.run_import_via_cron_message','file','upload_file','advanced_import.link_to_file','advanced_import.archive_with_images','name','advanced_import.additional_settings','csv_delimiter','images_directory','file_editor','advanced_import.text_popup_file_editor_notice_with_image_size_info','import','import','advanced_import.save_selected_file','clone','save','advanced_import.step_map_fields','advanced_import.general_settings','advanced_import.additional_settings','advanced_import.new_preset'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

        <?php $_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['preset']->value['preset_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('disable_picker', (($tmp = $_smarty_tpl->tpl_vars['disable_picker']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

        <input type="hidden" name="step_map_fields" id="step_map_fields" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['step_map_fields']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>

        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              name="import_preset_update_form"
              id="import_preset_update_form"
              enctype="multipart/form-data"
              class="form-horizontal form-edit<?php if ($_smarty_tpl->tpl_vars['start_import']->value) {?> cm-ajax cm-comet<?php }?> import-preset-edit"
              data-ca-advanced-import-element="editor"
              data-ca-advanced-import-preset-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
              data-ca-advanced-import-preset-object-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"
              data-ca-advanced-import-preset-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['preset'], ENT_QUOTES, 'UTF-8');?>
"
        >

            <input type="hidden" name="preset_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="result_ids" value="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="object_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"/>
            <?php if ($_smarty_tpl->tpl_vars['start_import']->value) {?>
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) "import_presets.update&preset_id=".((string)$_smarty_tpl->tpl_vars['id']->value), ENT_QUOTES, 'UTF-8');?>
"/>
            <?php }?>

            <div id="content_general">

                                <?php if (!empty($_smarty_tpl->tpl_vars['id']->value) && (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'])) {?>
                    <p><?php echo $_smarty_tpl->__("advanced_import.run_import_via_cron_message");?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['preset']->value['company_id']) {?>
                        <pre><code><?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['company_id'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo htmlspecialchars((string) fn_get_console_command("php /path/to/cart/",$_smarty_tpl->tpl_vars['config']->value['admin_index'],array("dispatch"=>"advanced_import.import.import","preset_id"=>$_prefixVariable1,"switch_company_id"=>$_prefixVariable2,"p")), ENT_QUOTES, 'UTF-8');?>
</code></pre>
                    <?php } else { ?>
                        <pre><code><?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
echo htmlspecialchars((string) fn_get_console_command("php /path/to/cart/",$_smarty_tpl->tpl_vars['config']->value['admin_index'],array("dispatch"=>"advanced_import.import.import","preset_id"=>$_prefixVariable3,"p")), ENT_QUOTES, 'UTF-8');?>
</code></pre>
                    <?php }?>
                <?php }?>

                <div id="information" class="in collapse">

                    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['preset']->value['file']) {?>cm-skip-validation<?php }?>">
                        <input type="hidden"
                               data-ca-advanced-import-element="file_type"
                               name="file_type"
                               value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['preset']->value['file_type'] ?? null)===null||$tmp==='' ? (smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::LOCAL")) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                        />
                        <input type="hidden"
                               name="file"
                               data-ca-advanced-import-element="file"
                               value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['preset']->value['file'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                        />

                        <?php $_smarty_tpl->_assignInScope('var_name', "upload[".((string)$_smarty_tpl->tpl_vars['id']->value)."]");?>
                        <?php $_smarty_tpl->_assignInScope('id_var_name', "upload_".((string)$_smarty_tpl->tpl_vars['id']->value));?>

                        <label for="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("file");?>
:</label>
                        <div class="controls import-preset__fileuploader">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>$_smarty_tpl->tpl_vars['var_name']->value,'id_var_name'=>$_smarty_tpl->tpl_vars['id_var_name']->value,'allowed_ext'=>(($tmp = $_smarty_tpl->tpl_vars['allowed_ext']->value ?? null)===null||$tmp==='' ? array("csv","xml") ?? null : $tmp),'hide_server'=>true,'upload_file_text'=>$_smarty_tpl->__("upload_file"),'upload_url_file_text'=>$_smarty_tpl->__("advanced_import.link_to_file")), 0, false);
?>
                        </div>
                    </div>

                    <div class="control-group">
                        <input type="hidden" id="archive_path" name="archive_path" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['archive_path']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <label class="control-label"><?php echo $_smarty_tpl->__("advanced_import.archive_with_images");?>
:</label>
                        <div class="controls">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/archiveuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('archives'=>$_smarty_tpl->tpl_vars['archive_images']->value), 0, false);
?>
                        </div>
                    </div>

                    <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['control_group_meta'], ENT_QUOTES, 'UTF-8');?>
" data-ca-default-hidden="<?php if ($_smarty_tpl->tpl_vars['preset']->value['file']) {?>false<?php } else { ?>true<?php }?>">
                        <label for="target_node" class="control-label">
                            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['title']);?>

                        </label>
                        <div class="controls">
                            <input class="input-large"
                                   type="text"
                                   name="options[target_node]"
                                   id="target_node"
                                   size="55"
                                   value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['selected_value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['default_value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                            />
                            <?php if ($_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['description']) {?>
                                <p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['description']);?>
</p>
                            <?php }?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="elm_preset" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                        <div class="controls">
                            <input class="input-large"
                                   type="text"
                                   name="preset"
                                   id="elm_preset"
                                   size="55"
                                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['preset'], ENT_QUOTES, 'UTF-8');?>
"
                            />
                        </div>
                    </div>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"import_presets:options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"import_presets:options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"import_presets:options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php if ($_smarty_tpl->tpl_vars['is_mve']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"company_id",'id'=>"elm_company_id",'selected'=>$_smarty_tpl->tpl_vars['preset']->value['company_id'],'disable_company_picker'=>$_smarty_tpl->tpl_vars['disable_picker']->value,'js_action'=>"$".".ceAdvancedImport('changeCompanyId');",'required'=>false,'zero_company_id_name_lang_var'=>"advanced_import.common_preset"), 0, false);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"company_id",'id'=>"elm_company_id",'selected'=>$_smarty_tpl->tpl_vars['preset']->value['company_id'],'js_action'=>"$".".ceAdvancedImport('changeCompanyId');",'required'=>true,'zero_company_id_name_lang_var'=>"none"), 0, true);
?>
                    <?php }?>
                </div>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("advanced_import.additional_settings"),'target'=>"#import_file",'meta'=>"collapsed"), 0, false);
?>

                <div id="import_file" class="<?php if ($_smarty_tpl->tpl_vars['view_only']->value) {?>cm-hide-inputs<?php }?> out collapse">

                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("csv_delimiter");?>
:</label>
                        <div class="controls" data-ca-advanced-import-element="delimiter_container">
                            <?php $_smarty_tpl->_assignInScope('auto_delimiter', smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO"));?>
                            <?php ob_start();
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['preset']->value['options']['delimiter'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['auto_delimiter']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/exim/components/csv_delimiters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"options[delimiter]",'value'=>$_prefixVariable4,'allow_auto_detect'=>true), 0, false);
?>
                        </div>
                    </div>

                    <div class="control-group cm-no-hide-input">
                        <?php $_smarty_tpl->_assignInScope('images_path', $_smarty_tpl->tpl_vars['preset']->value['options']['images_path']);?>
                        <label for="images_path" class="control-label"><?php echo $_smarty_tpl->__("images_directory");?>
:</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on" id="advanced_import_images_path_prefix" data-companies-image-directories="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['images_path']->value['companies_image_directories']), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_path']->value['input_prefix'], ENT_QUOTES, 'UTF-8');?>

                                </span>

                                <input id="images_path"
                                       class="input-large prefixed"
                                       type="text"
                                       name="options[images_path]"
                                       value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_path']->value['display_value'], ENT_QUOTES, 'UTF-8');?>
"
                                />
                            </div>

                            <div id="images_path_dialog" class="hidden"></div>
                            <p class="muted description">
                                <?php ob_start();
echo $_smarty_tpl->__("file_editor");
$_prefixVariable5 = ob_get_clean();
echo $_smarty_tpl->__("advanced_import.text_popup_file_editor_notice_with_image_size_info",array("[target]"=>"images_path","[link_text]"=>$_prefixVariable5,"[file_size]"=>fn_get_allowed_image_file_size(true,true)));?>

                            </p>
                            <p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['images_path']->value['description']);?>
</p>
                        </div>
                    </div>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>(($tmp = $_smarty_tpl->tpl_vars['preset']->value['options'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'field_name_prefix'=>"options",'display'=>true,'tab'=>"general"), 0, false);
?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"advanced_import:update_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"advanced_import:update_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"advanced_import:update_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


                        <?php if ($_smarty_tpl->tpl_vars['start_import']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("import"),'but_role'=>"action",'but_id'=>"advanced_import_start_import",'but_meta'=>"cm-submit hidden cm-advanced-import-start-import",'but_target_form'=>"import_preset_update_form",'but_name'=>"dispatch[advanced_import.import]"), 0, false);
?>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->__("import");
$_prefixVariable6=ob_get_clean();
ob_start();
if (!$_smarty_tpl->tpl_vars['id']->value || !$_smarty_tpl->tpl_vars['preset']->value['file']) {
echo " hidden";
}
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_prefixVariable6,'but_role'=>"action",'but_id'=>"advanced_import_save_and_import",'but_name'=>"dispatch[import_presets.update.import]",'but_target_form'=>"import_preset_update_form",'but_meta'=>"cm-submit btn-primary".$_prefixVariable7), 0, true);
?>
                        <?php if ($_smarty_tpl->tpl_vars['view_only']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("advanced_import.save_selected_file"),'but_role'=>"action",'but_id'=>"advanced_import_upload",'but_meta'=>"btn-primary cm-submit cm-ajax cm-post hidden",'but_target_form'=>"import_preset_update_form",'but_name'=>"dispatch[import_presets.upload.detailed]"), 0, true);
?>
                            <?php ob_start();
echo $_smarty_tpl->__("clone");
$_prefixVariable8=ob_get_clean();
ob_start();
if (!$_smarty_tpl->tpl_vars['id']->value) {
echo " btn-primary";
}
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_prefixVariable8,'but_role'=>"action",'but_name'=>"dispatch[advanced_import.clone]",'but_target_form'=>"import_preset_update_form",'but_meta'=>"cm-submit".$_prefixVariable9), 0, true);
?>
                        <?php } else { ?>
                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->__("save");
} else {
echo $_smarty_tpl->__("advanced_import.step_map_fields");
}
$_prefixVariable10=ob_get_clean();
ob_start();
if (!$_smarty_tpl->tpl_vars['id']->value) {
echo " btn-primary";
}
$_prefixVariable11=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_prefixVariable10,'but_role'=>"action",'but_name'=>"dispatch[import_presets.update]",'but_target_form'=>"import_preset_update_form",'but_meta'=>"cm-submit".$_prefixVariable11), 0, true);
?>
                        <?php }?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                </div>

            <!--content_general--></div>

            <div class="hidden" id="content_fields">
            <!--content_fields--></div>

            <div class="hidden <?php if ($_smarty_tpl->tpl_vars['view_only']->value) {?>cm-hide-inputs<?php }?>" id="content_options">

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("advanced_import.general_settings"),'target'=>"#settings_general"), 0, true);
?>

                <div id="settings_general" class="out">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>(($tmp = $_smarty_tpl->tpl_vars['preset']->value['options'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'field_name_prefix'=>"options",'display'=>true,'tab'=>"settings",'section'=>"general"), 0, true);
?>
                </div>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("advanced_import.additional_settings"),'target'=>"#settings_additional",'meta'=>"collapsed"), 0, true);
?>

                <div id="settings_additional" class="out collapse">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>(($tmp = $_smarty_tpl->tpl_vars['preset']->value['options'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'field_name_prefix'=>"options",'display'=>true,'tab'=>"settings",'section'=>"additional"), 0, true);
?>
                </div>
            <!--content_options--></div>

        </form>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>"general"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['preset']->value['preset_id'] ? $_smarty_tpl->tpl_vars['preset']->value['preset'] : $_smarty_tpl->__("advanced_import.new_preset"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
