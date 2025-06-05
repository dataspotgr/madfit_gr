<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-30 12:22:56
=======
/* Smarty version 4.3.0, created on 2025-05-23 10:51:51
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\views\product_variations\components\group_code.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683978f0724dc1_07710792',
=======
  'unifunc' => 'content_68302917848100_43034809',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f79f565174eebd9e178d06adc214b2333e4fce29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\group_code.tpl',
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
    'tygh:common/tooltip.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_683978f0724dc1_07710792 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_68302917848100_43034809 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
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
