<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:50:40
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\blocks\lite_checkout\shipping_methods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2bb0bf30a8_64207846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '917a309deb00c7b45e5d493fd7cc4ef4906cdd9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\blocks\\lite_checkout\\shipping_methods.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/shipping_rates.tpl' => 2,
  ),
),false)) {
function content_682f2bb0bf30a8_64207846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__container">
    <div class="litecheckout__group litecheckout__step" id="litecheckout_step_shipping">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/shipping_rates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_form'=>true), 0, false);
?>
    <!--litecheckout_step_shipping--></div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/shipping_methods.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/shipping_methods.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__container">
    <div class="litecheckout__group litecheckout__step" id="litecheckout_step_shipping">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/shipping_rates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_form'=>true), 0, true);
?>
    <!--litecheckout_step_shipping--></div>
</div>
<?php }
}
}
