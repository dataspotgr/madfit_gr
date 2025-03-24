<?php
/* Smarty version 4.3.0, created on 2025-03-24 02:16:24
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\views\product_variations\find_variations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e122e8d2aca4_38309010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1789b786a8cd9fa24c0e4dee3a13e3dd56e2beed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\find_variations.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/search_product_list.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_67e122e8d2aca4_38309010 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.add_variations'));
?>
<div id="content_tab_link_existing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/search_product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--content_tab_link_existing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<div id="tools_tab_link_existing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("product_variations.add_variations"),'but_role'=>"submit-link",'but_name'=>"dispatch[product_variations.link]",'but_meta'=>"btn-primary",'but_target_form'=>"add_product_to_group_form"), 0, false);
?>
    <?php }?>
<!--tools_tab_link_existing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
