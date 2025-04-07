<?php
/* Smarty version 4.3.0, created on 2025-04-04 16:08:50
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\gift_certificates\hooks\profiles\update_tools_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67efd9e28c3e33_49163451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '980bc9d6e65bb72f6a4cea7d70750b817d6fb76d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\profiles\\update_tools_list.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67efd9e28c3e33_49163451 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('create_gift_certificate_for_customer'));
if ($_smarty_tpl->tpl_vars['user_data']->value['user_type'] == "C" && fn_check_view_permissions("gift_certificates.add")) {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.add?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_gift_certificate_for_customer");?>
</a></li>
<?php }
}
}
