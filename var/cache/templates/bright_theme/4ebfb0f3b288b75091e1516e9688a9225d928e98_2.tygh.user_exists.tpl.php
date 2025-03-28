<?php
/* Smarty version 4.3.0, created on 2025-03-26 03:42:21
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\views\checkout\components\user_exists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3da0def6513_48413568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ebfb0f3b288b75091e1516e9688a9225d928e98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\views\\checkout\\components\\user_exists.tpl',
      1 => 1742455414,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
  ),
),false)) {
function content_67e3da0def6513_48413568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('checkout.email_exists.popup.message','checkout.email_exists.popup.cancel_btn','checkout.email_exists.popup.sign_in_btn','checkout.email_exists.popup.message','checkout.email_exists.popup.cancel_btn','checkout.email_exists.popup.sign_in_btn'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="login_by_otp_container">
    <div class="ty-product-notification__body cm-notification-max-height">
        <?php echo $_smarty_tpl->__("checkout.email_exists.popup.message");?>

    </div>
    <div class="ty-product-notification__buttons clearfix">
        <div class="ty-float-left">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("checkout.email_exists.popup.cancel_btn"),'but_meta'=>"cm-notification-close"), 0, false);
?>
        </div>
        <div class="ty-right">
            <form id="checkout_user_exist_notification_form">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="container_id" value="login_by_otp_container">
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) fn_url("checkout.checkout"), ENT_QUOTES, 'UTF-8');?>
">
            </form>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_text'=>$_smarty_tpl->__("checkout.email_exists.popup.sign_in_btn"),'but_href'=>"auth.send_otp",'but_meta'=>"ty-btn__secondary cm-ajax cm-ajax-send-form cm-post",'but_target_id'=>"login_by_otp_container",'but_target_form'=>"#checkout_user_exist_notification_form",'but_title'=>$_smarty_tpl->__('checkout.email_exists.popup.title')), 0, true);
?>
        </div>
    </div>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/user_exists.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/user_exists.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="login_by_otp_container">
    <div class="ty-product-notification__body cm-notification-max-height">
        <?php echo $_smarty_tpl->__("checkout.email_exists.popup.message");?>

    </div>
    <div class="ty-product-notification__buttons clearfix">
        <div class="ty-float-left">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("checkout.email_exists.popup.cancel_btn"),'but_meta'=>"cm-notification-close"), 0, true);
?>
        </div>
        <div class="ty-right">
            <form id="checkout_user_exist_notification_form">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="container_id" value="login_by_otp_container">
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) fn_url("checkout.checkout"), ENT_QUOTES, 'UTF-8');?>
">
            </form>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_text'=>$_smarty_tpl->__("checkout.email_exists.popup.sign_in_btn"),'but_href'=>"auth.send_otp",'but_meta'=>"ty-btn__secondary cm-ajax cm-ajax-send-form cm-post",'but_target_id'=>"login_by_otp_container",'but_target_form'=>"#checkout_user_exist_notification_form",'but_title'=>$_smarty_tpl->__('checkout.email_exists.popup.title')), 0, true);
?>
        </div>
    </div>
</div><?php }
}
}
