<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:31:22
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\views\block_manager\render\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f191a418408_07032209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ce7bf56e5857e8aa18c03dd4289e2d570c1a7d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\block.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/block.tpl' => 1,
  ),
),false)) {
function content_682f191a418408_07032209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),));
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
        <?php $_smarty_tpl->_subTemplateRender("backend:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class'] || $_smarty_tpl->tpl_vars['content_alignment']->value == 'RIGHT' || $_smarty_tpl->tpl_vars['content_alignment']->value == 'LEFT') {?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value == 'RIGHT') {?>ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == 'LEFT') {?>ty-float-left<?php }?>">
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class'] || $_smarty_tpl->tpl_vars['content_alignment']->value == 'RIGHT' || $_smarty_tpl->tpl_vars['content_alignment']->value == 'LEFT') {?>
            </div>
        <?php }?>
    <?php }
}
}
}
