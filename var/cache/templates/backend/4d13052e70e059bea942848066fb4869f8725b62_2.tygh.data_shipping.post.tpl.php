<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:26:53
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\paypal_checkout\hooks\orders\data_shipping.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ecdd7f5225_55869392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d13052e70e059bea942848066fb4869f8725b62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\paypal_checkout\\hooks\\orders\\data_shipping.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6811ecdd7f5225_55869392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('paypal_checkout.send_shipment_info'));
if ((isset($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['processor_params']['is_paypal_checkout'])) && $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['processor_params']['is_paypal_checkout'] === smarty_modifier_enum("YesNo::YES")) {?>
    <div class="control-group">
        <div class="control-label"><?php echo $_smarty_tpl->__("paypal_checkout.send_shipment_info");?>
</div>
        <div class="controls">
            <input type="checkbox"
                   id="paypal_checkout_send_shipment_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   name="update_shipping[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'UTF-8');?>
][paypal_checkout_send_shipment_info]"
                   value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                   checked
            />
        </div>
    </div>
<?php }
}
}
