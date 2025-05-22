<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:03:14
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\hidpi\hooks\fileuploader\uploader.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6bf2e79549_18608559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e58b4b9df131bd8d8f91cc1fc9812f9a830a0e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\hidpi\\hooks\\fileuploader\\uploader.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6bf2e79549_18608559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('hidpi.upload_high_res_image','hidpi.upload_high_res_image.tooltip'));
if ($_smarty_tpl->tpl_vars['is_image']->value && (($tmp = $_smarty_tpl->tpl_vars['show_hidpi_checkbox']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
    <input type="hidden" name="is_high_res_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (defined('HIDPI_IS_HIGH_RES_FALSE') ? constant('HIDPI_IS_HIGH_RES_FALSE') : null), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_hidden" class="cm-image-field" />
    <label for="is_high_res_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidpi-mark checkbox">
        <input type="checkbox" name="is_high_res_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (defined('HIDPI_IS_HIGH_RES_TRUE') ? constant('HIDPI_IS_HIGH_RES_TRUE') : null), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['addons']->value['hidpi']['default_upload_high_res_image'] === "Y") {?>checked="checked"<?php }?> class="cm-image-field" />
        <span class="top"><?php echo $_smarty_tpl->__("hidpi.upload_high_res_image");?>
</span> <span class="flex-inline"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign cm-tooltip",'title'=>$_smarty_tpl->__("hidpi.upload_high_res_image.tooltip"),'icon_text'=>''),$_smarty_tpl);?>
</span>
    </label>
<?php }
}
}
