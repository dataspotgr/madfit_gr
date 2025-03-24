<?php
/* Smarty version 4.3.0, created on 2025-03-24 03:22:28
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\product_list\product_data.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e13264476c28_65166011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff5d4f0653791f5b82abb41d7102ea8e2f6c3a42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\product_list\\product_data.pre.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e13264476c28_65166011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
if ($_smarty_tpl->tpl_vars['product']->value['variation_name']) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_list:picker_product_alt_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_list:picker_product_alt_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <input type="hidden" id="product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_alt" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['variation_name'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_list:picker_product_alt_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
