<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-30 11:53:29
=======
/* Smarty version 4.3.0, created on 2025-05-27 14:48:09
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\seo\hooks\categories\fields_to_edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683972092135b4_31171389',
=======
  'unifunc' => 'content_6835a6794c54b7_86584047',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de2cf0cf861097347b51d007d8a38fbec6829274' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\seo\\hooks\\categories\\fields_to_edit.post.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996611,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_683972092135b4_31171389 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6835a6794c54b7_86584047 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('seo_name'));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <label class="checkbox" for="seo_name">
    	<input type="checkbox" value="seo_name" id="seo_name" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
    <?php echo $_smarty_tpl->__("seo_name");?>
</label>
<?php }
}
}
