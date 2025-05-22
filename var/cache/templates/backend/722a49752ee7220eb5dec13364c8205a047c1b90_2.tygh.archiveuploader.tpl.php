<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:04:28
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\components\archiveuploader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6c3c40f7b5_55616277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '722a49752ee7220eb5dec13364c8205a047c1b90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\archiveuploader.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6c3c40f7b5_55616277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),4=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('file_is_too_large','files_are_too_large','remove_this_item','remove_this_item','upload_another_file','upload_file','advanced_import.link_to_file','advanced_import.text_allowed_to_upload_file_extension_with_image_size_info'));
$_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"));
$_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"));?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        post_max_size_bytes: '<?php echo htmlspecialchars((string) fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
        files_upload_max_size_bytes: '<?php echo htmlspecialchars((string) fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',

        post_max_size_mbytes: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
        files_upload_max_size_mbytes: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
',
        allowed_file_path: '<?php echo htmlspecialchars((string) fn_get_http_files_dir_path(), ENT_QUOTES, 'UTF-8');?>
'
    });

    _.tr({
        file_is_too_large: '<?php echo strtr((string)$_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        files_are_too_large: '<?php echo strtr((string)$_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('label_id', "archive");
$_smarty_tpl->_assignInScope('prefix', "archives_");
$_smarty_tpl->_assignInScope('var_name', "archive_images[]");
ob_start();
echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable12=ob_get_clean();
$_smarty_tpl->_assignInScope('id_var_name', ((string)$_smarty_tpl->tpl_vars['prefix']->value).$_prefixVariable12);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['archives']->value, 'archive', false, 'archive_id');
$_smarty_tpl->tpl_vars['archive']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['archive_id']->value => $_smarty_tpl->tpl_vars['archive']->value) {
$_smarty_tpl->tpl_vars['archive']->do_else = false;
?>
    <input type="hidden"
           id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['archive']->value['file'], ENT_QUOTES, 'UTF-8');?>
_type"
           name="uploaded_archives_type[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['archive_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
           data-ca-advanced-import-element="temp_archive_type"
           value="local"
    />
    <input type="hidden"
           id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['archive']->value['file'], ENT_QUOTES, 'UTF-8');?>
_file"
           name="uploaded_archives[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['archive_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
           data-ca-advanced-import-element="temp_archive_images"
           value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['archive']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
    />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div class="fileuploader cm-fileuploader cm-field-container" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>hidden disabled<?php }?>>
    <input type="hidden" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['archives']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');
}?>" />

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['archives']->value, 'archive', false, 'archive_id');
$_smarty_tpl->tpl_vars['archive']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['archive_id']->value => $_smarty_tpl->tpl_vars['archive']->value) {
$_smarty_tpl->tpl_vars['archive']->do_else = false;
?>
        <div class="upload-file-section cm-uploaded-image" id="message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['archive']->value['file'], ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file">
                <?php $_smarty_tpl->_assignInScope('download_link', "import_presets.get_archive?preset_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&file=".((string)$_smarty_tpl->tpl_vars['archive']->value['name'])."&file_type=".((string)$_smarty_tpl->tpl_vars['archive']->value['type']));?>

                <?php if (!($_smarty_tpl->tpl_vars['po']->value['required'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_count($_smarty_tpl->tpl_vars['archives']->value) == 1)) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"remove_sign",'class'=>"cm-tooltip hand flex-inline top",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."_".((string)$_smarty_tpl->tpl_vars['archive']->value['file']),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');"),'icon_text'=>''),$_smarty_tpl);?>
&nbsp;<?php }?><span class="upload-filename"><?php if ($_smarty_tpl->tpl_vars['download_link']->value) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['download_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['archive']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['download_link']->value) {?></a><?php }?></span>
            </p>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div id="file_uploader_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="upload-file-section" id="message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file hidden">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"remove_sign",'class'=>"cm-tooltip hand flex-inline top",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');"),'icon_text'=>''),$_smarty_tpl);?>
&nbsp;<span class="upload-filename"></span>
            </p>
        </div>

        <input type="hidden" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>" id="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field"/><input type="hidden" name="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>" id="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field"/><div class="btn-group" id="link_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="upload-file-local"><a class="btn"><span data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['archives']->value) {?>class="hidden"<?php }?>><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_another_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><span data-ca-multi="N" <?php if ($_smarty_tpl->tpl_vars['archives']->value) {?>class="hidden"<?php }?>><?php echo $_smarty_tpl->__("upload_file");?>
</span></a><div class="image-selector"><label for=""><input type="file" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); Tygh.fileuploader.check_image(this.id); Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="file" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"></label></div></div><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("advanced_import.link_to_file");?>
</a></div>
    </div>

    <p class="mute micro-note">
        <?php echo $_smarty_tpl->__("advanced_import.text_allowed_to_upload_file_extension_with_image_size_info",array("[ext]"=>'zip, tgz, gz',"[file_size]"=>fn_get_allowed_image_file_size(true,true)));?>

    </p>
</div>
<?php }
}
