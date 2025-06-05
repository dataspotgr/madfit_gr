<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:43:51
=======
/* Smarty version 4.3.0, created on 2025-05-23 13:44:21
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\hidpi\hooks\common\image.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683864974dd820_84197720',
=======
  'unifunc' => 'content_683051858d4ea2_24993954',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2b6de10c0e50842ce6c4d3af3f7d901f9b6b3af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\hidpi\\hooks\\common\\image.pre.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996593,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_683864974dd820_84197720 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683051858d4ea2_24993954 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
if ($_smarty_tpl->tpl_vars['image_data']->value['is_thumbnail']) {?>
    <?php $_smarty_tpl->_assignInScope('width', $_smarty_tpl->tpl_vars['image_data']->value['width']*2);?>
    <?php $_smarty_tpl->_assignInScope('height', $_smarty_tpl->tpl_vars['image_data']->value['height']*2);?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value));
} elseif ($_smarty_tpl->tpl_vars['image']->value['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['image_data']->value);?>
    <?php $_smarty_tpl->_assignInScope('image_data', fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image']->value['image_x'],$_smarty_tpl->tpl_vars['image']->value['image_y']) ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['image']->value['original_image_path']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['image']->value);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_data2x']) ? $_smarty_tpl->tpl_vars['image_data2x']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["image_path"] = $_smarty_tpl->tpl_vars['image']->value['original_image_path'];
$_smarty_tpl->_assignInScope('image_data2x', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_data2x']->value['image_path']) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["srcset"] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array ,false ,2);
}
}
}
