<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:50:23
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\blocks\product_tabs\description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2b9fb3cda7_48602586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '701349785c827994b769f0b4cac2b69fafbd9d4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\blocks\\product_tabs\\description.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f2b9fb3cda7_48602586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.live_edit.php','function'=>'smarty_function_live_edit',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['full_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:full_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['full_description'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_tabs/description.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_tabs/description.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['full_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:full_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['full_description'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
<?php }
}
}
}
