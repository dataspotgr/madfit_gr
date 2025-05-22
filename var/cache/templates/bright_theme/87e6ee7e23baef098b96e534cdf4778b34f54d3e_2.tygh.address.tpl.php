<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:25:06
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\views\checkout\components\customer\address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ec72568593_66253067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87e6ee7e23baef098b96e534cdf4778b34f54d3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\views\\checkout\\components\\customer\\address.tpl',
      1 => 1742455414,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/user_profiles.tpl' => 2,
    'tygh:views/checkout/components/profile_fields.tpl' => 2,
  ),
),false)) {
function content_6811ec72568593_66253067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('element_identifier', "address-group");
$_smarty_tpl->_assignInScope('group_meta', "hidden");?>

<?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <?php $_smarty_tpl->_assignInScope('element_identifier', "user-profiles");?>
    <?php $_smarty_tpl->_assignInScope('group_meta', '');
}?>

<div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_meta']->value, ENT_QUOTES, 'UTF-8');?>
 litecheckout__group" data-ca-lite-checkout-element="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_identifier']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-address-position="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/user_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>array("s_city","s_country","s_state","customer_notes")), 0, false);
?>
    <?php }?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/address.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/address.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('element_identifier', "address-group");
$_smarty_tpl->_assignInScope('group_meta', "hidden");?>

<?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <?php $_smarty_tpl->_assignInScope('element_identifier', "user-profiles");?>
    <?php $_smarty_tpl->_assignInScope('group_meta', '');
}?>

<div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_meta']->value, ENT_QUOTES, 'UTF-8');?>
 litecheckout__group" data-ca-lite-checkout-element="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_identifier']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-address-position="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/user_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>array("s_city","s_country","s_state","customer_notes")), 0, true);
?>
    <?php }?>
</div>
<?php }
}
}
