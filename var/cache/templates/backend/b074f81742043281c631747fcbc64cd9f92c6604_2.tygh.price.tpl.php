<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:26:54
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f180e320c58_64096299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b074f81742043281c631747fcbc64cd9f92c6604' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\price.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f180e320c58_64096299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.format_price.php','function'=>'smarty_modifier_format_price',),));
$_smarty_tpl->_assignInScope('show_currency', (($tmp = $_smarty_tpl->tpl_vars['show_currency']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('space', (($tmp = $_smarty_tpl->tpl_vars['enable_non_breaking_space']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp) ? "&nbsp;" : " ");
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "currencies", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['General']['alternative_currency'] == "use_selected_and_alternative") {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,false);
if ($_smarty_tpl->tpl_vars['secondary_currency']->value != $_smarty_tpl->tpl_vars['primary_currency']->value) {
echo $_smarty_tpl->tpl_vars['space']->value;?>
(<?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"></span><?php }
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['is_integer']->value);
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"></span><?php }?>)<?php }
} else {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['view']->value == "input") {?><input type="text" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-numeric <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['show_currency']->value) {?>data-a-sign="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'] ?: '');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after'] == "Y") {?>data-p-sign="s"<?php }?> data-a-dec="." data-a-sep="," <?php if ($_smarty_tpl->tpl_vars['product_id']->value) {?>data-ct-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'currencies');
}
}
}
