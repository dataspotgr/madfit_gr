<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:27:29
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\taxes\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd5b31603819_95293575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e48dec90c30cc4bdf4c48061be582b7cad6cd2d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\taxes\\update.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_67dd5b31603819_95293575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','regnumber','tt_views_taxes_update_regnumber','priority','rates_depend_on','shipping_address','billing_address','price_includes_tax','rate_area','rate_value','type','rate_area','rate_value','type','absolute','percent','new_tax'));
if ($_smarty_tpl->tpl_vars['tax']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['tax']->value['tax_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" method="post" name="tax_form" class="form-horizontal form-edit <?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">
<input type="hidden" name="tax_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="destination_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

<div id="content_general">
<fieldset>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"taxes:general_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"taxes:general_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="control-group">
        <label for="elm_tax" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" name="tax_data[tax]" id="elm_tax" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large main-input" />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_regnumber"><?php echo $_smarty_tpl->__("regnumber");?>
:</label>
        <div class="controls">
            <input type="text" name="tax_data[regnumber]" id="elm_regnumber" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['regnumber'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_taxes_update_regnumber");?>
</p>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_priority"><?php echo $_smarty_tpl->__("priority");?>
:</label>
        <div class="controls">
            <input type="text" name="tax_data[priority]" id="elm_priority" size="5" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['priority'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
        </div>
    </div>
    
    <div class="control-group">
        <label for="elm_address_type" class="control-label cm-required"><?php echo $_smarty_tpl->__("rates_depend_on");?>
:</label>
        <div class="controls">
        <select name="tax_data[address_type]" id="elm_address_type">
            <option value="S" <?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type'] == "S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("shipping_address");?>
</option>
            <option value="B" <?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type'] == "B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("billing_address");?>
</option>
        </select>
        </div>
    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"tax_data[status]",'id'=>"elm_tax_data",'obj'=>$_smarty_tpl->tpl_vars['tax']->value), 0, false);
?>
    
    <div class="control-group">
        <label class="control-label" for="elm_price_includes_tax"><?php echo $_smarty_tpl->__("price_includes_tax");?>
:</label>
        <div class="controls">
            <input type="hidden" name="tax_data[price_includes_tax]" value="N" />
            <input type="checkbox" name="tax_data[price_includes_tax]" id="elm_price_includes_tax" value="Y" <?php if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax'] == "Y") {?>checked="checked"<?php }?> />
        </div>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"taxes:general_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</fieldset>
<!-- id="content_general" --></div>

<div id="content_tax_rates">

<div class="table-responsive-wrapper">
    <table class="table table-middle table--relative table-responsive">
    <thead>
    <tr>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"taxes:rates_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"taxes:rates_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <th><?php echo $_smarty_tpl->__("rate_area");?>
</th>
        <th><?php echo $_smarty_tpl->__("rate_value");?>
</th>
        <th><?php echo $_smarty_tpl->__("type");?>
</th>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"taxes:rates_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinations']->value, 'destination');
$_smarty_tpl->tpl_vars['destination']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('d_id', $_smarty_tpl->tpl_vars['destination']->value['destination_id']);?>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['destination']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>cm-row-status-d shipping-rate-area-d<?php }?>">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"taxes:rates_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"taxes:rates_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <td data-th="<?php echo $_smarty_tpl->__("rate_area");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td data-th="<?php echo $_smarty_tpl->__("rate_value");?>
">
            <input type="hidden" name="tax_data[rates][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['d_id']->value, ENT_QUOTES, 'UTF-8');?>
][rate_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['d_id']->value]['rate_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="text" name="tax_data[rates][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['d_id']->value, ENT_QUOTES, 'UTF-8');?>
][rate_value]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['d_id']->value]['rate_value'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" <?php if ($_smarty_tpl->tpl_vars['destination']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>disabled<?php }?>/></td>
        <td data-th="<?php echo $_smarty_tpl->__("type");?>
">
            <select name="tax_data[rates][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['d_id']->value, ENT_QUOTES, 'UTF-8');?>
][rate_type]" <?php if ($_smarty_tpl->tpl_vars['destination']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>disabled<?php }?>>
                <option value="F" <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['d_id']->value]['rate_type'] == "F") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</option>
                <option value="P" <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['d_id']->value]['rate_type'] == "P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
            </select>
        </td>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"taxes:rates_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<!-- id="content_tax_rates" --></div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"taxes:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"taxes:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"taxes:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[taxes.update]",'but_role'=>"submit-link",'but_target_form'=>"tax_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

</form>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"taxes:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"taxes:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"taxes:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'track'=>true,'active_tab'=>$_REQUEST['selected_section']), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['tax']->value['tax'] : $_smarty_tpl->__("new_tax"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
