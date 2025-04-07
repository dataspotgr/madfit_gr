<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:01:09
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\views\discussion_manager\components\allow_discussion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea4bc53abb12_58769604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '040a8c2585ea83e56b8d34b11f673af5b169d081' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\views\\discussion_manager\\components\\allow_discussion.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ea4bc53abb12_58769604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
?>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['no_hide_input']->value) {?>cm-no-hide-input<?php }?>">
    <label class="control-label" for="discussion_type"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
:</label>
    <div class="controls">

        <?php if (!$_smarty_tpl->tpl_vars['discussion']->value) {?>
        <?php $_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value));?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('discussion_types_list', fn_discussion_get_discussion_types());?>
        <?php $_smarty_tpl->_assignInScope('discussion_type', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['discussion']->value['type'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['discussion_default_type']->value ?? null : $tmp) ?? null)===null||$tmp==='' ? (smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) ?? null : $tmp));?>

        <?php if (fn_check_view_permissions("discussion.add")) {?>
            <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discussion_type]" id="discussion_type">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion_types_list']->value, 'type_name', false, 'type');
$_smarty_tpl->tpl_vars['type_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['type_name']->value) {
$_smarty_tpl->tpl_vars['type_name']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion_type']->value == $_smarty_tpl->tpl_vars['type']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <?php } else { ?>
            <span class="shift-input"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion_types_list']->value[$_smarty_tpl->tpl_vars['discussion_type']->value], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>

    </div>
</div><?php }
}
