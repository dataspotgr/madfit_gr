<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:04:27
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\components\fileuploader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6c3be54980_13924823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd139005166f113dd3b68c30502a6375142b2ec44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\fileuploader.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6c3be54980_13924823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('file_is_too_large','files_are_too_large','remove_this_item','text_select_file','local','server','url','text_allowed_to_upload_file_extension'));
$_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"));
$_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"));?>

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


<div class="fileuploader cm-field-container">
    <input type="hidden" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="" />

    <div id="file_uploader_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="upload-file-section" id="message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file hidden">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"remove_sign",'class'=>"cm-tooltip hand flex-inline top",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');")),$_smarty_tpl);?>
&nbsp;<span class="upload-filename"></span>
            </p>
            <p class="cm-fu-no-file">
                <?php if ($_smarty_tpl->tpl_vars['preset']->value['file']) {?>
                        <a href="<?php echo htmlspecialchars((string) fn_url("import_presets.get_file?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])."&company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['file'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("text_select_file");?>

                <?php }?>
            </p>
        </div>

        <input type="hidden" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" /><input type="hidden" name="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" /><div class="btn-group" id="link_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="upload-file-local"><a class="btn"><span data-ca-multi="N"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("local") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span></a><div class="image-selector"><label for="">
                            <input type="file"
                                   name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   id="local_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   onchange="Tygh.fileuploader.show_loader(this.id);Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');"
                                   class="file"
                                   data-ca-empty-file=""
                                   onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"
                                   accept=".<?php echo htmlspecialchars((string) implode(",.",$_smarty_tpl->tpl_vars['allowed_ext']->value), ENT_QUOTES, 'UTF-8');?>
"
                            />
                            </label></div></div><?php if (!$_smarty_tpl->tpl_vars['hide_server']->value) {?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="server_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("server");?>
</a><?php }?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_url_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("url") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?></div><?php if ($_smarty_tpl->tpl_vars['allowed_ext']->value) {?><p class="mute micro-note"><?php echo $_smarty_tpl->__("text_allowed_to_upload_file_extension",array("[ext]"=>implode(", ",$_smarty_tpl->tpl_vars['allowed_ext']->value)));?>
</p><?php }?>
    </div>

</div><!--fileuploader-->
<?php }
}
