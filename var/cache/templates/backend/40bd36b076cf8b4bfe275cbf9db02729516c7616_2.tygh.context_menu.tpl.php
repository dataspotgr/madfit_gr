<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:30:16
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\components\context_menu\context_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f18d88c9293_86662494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40bd36b076cf8b4bfe275cbf9db02729516c7616' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\components\\context_menu\\context_menu.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f18d88c9293_86662494 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="bulk-edit clearfix hidden <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value['class'], ENT_QUOTES, 'UTF-8');?>
"
     <?php if ($_smarty_tpl->tpl_vars['context_menu_items']->value) {?>
         data-ca-bulkedit-expanded-object="true"
         data-ca-bulkedit-component="expandedObject"
     <?php } else { ?>
         data-ca-bulkedit-disabled="true"
     <?php }?>
>

    <ul class="btn-group bulk-edit__wrapper">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['status_selector']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('statuses'=>$_smarty_tpl->tpl_vars['status_selector']->value->getStatuses(),'elms_container'=>$_smarty_tpl->tpl_vars['context_menu_id']->value), 0, true);
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['context_menu_items']->value, 'item', false, 'item_id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['item']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item'=>$_smarty_tpl->tpl_vars['item']->value,'data'=>$_smarty_tpl->tpl_vars['item']->value->getData()), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

</div>
<?php }
}
