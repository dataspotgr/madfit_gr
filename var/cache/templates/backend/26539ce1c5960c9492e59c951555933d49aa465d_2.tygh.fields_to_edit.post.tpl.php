<?php
/* Smarty version 4.3.0, created on 2025-03-31 10:58:59
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\categories\fields_to_edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea4b4383f6b3_02885281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26539ce1c5960c9492e59c951555933d49aa465d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\fields_to_edit.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ea4b4383f6b3_02885281 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }
}
