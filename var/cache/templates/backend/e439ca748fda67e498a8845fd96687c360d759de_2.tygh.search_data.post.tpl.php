<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:01:26
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\tags\hooks\products\search_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea4bd68e8677_80346505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e439ca748fda67e498a8845fd96687c360d759de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\tags\\hooks\\products\\search_data.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ea4bd68e8677_80346505 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['search_filters']) ? $_smarty_tpl->tpl_vars['search_filters']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data']['tag'] = array('id'=>"tag",'type'=>"input",'category'=>"secondary",'label'=>$_smarty_tpl->__("tag"),'value'=>$_smarty_tpl->tpl_vars['search']->value['tag']);
$_smarty_tpl->_assignInScope('search_filters', $_tmp_array);?>

        <?php $_smarty_tpl->_assignInScope('search_filters', $_smarty_tpl->tpl_vars['search_filters']->value ,false ,2);
}
}
}
