<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:26:40
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\profiles\components\profile_fields_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ecd0f0aef5_61738932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a756157d0ef210e846fee3306d8c147d5dccd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\profiles\\components\\profile_fields_info.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6811ecd0f0aef5_61738932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('first_field', true);?>
<p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field', false, NULL, 'fields', array (
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php if (!$_smarty_tpl->tpl_vars['field']->value['field_name'] || $_smarty_tpl->tpl_vars['field']->value['is_default'] == 'N') {?>
            <?php $_smarty_tpl->_assignInScope('value', fn_get_profile_field_value($_smarty_tpl->tpl_vars['user_data']->value,$_smarty_tpl->tpl_vars['field']->value));?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['customer_info']->value) {?>
                    <?php if (!$_smarty_tpl->tpl_vars['first_field']->value) {?>, <?php }?><span class="additional-fields">
                <?php } else { ?>
                    <div class="control-group">
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('first_field', false);?>
                <label><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>


                <?php if ($_smarty_tpl->tpl_vars['customer_info']->value) {?>
                    </span>
                <?php } else { ?>
                    </div>
                <?php }?>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</p><?php }
}
