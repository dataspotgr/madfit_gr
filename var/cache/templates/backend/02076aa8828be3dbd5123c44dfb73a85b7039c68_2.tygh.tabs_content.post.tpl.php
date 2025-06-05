<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:54:41
=======
/* Smarty version 4.3.0, created on 2025-05-23 10:51:11
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\products\tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_68386721d6d562_23575200',
=======
  'unifunc' => 'content_683028ef3edb73_16578523',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02076aa8828be3dbd5123c44dfb73a85b7039c68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\products\\tabs_content.post.tpl',
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
    'tygh:addons/discussion/views/discussion_manager/components/discussion.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_68386721d6d562_23575200 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683028ef3edb73_16578523 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0, false);
}
}
}
