<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:31:42
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\views\block_manager\render\container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f192e082062_00907586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5689c42f63b1af8b14301c15800b51033c173bb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/container.tpl' => 1,
  ),
),false)) {
function content_682f192e082062_00907586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager:frontend_container"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager:frontend_container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
        <?php $_smarty_tpl->_subTemplateRender("backend:views/block_manager/frontend_render/container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width'] != "fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager:frontend_container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
