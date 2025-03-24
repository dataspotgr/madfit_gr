<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:28:49
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\destinations\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd5b810654b4_29299821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8e6d3ccd49c43adb23f32594cf9384ef9ed0c0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\destinations\\manage.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_67dd5b810654b4_29299821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','status','name','edit','delete','status','no_items','add_rate_area','add_rate_area','rate_areas'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="destinations_form" name="destinations_form" class="<?php if (fn_check_form_permissions('')) {?>cm-hide-inputs<?php }?>">

<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->_assignInScope('destination_statuses', fn_get_default_statuses('',false));
$_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("destinations","update_status","admin","POST",array("table"=>"destinations")) && fn_check_permissions("destinations","m_delete","admin","POST",array("table"=>"destinations")));?>

    <?php if ($_smarty_tpl->tpl_vars['destinations']->value) {?>
        <div class="table-responsive-wrapper longtap-selection" id="destination_contents">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "destinations_table", null, null);?>
                <table width="100%" class="table table-middle table--relative table-responsive">
                <thead 
                    data-ca-bulkedit-default-object="true"
                    data-ca-bulkedit-component="defaultObject"
                >
                <tr>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"destinations:destinations_list_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"destinations:destinations_list_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <th width="6%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? ($_smarty_tpl->tpl_vars['destination_statuses']->value) : ''), 0, false);
?>

                            <input type="checkbox"
                                class="bulkedit-toggler hide"
                                data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                                data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th><?php echo $_smarty_tpl->__("name");?>
</th>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"destinations:destinations_list_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <th width="5%">&nbsp;</th>
                    <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
                </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinations']->value, 'destination');
$_smarty_tpl->tpl_vars['destination']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->do_else = false;
?>
                <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['destination']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target" 
                    <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                        data-ct-destination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-longtap-action="setCheckBox"
                        data-ca-longtap-target="input.cm-item"
                        data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                >
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"destinations:destinations_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"destinations:destinations_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <td width="6%" class="left" data-th="&nbsp;">
                            <input name="destination_ids[]"
                                type="checkbox"
                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
"
                                class="cm-item hide cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['destination']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                            />
                        </td>
                        <td data-ct-destination-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                        <a class="row-status link--monochrome"
                            href="<?php echo htmlspecialchars((string) fn_url("destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['destination']->value['destination_id'])), ENT_QUOTES, 'UTF-8');?>
"
                        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </td>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"destinations:destinations_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <td width="5%" class="nowrap" data-th="&nbsp;">
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"destinations:manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"destinations:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['destination']->value['destination_id'])), true);?>
</li>
                                <?php if ($_smarty_tpl->tpl_vars['destination']->value['destination_id'] != 1) {?>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"destinations.delete?destination_id=".((string)$_smarty_tpl->tpl_vars['destination']->value['destination_id']),'method'=>"POST"), true);?>
</li>
                                <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"destinations:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                        </div>
                    </td>
                    <td class="right" width="10%" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                        <?php $_smarty_tpl->_assignInScope('has_permission_update_status', fn_check_permissions("tools","update_status","admin","GET",array("table"=>"destinations")));?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"destinations",'id'=>$_smarty_tpl->tpl_vars['destination']->value['destination_id'],'status'=>$_smarty_tpl->tpl_vars['destination']->value['status'],'hidden'=>'','object_id_name'=>"destination_id",'table'=>"destinations",'non_editable'=>!$_smarty_tpl->tpl_vars['has_permission_update_status']->value), 0, true);
?>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"destinations_form",'object'=>"destinations",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'destinations_table'),'has_permission'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0, false);
?>
        <!--destination_contents--></div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
    <?php }?>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['destinations']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"destinations:action_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"destinations:action_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"destinations:action_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"destinations.add",'tool_override_meta'=>"btn btn-primary nav__actions-btn-primary",'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_rate_area"),'link_text'=>$_smarty_tpl->__("add_rate_area"),'icon'=>"icon-plus"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("rate_areas"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_languages'=>true), 0, false);
}
}
