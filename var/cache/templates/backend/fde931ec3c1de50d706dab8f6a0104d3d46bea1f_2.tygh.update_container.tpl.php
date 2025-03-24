<?php
/* Smarty version 4.3.0, created on 2025-03-20 02:35:46
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\block_manager\update_container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbe172d76d87_90342822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde931ec3c1de50d706dab8f6a0104d3d46bea1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\block_manager\\update_container.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_67dbe172d76d87_90342822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','user_class','block_manager.availability.show_on','block_manager.availability.'));
?>

<?php if ($_smarty_tpl->tpl_vars['container']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['container']->value['container_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}
$_smarty_tpl->_assignInScope('tabs_count', 1);?>

<div id="container_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal form-edit " name="container_update_form">
<input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="container_data[container_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
<fieldset>
    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_container_user_class_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("user_class");?>
</label>
        <div class="controls">
        <input class="input-text" type="text" id="elm_container_user_class_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="container_data[user_class]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label cm-required cm-multiple-checkboxes"
               for="container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_availability"
        ><?php echo $_smarty_tpl->__("block_manager.availability.show_on");?>
</label>
        <div class="controls" id="container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_availability">
            <div class="btn-group btn-group-checkbox">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['container']->value['availability'], 'is_available', false, 'device');
$_smarty_tpl->tpl_vars['is_available']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device']->value => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->do_else = false;
?>

                    <?php if ($_smarty_tpl->tpl_vars['device']->value == "phone") {?>
                        <?php $_smarty_tpl->_assignInScope('devices_icon', "icon-mobile-phone");?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['device']->value == "tablet") {?>
                        <?php $_smarty_tpl->_assignInScope('devices_icon', "icon-tablet");?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['device']->value == "desktop") {?>
                        <?php $_smarty_tpl->_assignInScope('devices_icon', "icon-desktop");?>
                    <?php }?>

                    <input type="checkbox"
                        id="elm_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_show_on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
"
                        class="cm-text-toggle btn-group-checkbox__checkbox"
                        <?php if ($_smarty_tpl->tpl_vars['is_available']->value) {?>checked="checked"<?php }?>
                        data-ca-toggle-text="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_availability_instance']->value->getHiddenClass($_smarty_tpl->tpl_vars['device']->value), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-toggle-text-mode="onDisable"
                        data-ca-toggle-text-target-elem-id="elm_container_user_class_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    />
                    <label class="btn btn-group-checkbox__label" for="elm_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_show_on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['devices_icon']->value),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->__("block_manager.availability.".((string)$_smarty_tpl->tpl_vars['device']->value));?>

                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>

</fieldset>
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[block_manager.update_location]",'cancel_action'=>"close",'but_meta'=>"cm-dialog-closer",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
</div>
</form>
<!--container_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
