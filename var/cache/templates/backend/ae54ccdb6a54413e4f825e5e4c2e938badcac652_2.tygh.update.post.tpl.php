<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:22:57
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\payment_dependencies\hooks\shippings\update.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ebf12b9a55_35950813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae54ccdb6a54413e4f825e5e4c2e938badcac652' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\payment_dependencies\\hooks\\shippings\\update.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6811ebf12b9a55_35950813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('pd_allowed_payment_methods','pd_allowed_payment_methods_text'));
?>
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("pd_allowed_payment_methods");?>
:</label>
    <div class="controls">
        <input type="hidden" name="shipping_data[enable_payment_ids]" value="" />
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
            <label class="checkbox inline <?php if ($_smarty_tpl->tpl_vars['payment']->value['status'] != smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>hidden<?php }?>" for="elm_shippings_payments_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="checkbox" name="shipping_data[enable_payment_ids][]" id="elm_shippings_payments_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (!smarty_modifier_in_array($_smarty_tpl->tpl_vars['payment']->value['payment_id'],$_smarty_tpl->tpl_vars['shipping']->value['disable_payment_ids'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</label>
        <?php
}
if ($_smarty_tpl->tpl_vars['payment']->do_else) {
?>
            &ndash;
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <p class="muted description"><?php echo $_smarty_tpl->__("pd_allowed_payment_methods_text");?>
</p>
    </div>
</div><?php }
}
