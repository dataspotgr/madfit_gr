<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:54:41
=======
/* Smarty version 4.3.0, created on 2025-05-23 10:51:09
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\tags\hooks\products\tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_68386721620413_45164275',
=======
  'unifunc' => 'content_683028edc9b058_64400128',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7f2e03dd9cc7619a620aee028ecd73f8f64efab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\tags\\hooks\\products\\tabs_content.post.tpl',
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
    'tygh:addons/tags/views/tags/components/object_tags.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_68386721620413_45164275 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683028edc9b058_64400128 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['product_data']->value,'input_name'=>"product_data",'allow_save'=>true,'object_type'=>"P",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id']), 0, false);
?>
    <?php }
}
}
}
