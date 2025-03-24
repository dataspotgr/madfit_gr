<?php
/* Smarty version 4.3.0, created on 2025-03-24 05:20:54
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\countries\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e14e26cba2e6_95726123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd7a908e2cc51f35f83dfb755f0310966adb867' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\countries\\manage.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_67e14e26cba2e6_95726123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.component.php','function'=>'smarty_block_component',),));
\Tygh\Languages\Helper::preloadLangVars(array('code','code','code','country','region','status','code','code','code','country','region','status','countries'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="countries_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

<?php $_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("countries","m_activate","admin","POST",array("table"=>"countries")) && fn_check_permissions("countries","m_disable","admin","POST",array("table"=>"countries")));
$_smarty_tpl->_assignInScope('country_statuses', fn_get_default_statuses('',false));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>

<div data-ca-longtap>
    <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"countries:context_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"countries:context_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"context_menu.context_menu",'object'=>"countries",'form'=>"countries_form"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>"countries",'form'=>"countries_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>"countries",'form'=>"countries_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"countries:context_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

    <div class="table-responsive-wrapper longtap-selection">
        <table width="100%" class="table table-middle table--relative table-responsive">
        <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
            <tr>
                <th width="6%" class="left mobile-hide">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? ($_smarty_tpl->tpl_vars['country_statuses']->value) : ''), 0, false);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="10%" class="center"><?php echo $_smarty_tpl->__("code");?>
</th>
                <th width="10%" class="center"><?php echo $_smarty_tpl->__("code");?>
&nbsp;A3</th>
                <th width="10%" class="center"><?php echo $_smarty_tpl->__("code");?>
&nbsp;N3</th>
                <th><?php echo $_smarty_tpl->__("country");?>
</th>
                <th width="10%" class="center"><?php echo $_smarty_tpl->__("region");?>
</th>
                <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
        <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['country']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
            <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                data-ca-longtap-action="setCheckBox"
                data-ca-longtap-target="input.cm-item"
                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        >
        <td width="6%" class="center">
                                <input type="checkbox" name="countries[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['country']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
            </td>  
            <td width="10%" class="center row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td width="10%" class="center row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
&nbsp;A3">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['code_A3'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td width="10%" class="center row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
&nbsp;N3">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['code_N3'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td data-th="<?php echo $_smarty_tpl->__("country");?>
"> 
                <input type="text" name="country_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>
][country]" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['country'], ENT_QUOTES, 'UTF-8');?>
" class="span4 input-hidden" />
            </td>
            <td width="10%" class="center row-status" data-th="<?php echo $_smarty_tpl->__("region");?>
">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['region'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                <?php $_smarty_tpl->_assignInScope('has_permission_update_status', fn_check_permissions("tools","update_status","admin","GET",array("table"=>"countries")));?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"countries",'id'=>$_smarty_tpl->tpl_vars['country']->value['code'],'status'=>$_smarty_tpl->tpl_vars['country']->value['status'],'hidden'=>'','object_id_name'=>"code",'table'=>"countries",'non_editable'=>!$_smarty_tpl->tpl_vars['has_permission_update_status']->value), 0, true);
?>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);
$_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[countries.m_update]",'but_role'=>"submit-link",'but_target_form'=>"countries_form",'but_meta'=>" nav__actions-btn-save"), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
 
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("countries"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_languages'=>true), 0, false);
}
}
