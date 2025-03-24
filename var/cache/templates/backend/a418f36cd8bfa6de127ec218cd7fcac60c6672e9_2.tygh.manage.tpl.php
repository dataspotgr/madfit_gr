<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:27:24
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\taxes\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd5b2cd36fa3_44799526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a418f36cd8bfa6de127ec218cd7fcac60c6672e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\taxes\\manage.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_67dd5b2cd36fa3_44799526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','regnumber','priority','rates_depend_on','price_includes_tax','status','name','regnumber','priority','rates_depend_on','shipping_address','billing_address','price_includes_tax','tools','edit','delete','status','no_data','add_tax','add_tax','taxes'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="taxes_form" name="taxes_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

<?php $_smarty_tpl->_assignInScope('tax_statuses', fn_get_default_statuses('',false));
$_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("taxes","update","admin","POST",array("table"=>"states")) && fn_check_permissions("states","m_delete","admin","POST",array("table"=>"states")));?>

<?php if ($_smarty_tpl->tpl_vars['taxes']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "taxes_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection" id="taxes_content">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="6%" class="mobile-hide">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? $_smarty_tpl->tpl_vars['tax_statuses']->value : ''), 0, false);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="15%"><?php echo $_smarty_tpl->__("name");?>
</th>
                <th width="10%"><?php echo $_smarty_tpl->__("regnumber");?>
</th>
                <th width="8%"><?php echo $_smarty_tpl->__("priority");?>
</th>
                <th width="15%"><?php echo $_smarty_tpl->__("rates_depend_on");?>
</th>
                <th width="10%" class="center"><?php echo $_smarty_tpl->__("price_includes_tax");?>
</th>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"taxes:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"taxes:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"taxes:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <th width="8%">&nbsp;</th>
                <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxes']->value, 'tax');
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
            <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['tax']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target" 
                data-ct-tax-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <td class="center mobile-hide" width="6%">
                    <input type="checkbox" name="tax_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['tax']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                </td>
                <td width="15%" class="nowrap" data-ct-tax-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                    <a href="<?php echo htmlspecialchars((string) fn_url("taxes.update?tax_id=".((string)$_smarty_tpl->tpl_vars['tax']->value['tax_id'])), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
</a>
                </td>
                <td width="10%" data-th="<?php echo $_smarty_tpl->__("regnumber");?>
">
                    <input type="text" name="tax_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
][regnumber]" size="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['regnumber'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini input-hidden" /></td>
                <td width="8%" class="center" data-th="<?php echo $_smarty_tpl->__("priority");?>
">
                    <input type="text" name="tax_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
][priority]" size="3" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['priority'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden" /></td>
                <td width="15%" data-th="<?php echo $_smarty_tpl->__("rates_depend_on");?>
"><select name="tax_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
][address_type]">
                        <option value="S" <?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type'] == "S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("shipping_address");?>
</option>
                        <option value="B" <?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type'] == "B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("billing_address");?>
</option>
                    </select>
                </td>
                <td width="10%" class="center" data-th="<?php echo $_smarty_tpl->__("price_includes_tax");?>
">
                    <input type="hidden" name="tax_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
][price_includes_tax]" value="N" />
                    <input type="checkbox" name="tax_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
][price_includes_tax]" value="Y" <?php if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax'] == "Y") {?>checked="checked"<?php }?> />
                </td>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"taxes:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"taxes:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"taxes:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <td width="8%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"taxes:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"taxes:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"taxes.update?tax_id=".((string)$_smarty_tpl->tpl_vars['tax']->value['tax_id'])), true);?>
</li>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"taxes.delete?tax_id=".((string)$_smarty_tpl->tpl_vars['tax']->value['tax_id']),'method'=>"POST"), true);?>
</li>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"taxes:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                    </div>
                </td>
                <td width="10%" class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php $_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("tools","update_status","admin","GET",array("table"=>"taxes")));?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"taxes",'id'=>$_smarty_tpl->tpl_vars['tax']->value['tax_id'],'status'=>$_smarty_tpl->tpl_vars['tax']->value['status'],'object_id_name'=>"tax_id",'table'=>"taxes",'non_editable'=>!$_smarty_tpl->tpl_vars['has_permission']->value), 0, true);
?>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <!--taxes_content--></div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"taxes_form",'object'=>"taxes",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'taxes_table'),'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['taxes']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"taxes:manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"taxes:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"taxes:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['taxes']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[taxes.m_update]",'but_role'=>"action",'but_target_form'=>"taxes_form",'but_meta'=>"cm-submit nav__actions-btn-save"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"taxes.add",'tool_override_meta'=>"btn btn-primary nav__actions-btn-primary",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->__("add_tax"),'link_text'=>$_smarty_tpl->__("add_tax"),'icon'=>"icon-plus"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("taxes"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_languages'=>true), 0, false);
}
}
