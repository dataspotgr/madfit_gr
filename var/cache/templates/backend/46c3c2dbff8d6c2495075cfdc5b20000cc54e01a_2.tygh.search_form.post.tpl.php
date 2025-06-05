<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:51:26
=======
/* Smarty version 4.3.0, created on 2025-05-23 14:06:59
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\tags\hooks\products\search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_6838665e3b5121_70510372',
=======
  'unifunc' => 'content_683056d3befe10_30741372',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c3c2dbff8d6c2495075cfdc5b20000cc54e01a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\tags\\hooks\\products\\search_form.post.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996617,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6838665e3b5121_70510372 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683056d3befe10_30741372 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div>
<?php }
}
}
