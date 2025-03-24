<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:49:06
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\blog\hooks\pages\detailed_description_textarea.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd604207ee69_35781926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13c18a47b7368b7b8f801915438c7424231e0971' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description_textarea.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dd604207ee69_35781926 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }
}
}
