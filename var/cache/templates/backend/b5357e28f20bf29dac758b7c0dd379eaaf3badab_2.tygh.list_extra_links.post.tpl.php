<?php
/* Smarty version 4.3.0, created on 2025-03-26 03:43:31
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\reward_points\hooks\profiles\list_extra_links.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3da53321726_50778993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5357e28f20bf29dac758b7c0dd379eaaf3badab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\reward_points\\hooks\\profiles\\list_extra_links.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e3da53321726_50778993 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('points'));
if ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "C" && fn_check_permissions("reward_points","userlog","admin","GET")) {?>
    <li><a href="<?php echo htmlspecialchars((string) fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value['points']) {
echo htmlspecialchars((string) unserialize($_smarty_tpl->tpl_vars['user']->value['points']), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>)</a></li>
<?php }
}
}
