<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:50:56
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\gift_certificates\hooks\checkout\summary.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2bc05c5323_28341716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96f447325e74679dd30d04f4453710a4eeb1c621' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\gift_certificates\\hooks\\checkout\\summary.post.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gift_certificates/views/gift_certificates/components/delete_button.tpl' => 2,
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_682f2bc05c5323_28341716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates'], 'ugc', false, 'ugc_key');
$_smarty_tpl->tpl_vars['ugc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ugc_key']->value => $_smarty_tpl->tpl_vars['ugc']->value) {
$_smarty_tpl->tpl_vars['ugc']->do_else = false;
?>
        <tr>
            <td class="ty-checkout-summary__item">
                <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['ugc_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ugc_key']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/delete_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('code'=>$_smarty_tpl->tpl_vars['ugc_key']->value,'r_url'=>rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])), 0, true);
?>
            </td>
            <td class="ty-checkout-summary__item ty-right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['ugc']->value['cost'])), 0, true);
?>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/checkout/summary.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/checkout/summary.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates'], 'ugc', false, 'ugc_key');
$_smarty_tpl->tpl_vars['ugc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ugc_key']->value => $_smarty_tpl->tpl_vars['ugc']->value) {
$_smarty_tpl->tpl_vars['ugc']->do_else = false;
?>
        <tr>
            <td class="ty-checkout-summary__item">
                <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['ugc_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ugc_key']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/delete_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('code'=>$_smarty_tpl->tpl_vars['ugc_key']->value,'r_url'=>rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])), 0, true);
?>
            </td>
            <td class="ty-checkout-summary__item ty-right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['ugc']->value['cost'])), 0, true);
?>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
