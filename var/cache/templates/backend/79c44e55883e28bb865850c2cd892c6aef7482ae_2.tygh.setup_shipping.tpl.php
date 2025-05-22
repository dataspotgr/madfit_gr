<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:26:48
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\onboarding_guide\steps\setup_shipping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f18083d1059_19948155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79c44e55883e28bb865850c2cd892c6aef7482ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\setup_shipping.tpl',
      1 => 1747915842,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f18083d1059_19948155 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.configure_shippings_description','onboarding_guide.configure_shippings_label','onboarding_guide.configure_shippings'));
?>
<div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.configure_shippings_description");?>
</span>
</div>

<div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.configure_shippings_label");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2 og-step-complete">
    <a href="<?php echo htmlspecialchars((string) fn_url("shippings.manage"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.configure_shippings");?>
</a>
</div>
<?php }
}
