<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:29:20
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\ds_boxnow\hooks\shipments\list_extra_links.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ed705aa205_39028740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e42f8cfc016308014760d61aca92218483897b88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\ds_boxnow\\hooks\\shipments\\list_extra_links.override.tpl',
      1 => 1746004884,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6811ed705aa205_39028740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('view','print_slip','boxnow_print_label','text_are_you_sure_to_cancel_boxnow','boxnow_cancel_shipment','delete'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shipments:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shipments:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("view"),'href'=>"shipments.details?shipment_id=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])), true);?>
</li>
    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("print_slip"),'class'=>"cm-new-window",'href'=>"shipments.packing_slip?shipment_ids[]=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])), true);?>
</li>
    <?php if (fn_ds_boxnow_boxnow_carrier($_smarty_tpl->tpl_vars['shipment']->value['shipment_id']) === "boxnow") {?>
        <?php $_smarty_tpl->_assignInScope('label_url', fn_url("ds_boxnow.get_label?shipment_id=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id']),"A"));?>
        <?php $_smarty_tpl->_assignInScope('cancel_url', fn_url("ds_boxnow.cancel_shipment?shipment_id=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id']),"A"));?>
        <li>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_url']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("boxnow_print_label");?>
</a>
        </li>
    
        <li>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cancel_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-confirm" data-ca-confirm-text="<?php echo $_smarty_tpl->__("text_are_you_sure_to_cancel_boxnow");?>
">
                <?php echo $_smarty_tpl->__("boxnow_cancel_shipment");?>

            </a>
        </li>
    <?php }?>
    <li class="divider"></li>
    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"shipments.delete?shipment_ids[]=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'method'=>"POST"), true);?>
</li>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shipments:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
