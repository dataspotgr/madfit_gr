<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:50:47
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\views\checkout\components\customer_notes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2bb78b4dd7_42730452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13a5638fa83c07f1883f1d8428f3927ddbbef968' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\views\\checkout\\components\\customer_notes.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f2bb78b4dd7_42730452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.delivery_note','lite_checkout.delivery_note','lite_checkout.delivery_note','lite_checkout.delivery_note'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="cm-processing-personal-data" data-ca-processing-personal-data-without-click="true">
    <div class="litecheckout__group">
        <div class="litecheckout__field">
                <textarea data-ca-lite-checkout-field="customer_notes"
                          class="litecheckout__input litecheckout__input--textarea autofill-off"
                          id="litecheckout_comment_to_shipping"
                          autocomplete="disabled"
                          placeholder=" "
                          data-ca-lite-checkout-element="customer_notes"
                          data-ca-lite-checkout-auto-save="true"
                          aria-label="<?php echo $_smarty_tpl->__("lite_checkout.delivery_note");?>
"
                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['notes'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <label class="litecheckout__label" for="litecheckout_comment_to_shipping"
            ><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['field_name']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.delivery_note") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 </label>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer_notes.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer_notes.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="cm-processing-personal-data" data-ca-processing-personal-data-without-click="true">
    <div class="litecheckout__group">
        <div class="litecheckout__field">
                <textarea data-ca-lite-checkout-field="customer_notes"
                          class="litecheckout__input litecheckout__input--textarea autofill-off"
                          id="litecheckout_comment_to_shipping"
                          autocomplete="disabled"
                          placeholder=" "
                          data-ca-lite-checkout-element="customer_notes"
                          data-ca-lite-checkout-auto-save="true"
                          aria-label="<?php echo $_smarty_tpl->__("lite_checkout.delivery_note");?>
"
                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['notes'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <label class="litecheckout__label" for="litecheckout_comment_to_shipping"
            ><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['field_name']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.delivery_note") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 </label>
        </div>
    </div>
</div>
<?php }
}
}
