<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:26:38
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\gift_certificates\hooks\orders\totals_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ecce73da90_14048494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '965fa39061b1a0bb51dbf31ba980435f380994cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\orders\\totals_content.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_6811ecce73da90_14048494 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('payment_information','gift_certificate'));
if ($_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']) {
if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id'] == 0) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("payment_information")), 0, false);
}?>
    <tr>
        <td class="right muted strong"><?php echo $_smarty_tpl->__("gift_certificate");?>
</td>
        <td>&nbsp;</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates'], 'certificate', false, 'code');
$_smarty_tpl->tpl_vars['certificate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['certificate']->value) {
$_smarty_tpl->tpl_vars['certificate']->do_else = false;
?>
        <tr>
            <td><a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['certificate']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td class="right text-success"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['certificate']->value['cost'])), 0, true);
?></td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
