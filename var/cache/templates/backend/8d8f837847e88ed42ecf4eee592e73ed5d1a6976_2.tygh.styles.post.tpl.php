<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:24:55
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\store_locator\hooks\index\styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f17975214f5_57864712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d8f837847e88ed42ecf4eee592e73ed5d1a6976' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\store_locator\\hooks\\index\\styles.post.tpl',
      1 => 1747915842,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f17975214f5_57864712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),));
if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value && $_smarty_tpl->tpl_vars['shipping']->value['company_id'] == 0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }
}
}
