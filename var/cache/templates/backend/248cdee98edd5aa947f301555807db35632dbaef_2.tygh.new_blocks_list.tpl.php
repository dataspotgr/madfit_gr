<?php
/* Smarty version 4.3.0, created on 2025-03-20 02:39:51
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\block_manager\components\new_blocks_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbe267f40817_00032319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '248cdee98edd5aa947f301555807db35632dbaef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\block_manager\\components\\new_blocks_list.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dbe267f40817_00032319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_types']->value, 'block', false, 'type');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['is_manageable']) {?>
        <div class="select-block <?php if ($_smarty_tpl->tpl_vars['purpose']->value === "wysiwyg") {?>cm-create-bm-block<?php } else { ?>cm-add-block bm-action-new-block<?php }?> <?php if ($_smarty_tpl->tpl_vars['manage']->value == "Y") {?>bm-manage<?php }?>"
             data-ca-block-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-block-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <input type="hidden" name="block_data[type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="block_data[grid_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

            <div class="select-block-box">
                <div class="bmicon-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"></div>
            </div>

            <div class="select-block-description">
                <strong title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_replace(htmlspecialchars((string)smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],20,"...",true), ENT_QUOTES, 'UTF-8', true),'...','&hellip;');?>
</strong>
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
