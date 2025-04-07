<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:35:19
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\views\product_variations\components\group_code.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea53c7d2c3f9_95694102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f79f565174eebd9e178d06adc214b2333e4fce29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\group_code.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tooltip.tpl' => 1,
  ),
),false)) {
function content_67ea53c7d2c3f9_95694102 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.group_code','product_variations.group_code.description','product_variations.group_code.placeholder'));
?>
<input type="hidden" name="variation_group[id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value->getId(), ENT_QUOTES, 'UTF-8');?>
" />
<div class="input-prepend shift-left product-variations__toolbar-code-wrapper">
    <span class="add-on product-variations__toolbar-code-addon"><?php echo $_smarty_tpl->__("product_variations.group_code");
$_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->__("product_variations.group_code.description")), 0, false);
?></span>
    <input class="product-variations__toolbar-code" id="prependedInput" type="text" name="variation_group[code]" data-ca-meta-class="product-variations__toolbar-code product-variations__toolbar-code--text" placeholder="<?php echo $_smarty_tpl->__("product_variations.group_code.placeholder");?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value->getCode(), ENT_QUOTES, 'UTF-8');?>
">
</div><?php }
}
