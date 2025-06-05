<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:43:51
=======
/* Smarty version 4.3.0, created on 2025-05-23 13:44:21
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\onboarding_guide\hooks\bottom_panel\extra_link_in_help_menu_group_1.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683864977a6a66_42363518',
=======
  'unifunc' => 'content_68305185ce8c05_07170450',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd88cf76d26fa765ce9f291df85816671f77e435a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\onboarding_guide\\hooks\\bottom_panel\\extra_link_in_help_menu_group_1.post.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996596,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_683864977a6a66_42363518 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_68305185ce8c05_07170450 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.reset_onboarding'));
if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['auth']->value['is_root'] === smarty_modifier_enum("YesNo::YES") && (fn_onboarding_guide_has_progress() || fn_onboarding_guide_is_dismissed())) {?>
<a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.restart"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("onboarding_guide.reset_onboarding");?>
</a>
<?php }
}
}
