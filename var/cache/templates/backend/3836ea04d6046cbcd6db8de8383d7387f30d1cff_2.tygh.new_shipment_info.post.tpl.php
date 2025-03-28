<?php
/* Smarty version 4.3.0, created on 2025-03-26 03:44:45
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\paypal_checkout\hooks\shipments\new_shipment_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3da9dbde656_12424681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3836ea04d6046cbcd6db8de8383d7387f30d1cff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\paypal_checkout\\hooks\\shipments\\new_shipment_info.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e3da9dbde656_12424681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('paypal_checkout.send_shipment_info'));
if ((isset($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['processor_params']['is_paypal_checkout'])) && $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['processor_params']['is_paypal_checkout'] === smarty_modifier_enum("YesNo::YES")) {?>
    <div class="cm-toggle-button">
        <div class="control-group select-field">
            <div class="controls">
                <label for="paypal_checkout_send_shipment_info" class="checkbox">
                    <input type="checkbox"
                           id="paypal_checkout_send_shipment_info"
                           name="shipment_data[paypal_checkout_send_shipment_info]"
                           value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                           checked
                    />
                    <?php echo $_smarty_tpl->__("paypal_checkout.send_shipment_info");?>

                </label>
            </div>
        </div>
    </div>
<?php }
}
}
