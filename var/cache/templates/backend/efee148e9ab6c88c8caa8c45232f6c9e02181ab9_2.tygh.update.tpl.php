<?php
/* Smarty version 4.3.0, created on 2025-03-20 02:46:42
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\menus\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbe4025bc2d2_82294924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efee148e9ab6c88c8caa8c45232f6c9e02181ab9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\menus\\update.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_67dbe4025bc2d2_82294924 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('name'));
if ($_smarty_tpl->tpl_vars['menu_data']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['menu_data']->value['menu_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>


<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" name="update_product_menu_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-skip-check-items  form-horizontal">
<div id="content_group_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<input type="hidden" name="menu_data[menu_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="result_ids" value="content_group_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<fieldset>
    <div class="control-group">
        <label class="cm-required control-label" for="elm_menu_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" name="menu_data[name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="elm_menu_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="18" />
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"menu_data[status]",'id'=>"elm_menu_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['menu_data']->value), 0, false);
?>

</fieldset>

<!--content_group_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[menus.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
</div>
</form>
<?php }
}
