<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:25:06
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\help_center\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f17a28c85e6_06958537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afc3b173487379628d6a0bbc1b3e31c3a1d4e439' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\scripts.post.tpl',
      1 => 1747915842,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f17a28c85e6_06958537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/help_center/help_center_background.js"),$_smarty_tpl);?>

<?php }
}
}
