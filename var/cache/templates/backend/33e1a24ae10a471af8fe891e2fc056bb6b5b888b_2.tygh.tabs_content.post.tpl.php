<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:07:40
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\required_products\hooks\products\tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6cfc43e680_19156266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33e1a24ae10a471af8fe891e2fc056bb6b5b888b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\required_products\\hooks\\products\\tabs_content.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_680b6cfc43e680_19156266 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "required_products") {?>hidden<?php }?>" id="content_required_products">
    <?php ob_start();
if ($_smarty_tpl->tpl_vars['product_company_id']->value) {
echo "company_id=";
echo (string)$_smarty_tpl->tpl_vars['product_company_id']->value;
}
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"required_product_ids[]",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'multiple'=>true,'view_mode'=>"external",'select_group_class'=>"btn-toolbar",'additional_query_params'=>$_prefixVariable6), 0, false);
?>
</div><?php }
}
