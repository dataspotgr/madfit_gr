<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:22:43
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\views\checkout\components\steps\payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ebe3b2fd17_83107228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '691e497e62685f22042d4baee09a034acdf2ae6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\views\\checkout\\components\\steps\\payment.tpl',
      1 => 1742455414,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/payments/payment_methods.tpl' => 2,
  ),
),false)) {
function content_6811ebe3b2fd17_83107228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__step litecheckout__container cm-save-fields" id="litecheckout_step_payment">
    <div class="litecheckout__section">
        <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->__('block_payment_methods');?>
</h2>
                </div>
            </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('payment_id'=>$_smarty_tpl->tpl_vars['cart']->value['payment_id'],'payment_methods'=>$_smarty_tpl->tpl_vars['payment_methods']->value,'order_id'=>$_smarty_tpl->tpl_vars['order_id']->value,'auth'=>$_smarty_tpl->tpl_vars['auth']->value,'iframe_mode'=>(($tmp = $_smarty_tpl->tpl_vars['iframe_mode']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)), 0, false);
?>
    </div>
<!--litecheckout_step_payment--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/steps/payment.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/steps/payment.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__step litecheckout__container cm-save-fields" id="litecheckout_step_payment">
    <div class="litecheckout__section">
        <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->__('block_payment_methods');?>
</h2>
                </div>
            </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('payment_id'=>$_smarty_tpl->tpl_vars['cart']->value['payment_id'],'payment_methods'=>$_smarty_tpl->tpl_vars['payment_methods']->value,'order_id'=>$_smarty_tpl->tpl_vars['order_id']->value,'auth'=>$_smarty_tpl->tpl_vars['auth']->value,'iframe_mode'=>(($tmp = $_smarty_tpl->tpl_vars['iframe_mode']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)), 0, true);
?>
    </div>
<!--litecheckout_step_payment--></div>
<?php }
}
}
