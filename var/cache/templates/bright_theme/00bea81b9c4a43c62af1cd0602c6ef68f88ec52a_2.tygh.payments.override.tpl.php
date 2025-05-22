<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:22:44
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\payment_dependencies\hooks\checkout\payments.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ebe4b455d6_76201675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00bea81b9c4a43c62af1cd0602c6ef68f88ec52a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\payment_dependencies\\hooks\\checkout\\payments.override.tpl',
      1 => 1742984472,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6811ebe4b455d6_76201675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('pd.no_payments_available','pd.no_payments_available'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
        <div class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">

            <input type="radio"
                   name="selected_payment_method"
                   id="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-target-form="litecheckout_payments_form"
                   data-ca-url="checkout.checkout"
                   data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,litecheckout_terms,checkout*"
                   class="litecheckout__shipping-method__radio cm-select-payment hidden"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_id'] == $_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>checked<?php }?>
            />

            <label id="payments_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                   for="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-toggling="payments_form_wrapper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-hide-all-in=".litecheckout__payment-methods"
            >
                <?php if ($_smarty_tpl->tpl_vars['payment']->value['image']) {?>
                    <div class="litecheckout__shipping-method__logo">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id'],'images'=>$_smarty_tpl->tpl_vars['payment']->value['image'],'class'=>"litecheckout__shipping-method__logo-image"), 0, true);
?>
                    </div>
                <?php }?>
                <p class="litecheckout__shipping-method__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</p>
                <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </label>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <div class="litecheckout__item">
        <p class="ty-error-text">
            <?php echo $_smarty_tpl->__("pd.no_payments_available");?>

        </p>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/payment_dependencies/hooks/checkout/payments.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/payment_dependencies/hooks/checkout/payments.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
        <div class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">

            <input type="radio"
                   name="selected_payment_method"
                   id="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-target-form="litecheckout_payments_form"
                   data-ca-url="checkout.checkout"
                   data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,litecheckout_terms,checkout*"
                   class="litecheckout__shipping-method__radio cm-select-payment hidden"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_id'] == $_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>checked<?php }?>
            />

            <label id="payments_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                   for="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-toggling="payments_form_wrapper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-hide-all-in=".litecheckout__payment-methods"
            >
                <?php if ($_smarty_tpl->tpl_vars['payment']->value['image']) {?>
                    <div class="litecheckout__shipping-method__logo">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id'],'images'=>$_smarty_tpl->tpl_vars['payment']->value['image'],'class'=>"litecheckout__shipping-method__logo-image"), 0, true);
?>
                    </div>
                <?php }?>
                <p class="litecheckout__shipping-method__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</p>
                <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </label>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <div class="litecheckout__item">
        <p class="ty-error-text">
            <?php echo $_smarty_tpl->__("pd.no_payments_available");?>

        </p>
    </div>
<?php }
}
}
}
