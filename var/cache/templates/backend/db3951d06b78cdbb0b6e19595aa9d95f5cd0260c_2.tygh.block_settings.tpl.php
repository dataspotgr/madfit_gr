<?php
/* Smarty version 4.3.0, created on 2025-05-22 12:51:23
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\menus\components\block_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682ef39b72fea0_76460486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db3951d06b78cdbb0b6e19595aa9d95f5cd0260c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\menus\\components\\block_settings.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682ef39b72fea0_76460486 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('no_menus','manage_menus'));
if ($_smarty_tpl->tpl_vars['option']->value['values']) {?>
    <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['option']->value['required']) {?> class="cm-required"<?php }?>><?php if ($_smarty_tpl->tpl_vars['option']->value['option_name']) {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['option']->value['option_name']);
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['name']->value);
}?>:</label>

    <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['values'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value && $_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['k']->value || !$_smarty_tpl->tpl_vars['value']->value && $_smarty_tpl->tpl_vars['option']->value['default_value'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>    
<?php } else { ?>
    <?php echo $_smarty_tpl->__("no_menus");?>

<?php }?>
<div>
    <a href="<?php echo htmlspecialchars((string) fn_url("menus.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("manage_menus");?>
</a>
</div><?php }
}
