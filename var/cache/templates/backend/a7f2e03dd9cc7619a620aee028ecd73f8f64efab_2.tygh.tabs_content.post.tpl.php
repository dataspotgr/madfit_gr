<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:07:39
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\tags\hooks\products\tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6cfb6cba50_71674682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7f2e03dd9cc7619a620aee028ecd73f8f64efab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\tags\\hooks\\products\\tabs_content.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/tags/views/tags/components/object_tags.tpl' => 1,
  ),
),false)) {
function content_680b6cfb6cba50_71674682 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['product_data']->value,'input_name'=>"product_data",'allow_save'=>true,'object_type'=>"P",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id']), 0, false);
?>
    <?php }
}
}
}
