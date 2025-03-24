<?php
/* Smarty version 4.3.0, created on 2025-03-24 05:21:01
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\states\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e14e2d5c6529_16149421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a683e918ccbd482fbfc9512c87af4403f4b88277' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\states\\manage.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:buttons/search.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_67e14e2d5c6529_16149421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('code','state','status','code','state','tools','delete','status','no_data','new_states','general','code','state','add_state','add_state','admin_search_title','country','states'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="states_form" name="states_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">
<input type="hidden" name="country_code" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['country'], ENT_QUOTES, 'UTF-8');?>
" />
<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('state_statuses', fn_get_default_statuses('',false));
$_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("states","update_status","admin","POST",array("table"=>"states")) && fn_check_permissions("states","m_delete","admin","POST",array("table"=>"states")));
$_smarty_tpl->_assignInScope('has_permisson_add', fn_check_permissions("states","update","admin","POST"));?>

<?php if ($_smarty_tpl->tpl_vars['states']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "states_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive state-table<?php if (!$_smarty_tpl->tpl_vars['has_permission']->value) {?> cm-hide-inputs<?php }?>">
            <thead 
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="6%" class="mobile-hide">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? $_smarty_tpl->tpl_vars['state_statuses']->value : array()), 0, false);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="10%"><?php echo $_smarty_tpl->__("code");?>
</th>
                <th><?php echo $_smarty_tpl->__("state");?>
</th>
                <th width="5%">&nbsp;</th>
                <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value, 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
            <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['state']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <td width="6%" class="mobile-hide">
                    <input type="checkbox" name="state_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['state']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" /></td>
                <td width="10%" class="left nowrap row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
">
                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span>
                </td>
                <td data-th="<?php echo $_smarty_tpl->__("state");?>
">
                    <input type="text" name="states[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state_id'], ENT_QUOTES, 'UTF-8');?>
][state]" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
" class="input-hidden"/>
                </td>
                <td width="5%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"states.delete?state_id=".((string)$_smarty_tpl->tpl_vars['state']->value['state_id'])."&country_code=".((string)$_smarty_tpl->tpl_vars['search']->value['country']),'method'=>"POST"), true);?>
</li>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                    </div>
                </td>
                <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php $_smarty_tpl->_assignInScope('has_permission_update_status', fn_check_permissions("tools","update_status","admin","GET",array("table"=>"states")));?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"states",'id'=>$_smarty_tpl->tpl_vars['state']->value['state_id'],'status'=>$_smarty_tpl->tpl_vars['state']->value['status'],'hidden'=>'','object_id_name'=>"state_id",'table'=>"states",'non_editable'=>!$_smarty_tpl->tpl_vars['has_permission_update_status']->value), 0, true);
?>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"states_form",'object'=>"states",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'states_table'),'has_permission'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_states_form" class="form-horizontal form-edit">
    <input type="hidden" name="state_data[country_code]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['country_code'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="country_code" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['country_code'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="state_id" value="0" />

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['code']->value == $_smarty_tpl->tpl_vars['search']->value['country_code']) {?>
            <?php ob_start();
echo $_smarty_tpl->__("new_states");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('title', $_prefixVariable1." (".((string)$_smarty_tpl->tpl_vars['country']->value).")");?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div class="cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="tab_new_states" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content">
    <fieldset>
        <div class="control-group">
            <label class="cm-required control-label" for="elm_state_code"><?php echo $_smarty_tpl->__("code");?>
:</label>
            <div class="controls">
            <input type="text" id="elm_state_code" name="state_data[code]" size="8" value="" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_state_name"><?php echo $_smarty_tpl->__("state");?>
:</label>
            <div class="controls">
            <input type="text" id="elm_state_name" name="state_data[state]" size="55" value="" />
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"state_data[status]",'id'=>"elm_state_status"), 0, false);
?>
    </fieldset>
    </div>

    <div class="buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('create'=>true,'but_name'=>"dispatch[states.update]",'cancel_action'=>"close"), 0, false);
?>
    </div>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"states:manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"states:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"states:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


    <?php if ($_smarty_tpl->tpl_vars['states']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[states.m_update]",'but_role'=>"action",'but_target_form'=>"states_form",'but_meta'=>"cm-submit nav__actions-btn-save"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"new_state",'action'=>"states.add",'text'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'title'=>$_smarty_tpl->__("add_state"),'link_text'=>$_smarty_tpl->__("add_state"),'act'=>"general",'icon'=>"icon-plus",'link_class'=>"btn-primary nav__actions-btn-primary"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="states_filter_form" method="get">
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("country");?>
:</label>
        <select name="country_code">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['code']->value == $_smarty_tpl->tpl_vars['search']->value['country_code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
</div>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[states.manage]",'method'=>"GET"), 0, false);
?>
</form>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("states"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->tpl_vars['has_permisson_add']->value ? $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons') : '','buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'select_languages'=>true), 0, false);
}
}
