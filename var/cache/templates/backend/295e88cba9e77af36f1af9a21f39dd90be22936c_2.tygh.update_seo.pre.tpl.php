<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:54:37
=======
/* Smarty version 4.3.0, created on 2025-05-23 10:50:58
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\seo\hooks\products\update_seo.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_6838671de336f2_52317087',
=======
  'unifunc' => 'content_683028e2286b54_88306154',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '295e88cba9e77af36f1af9a21f39dd90be22936c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\seo\\hooks\\products\\update_seo.pre.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747915842,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/seo/common/seo_name_field.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_6838671de336f2_52317087 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683028e2286b54_88306154 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.component.php','function'=>'smarty_block_component',),));
if ($_smarty_tpl->tpl_vars['view_uri']->value && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"seo",'section'=>"main",'field'=>"seo_name_field"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"seo",'section'=>"main",'field'=>"seo_name_field"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_data'=>$_smarty_tpl->tpl_vars['product_data']->value,'object_name'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>"p",'share_dont_hide'=>true), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"seo",'section'=>"main",'field'=>"seo_name_field"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
