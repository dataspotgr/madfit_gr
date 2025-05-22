<?php
/* Smarty version 4.3.0, created on 2025-05-22 10:25:57
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\blog\hooks\pages\detailed_description_label.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682ed185793876_34807151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f60a7c33e186800770a42861c2ea0a4523b76c07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description_label.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682ed185793876_34807151 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('post_description'));
if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");?>
:</label>
<?php }
}
}
