<?php
/* Smarty version 4.3.0, created on 2025-03-26 03:42:50
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\views\auth\login_by_otp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3da2a8c3b69_03506719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eb8184270eb0d599bb20f86291417936faafa00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\views\\auth\\login_by_otp.tpl',
      1 => 1742455414,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
  ),
),false)) {
function content_67e3da2a8c3b69_03506719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('auth.one_time_password.popup.message','code','auth.one_time_password.popup.input_placeholder','auth.one_time_password.popup.resend_btn','auth.one_time_password.popup.sign_in_btn','auth.one_time_password.popup.message','code','auth.one_time_password.popup.input_placeholder','auth.one_time_password.popup.resend_btn','auth.one_time_password.popup.sign_in_btn'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('container_id', (($tmp = $_smarty_tpl->tpl_vars['container_id']->value ?? null)===null||$tmp==='' ? "login_by_otp_container" ?? null : $tmp));?>

<div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax cm-post" id="login_by_otp_form" name="login_by_otp_form">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="container_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="dispatch" value="auth.login_by_otp" />

        <div class="ty-product-notification__body cm-notification-max-height">
            <?php echo $_smarty_tpl->__("auth.one_time_password.popup.message",array("[email]"=>$_smarty_tpl->tpl_vars['email']->value));?>

            <p class="ty-center">
                <label for="one_time_password_input" class="hidden cm-required"><?php echo $_smarty_tpl->__("code");?>
</label>
                <input type="text"
                    id="one_time_password_input"
                    placeholder="<?php echo $_smarty_tpl->__("auth.one_time_password.popup.input_placeholder");?>
"
                    name="password"
                    class="ty-input-text cm-input-text-auto-submit cm-focus"
                    autocomplete="off"
                    maxlength="<?php echo htmlspecialchars((string) (defined('USER_ONE_TIME_PASSWORD_LENGTH') ? constant('USER_ONE_TIME_PASSWORD_LENGTH') : null), ENT_QUOTES, 'UTF-8');?>
"
                    autofocus
                />
            </p>
        </div>
        <div class="ty-product-notification__buttons buttons-container clearfix">
            <div class="ty-float-left">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("auth.one_time_password.popup.resend_btn"),'but_role'=>"text",'but_href'=>fn_url("auth.send_otp.resend"),'but_meta'=>"cm-ajax cm-post cm-ajax-send-form",'but_target_form'=>"#login_by_otp_resend_form"), 0, false);
?>
            </div>
            <div class="ty-right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"login_by_otp_sign_in_btn",'but_name'=>"dispatch[auth.login_by_otp]",'but_text'=>$_smarty_tpl->__("auth.one_time_password.popup.sign_in_btn"),'but_meta'=>"ty-btn__secondary",'but_role'=>"submit"), 0, true);
?>
            </div>
        </div>
    </form>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax cm-post" id="login_by_otp_resend_form" name="login_by_otp_resend_form">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
    </form>
<!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/auth/login_by_otp.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/auth/login_by_otp.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('container_id', (($tmp = $_smarty_tpl->tpl_vars['container_id']->value ?? null)===null||$tmp==='' ? "login_by_otp_container" ?? null : $tmp));?>

<div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax cm-post" id="login_by_otp_form" name="login_by_otp_form">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="container_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="dispatch" value="auth.login_by_otp" />

        <div class="ty-product-notification__body cm-notification-max-height">
            <?php echo $_smarty_tpl->__("auth.one_time_password.popup.message",array("[email]"=>$_smarty_tpl->tpl_vars['email']->value));?>

            <p class="ty-center">
                <label for="one_time_password_input" class="hidden cm-required"><?php echo $_smarty_tpl->__("code");?>
</label>
                <input type="text"
                    id="one_time_password_input"
                    placeholder="<?php echo $_smarty_tpl->__("auth.one_time_password.popup.input_placeholder");?>
"
                    name="password"
                    class="ty-input-text cm-input-text-auto-submit cm-focus"
                    autocomplete="off"
                    maxlength="<?php echo htmlspecialchars((string) (defined('USER_ONE_TIME_PASSWORD_LENGTH') ? constant('USER_ONE_TIME_PASSWORD_LENGTH') : null), ENT_QUOTES, 'UTF-8');?>
"
                    autofocus
                />
            </p>
        </div>
        <div class="ty-product-notification__buttons buttons-container clearfix">
            <div class="ty-float-left">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("auth.one_time_password.popup.resend_btn"),'but_role'=>"text",'but_href'=>fn_url("auth.send_otp.resend"),'but_meta'=>"cm-ajax cm-post cm-ajax-send-form",'but_target_form'=>"#login_by_otp_resend_form"), 0, true);
?>
            </div>
            <div class="ty-right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"login_by_otp_sign_in_btn",'but_name'=>"dispatch[auth.login_by_otp]",'but_text'=>$_smarty_tpl->__("auth.one_time_password.popup.sign_in_btn"),'but_meta'=>"ty-btn__secondary",'but_role'=>"submit"), 0, true);
?>
            </div>
        </div>
    </form>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax cm-post" id="login_by_otp_resend_form" name="login_by_otp_resend_form">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
    </form>
<!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
