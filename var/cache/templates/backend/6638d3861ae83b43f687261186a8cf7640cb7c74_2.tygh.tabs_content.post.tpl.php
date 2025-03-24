<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:49:06
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\tags\hooks\pages\tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd604248ff62_79842798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6638d3861ae83b43f687261186a8cf7640cb7c74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\tags\\hooks\\pages\\tabs_content.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/tags/views/tags/components/object_tags.tpl' => 1,
  ),
),false)) {
function content_67dd604248ff62_79842798 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['page_data']->value,'input_name'=>"page_data",'object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id']), 0, false);
?>
    <?php }
}
}
}
