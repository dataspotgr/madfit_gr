<?php
/* Smarty version 4.3.0, created on 2025-05-28 14:48:08
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\debugger\components\templates_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6836f7f8e2c136_31292224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd84d256353a1f6eade6ff871d2a506e1cdc432d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\debugger\\components\\templates_list.tpl',
      1 => 1743766598,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
    'backend:views/debugger/components/templates_list.tpl' => 2,
  ),
),false)) {
function content_6836f7f8e2c136_31292224 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<li>
			<a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['childs']) {?>
				<?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/templates_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('list'=>$_smarty_tpl->tpl_vars['item']->value['childs']), 0, true);
?>
			<?php }?>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
