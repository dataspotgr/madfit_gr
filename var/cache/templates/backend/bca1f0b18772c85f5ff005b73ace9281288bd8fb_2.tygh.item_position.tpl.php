<?php
/* Smarty version 4.3.0, created on 2025-03-21 02:38:47
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\products\components\picker\item_position.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd33a7883ef2_32255455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bca1f0b18772c85f5ff005b73ace9281288bd8fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\products\\components\\picker\\item_position.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dd33a7883ef2_32255455 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('position_short'));
?>
<div class="object-picker__products-position">
    <input type="text"
        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[${data.product_id}]"
        value="${(data._index + 1) * 10}"
        size="3"
        class="input-micro"
        placeholder="<?php echo $_smarty_tpl->__("position_short");?>
"
    />
</div><?php }
}
