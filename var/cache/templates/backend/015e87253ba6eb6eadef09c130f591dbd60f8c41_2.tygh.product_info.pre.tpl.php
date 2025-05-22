<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:26:37
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\shipments\product_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811eccd1470b9_74068601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '015e87253ba6eb6eadef09c130f591dbd60f8c41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\shipments\\product_info.pre.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/variation_features.tpl' => 1,
  ),
),false)) {
function content_6811eccd1470b9_74068601 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['oi']->value['variation_features'] || $_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>

    <?php if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']) {?>
                <?php $_smarty_tpl->_assignInScope('variation_features', $_smarty_tpl->tpl_vars['oi']->value['variation_features']);?>
    <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('variation_features', $_smarty_tpl->tpl_vars['product']->value['variation_features']);?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['variation_features']->value,'features_secondary'=>true), 0, false);
}
}
}
