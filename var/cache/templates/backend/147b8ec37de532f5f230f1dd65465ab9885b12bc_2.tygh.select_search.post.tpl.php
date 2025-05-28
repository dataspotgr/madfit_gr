<?php
/* Smarty version 4.3.0, created on 2025-05-26 11:20:37
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\bestsellers\hooks\products\select_search.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834245529ea14_49037351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '147b8ec37de532f5f230f1dd65465ab9885b12bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\select_search.post.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834245529ea14_49037351 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('bestsellers'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "bestsellers") {?>selected="selected"<?php }?> value="bestsellers"><?php echo $_smarty_tpl->__("bestsellers");?>
</option><?php }
}
