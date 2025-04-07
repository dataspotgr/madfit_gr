<?php
/* Smarty version 4.3.0, created on 2025-04-02 14:56:32
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\views\products\subscription_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ed25f033ffc3_85662873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '636ae9f9b847533af9e110a1699a097235a48ed8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\views\\products\\subscription_form.tpl',
      1 => 1742455415,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ed25f033ffc3_85662873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('notify_when_back_in_stock','email','enter_email','enter_email','go','notify_when_back_in_stock','email','enter_email','enter_email','go'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_id']->value ?? null : $tmp));?>
<div id="subscribe_form_wrapper">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_data:back_in_stock_checkbox"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_data:back_in_stock_checkbox"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="ty-control-group">
            <label for="sw_product_notify_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-strong" id="label_sw_product_notify_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input id="sw_product_notify_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-product-notify-stock=""
                   data-ca-product-object-prefix="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-auth-user-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['auth']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"
                   type="checkbox"
                   class="checkbox cm-switch-availability cm-switch-visibility"
                   name="product_notify"
                   <?php if ($_smarty_tpl->tpl_vars['product_notification_enabled']->value === smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->__("notify_when_back_in_stock");?>

            </label>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_data:back_in_stock_checkbox"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['product_notification_enabled']->value !== smarty_modifier_enum("YesNo::YES")) {?>hidden<?php }?>" id="product_notify_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_data:back_in_stock_email"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_data:back_in_stock_email"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="ty-control-group ty-input-append ty-product-notify-email">

                    <input type="hidden" name="enable" value="Y" disabled />
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" disabled />

                    <label id="product_notify_email_label" for="product_notify_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-email hidden"><?php echo $_smarty_tpl->__("email");?>
</label>
                    <input type="text" name="email" id="product_notify_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_notification_email']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("enter_email");?>
" class="ty-product-notify-email__input cm-hint" title="<?php echo $_smarty_tpl->__("enter_email");?>
" disabled />

                    <button class="ty-btn-go cm-ajax" type="submit" name="dispatch[products.product_notifications]" title="<?php echo $_smarty_tpl->__("go");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-dir ty-btn-go__icon"),$_smarty_tpl);?>
</button>

                </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_data:back_in_stock_email"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <?php }?>
<!--subscribe_form_wrapper--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/subscription_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/subscription_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_id']->value ?? null : $tmp));?>
<div id="subscribe_form_wrapper">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_data:back_in_stock_checkbox"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_data:back_in_stock_checkbox"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="ty-control-group">
            <label for="sw_product_notify_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-strong" id="label_sw_product_notify_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input id="sw_product_notify_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-product-notify-stock=""
                   data-ca-product-object-prefix="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-auth-user-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['auth']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"
                   type="checkbox"
                   class="checkbox cm-switch-availability cm-switch-visibility"
                   name="product_notify"
                   <?php if ($_smarty_tpl->tpl_vars['product_notification_enabled']->value === smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->__("notify_when_back_in_stock");?>

            </label>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_data:back_in_stock_checkbox"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['product_notification_enabled']->value !== smarty_modifier_enum("YesNo::YES")) {?>hidden<?php }?>" id="product_notify_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_data:back_in_stock_email"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_data:back_in_stock_email"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="ty-control-group ty-input-append ty-product-notify-email">

                    <input type="hidden" name="enable" value="Y" disabled />
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" disabled />

                    <label id="product_notify_email_label" for="product_notify_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-email hidden"><?php echo $_smarty_tpl->__("email");?>
</label>
                    <input type="text" name="email" id="product_notify_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_notification_email']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("enter_email");?>
" class="ty-product-notify-email__input cm-hint" title="<?php echo $_smarty_tpl->__("enter_email");?>
" disabled />

                    <button class="ty-btn-go cm-ajax" type="submit" name="dispatch[products.product_notifications]" title="<?php echo $_smarty_tpl->__("go");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-dir ty-btn-go__icon"),$_smarty_tpl);?>
</button>

                </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_data:back_in_stock_email"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <?php }?>
<!--subscribe_form_wrapper--></div>
<?php }
}
}
