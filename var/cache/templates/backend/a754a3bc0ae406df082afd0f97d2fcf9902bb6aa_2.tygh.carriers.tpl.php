<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:26:37
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\carriers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811eccd28f0c5_03144611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a754a3bc0ae406df082afd0f97d2fcf9902bb6aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\carriers.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6811eccd28f0c5_03144611 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['capture']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "carrier_field", null, null);
}?>

<select <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?> form-control">
    <option value="">--</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'carrier_data', false, 'code');
$_smarty_tpl->tpl_vars['carrier_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['carrier_data']->value) {
$_smarty_tpl->tpl_vars['carrier_data']->do_else = false;
?>
    	<option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['carrier']->value == $_smarty_tpl->tpl_vars['code']->value) {
$_smarty_tpl->_assignInScope('carrier_name', $_smarty_tpl->tpl_vars['carrier_data']->value['name']);?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['carrier_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php if ($_smarty_tpl->tpl_vars['capture']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "carrier_name", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['carrier_name']->value, ENT_QUOTES, 'UTF-8');?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
