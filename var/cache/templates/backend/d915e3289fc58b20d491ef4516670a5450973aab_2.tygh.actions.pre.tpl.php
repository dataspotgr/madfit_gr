<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:43:58
=======
/* Smarty version 4.3.0, created on 2025-05-23 13:44:28
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_reviews\hooks\index\actions.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_6838649eccc6a6_30844640',
=======
  'unifunc' => 'content_6830518cee4a96_15830387',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd915e3289fc58b20d491ef4516670a5450973aab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_reviews\\hooks\\index\\actions.pre.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996600,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6838649eccc6a6_30844640 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6830518cee4a96_15830387 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
?>

<?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['controller'] === 'reviews' && ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'manage' && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts'] !== smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'update')) {?>
    <?php $_smarty_tpl->_assignInScope('select_storefront', false ,false ,2);
}
}
}
