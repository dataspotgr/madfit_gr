<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:50:08
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\vendor_communication\views\vendor_communication\components\new_thread_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2b904fb5b7_49855593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3296a18ae5f4d1e33af0763167e3a6cd85a26b7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\views\\vendor_communication\\components\\new_thread_button.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl' => 2,
  ),
),false)) {
function content_682f2b904fb5b7_49855593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.ask_a_question','vendor_communication.ask_a_question'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('communication_type', smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"));
$_smarty_tpl->_assignInScope('allow_new_thread', fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value));
$_smarty_tpl->_assignInScope('title', (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("vendor_communication.ask_a_question") ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['allow_new_thread']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?> cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-chat"),$_smarty_tpl);?>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

        </a>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

        <a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_login_form" class="cm-dialog-opener cm-dialog-auto-size <?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?>" rel="nofollow">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-chat"),$_smarty_tpl);?>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

        </a>

        <?php if ($_smarty_tpl->tpl_vars['show_form']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('communication_type', smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"));
$_smarty_tpl->_assignInScope('allow_new_thread', fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value));
$_smarty_tpl->_assignInScope('title', (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("vendor_communication.ask_a_question") ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['allow_new_thread']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?> cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-chat"),$_smarty_tpl);?>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

        </a>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

        <a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_login_form" class="cm-dialog-opener cm-dialog-auto-size <?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?>" rel="nofollow">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-chat"),$_smarty_tpl);?>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

        </a>

        <?php if ($_smarty_tpl->tpl_vars['show_form']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    <?php }
}
}
}
}
