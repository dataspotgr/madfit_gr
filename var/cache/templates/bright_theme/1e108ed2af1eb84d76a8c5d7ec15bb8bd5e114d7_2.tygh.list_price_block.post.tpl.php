<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:32:03
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\price_per_unit\hooks\products\list_price_block.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f19432f3f88_79531425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e108ed2af1eb84d76a8c5d7ec15bb8bd5e114d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\price_per_unit\\hooks\\products\\list_price_block.post.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f19432f3f88_79531425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('price_per_unit', "price_per_unit_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price_per_unit']->value))) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price_per_unit']->value);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/price_per_unit/hooks/products/list_price_block.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/price_per_unit/hooks/products/list_price_block.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('price_per_unit', "price_per_unit_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price_per_unit']->value))) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price_per_unit']->value);?>

<?php }
}
}
}
