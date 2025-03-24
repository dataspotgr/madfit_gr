<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:49:06
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\social_buttons\hooks\pages\detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd6042196784_23642754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02da6902fe2a66db84b07a0222121480db832979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\social_buttons\\hooks\\pages\\detailed_content.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/social_buttons/common/facebook_types.tpl' => 1,
  ),
),false)) {
function content_67dd6042196784_23642754 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page_type']->value != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0, false);
?>
    <?php }
}
}
}
