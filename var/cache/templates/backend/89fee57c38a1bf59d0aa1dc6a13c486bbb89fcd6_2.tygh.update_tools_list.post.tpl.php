<?php
/* Smarty version 4.3.0, created on 2025-04-04 16:08:50
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\reward_points\hooks\profiles\update_tools_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67efd9e2962b60_17568127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89fee57c38a1bf59d0aa1dc6a13c486bbb89fcd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\reward_points\\hooks\\profiles\\update_tools_list.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67efd9e2962b60_17568127 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('view_user_points'));
if ($_smarty_tpl->tpl_vars['user_data']->value['user_type'] == "C" && fn_check_permissions("reward_points","userlog","admin","GET")) {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars((string) fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_user_points");?>
</a></li>
<?php }
}
}
