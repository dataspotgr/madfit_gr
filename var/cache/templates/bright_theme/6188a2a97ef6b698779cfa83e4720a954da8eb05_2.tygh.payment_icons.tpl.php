<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:32:09
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\blocks\static_templates\payment_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f194907a1d0_36424005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6188a2a97ef6b698779cfa83e4720a954da8eb05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\blocks\\static_templates\\payment_icons.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f194907a1d0_36424005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-payment-icons">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:payment_icons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:payment_icons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <span class="ty-payment-icons__item twocheckout">&nbsp;</span>
    <span class="ty-payment-icons__item paypal">&nbsp;</span>
    <span class="ty-payment-icons__item mastercard">&nbsp;</span>
    <span class="ty-payment-icons__item visa">&nbsp;</span>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:payment_icons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/payment_icons.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/payment_icons.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-payment-icons">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:payment_icons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:payment_icons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <span class="ty-payment-icons__item twocheckout">&nbsp;</span>
    <span class="ty-payment-icons__item paypal">&nbsp;</span>
    <span class="ty-payment-icons__item mastercard">&nbsp;</span>
    <span class="ty-payment-icons__item visa">&nbsp;</span>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:payment_icons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php }
}
}
