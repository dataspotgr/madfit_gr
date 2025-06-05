<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:51:30
=======
/* Smarty version 4.3.0, created on 2025-05-23 14:07:05
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\bestsellers\hooks\products\search_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_6838666207c066_26936612',
=======
  'unifunc' => 'content_683056d936b2e5_29268672',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7699105c4b1e09879095da6ce8ff43f20161c24f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\search_data.post.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996582,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6838666207c066_26936612 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683056d936b2e5_29268672 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('sales_amount'));
$_tmp_array = isset($_smarty_tpl->tpl_vars['search_filters']) ? $_smarty_tpl->tpl_vars['search_filters']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data']['sales_amount'] = array('id'=>"sales_amount",'type'=>"range",'category'=>"secondary",'label'=>$_smarty_tpl->__("sales_amount"),'data'=>array('name_from'=>"sales_amount_from",'value_from'=>$_smarty_tpl->tpl_vars['search']->value['sales_amount_from'],'name_to'=>"sales_amount_to",'value_to'=>$_smarty_tpl->tpl_vars['search']->value['sales_amount_to']));
$_smarty_tpl->_assignInScope('search_filters', $_tmp_array);?>

<?php $_smarty_tpl->_assignInScope('search_filters', $_smarty_tpl->tpl_vars['search_filters']->value ,false ,2);?>

<?php }
}
