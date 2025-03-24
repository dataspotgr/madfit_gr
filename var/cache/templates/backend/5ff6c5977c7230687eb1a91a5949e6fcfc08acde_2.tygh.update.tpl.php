<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:28:53
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\destinations\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd5b8559e0d8_64412223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ff6c5977c7230687eb1a91a5949e6fcfc08acde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\destinations\\update.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/localizations/components/select.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:common/double_selectboxes.tpl' => 2,
    'tygh:common/subheader.tpl' => 3,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_67dd5b8559e0d8_64412223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','add_in_all_realtime_shippings','countries','states','zipcodes','text_zipcodes_wildcards','cities','text_cities_wildcards','addresses','text_addresses_wildcards','new_rate_area'));
$_smarty_tpl->_assignInScope('id', 0);
if ($_smarty_tpl->tpl_vars['destination']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['destination']->value['destination_id']);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              enctype="multipart/form-data"
              method="post"
              name="destinations_form"
              class="form-horizontal form-edit <?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>"
        >
            <div id="content_detailed">
                <input type="hidden" name="destination_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"destinations:update_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"destinations:update_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="control-group">
                        <label for="elm_destination_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                        <div class="controls">
                            <input type="text"
                                   name="destination_data[destination]"
                                   id="elm_destination_name"
                                   size="25"
                                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
"
                                   class="input-large"
                            />
                        </div>
                    </div>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"destinations:update_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_name'=>"destination_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['destination']->value['localization']), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"destination_data[status]",'id'=>"elm_destination_status",'obj'=>$_smarty_tpl->tpl_vars['destination']->value), 0, false);
?>

                <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("add_in_all_realtime_shippings");?>
:</label>
                        <div class="controls">
                            <input type="checkbox" name="destination_data[add_in_all_realtime_shippings]" checked>
                        </div>
                    </div>
                <?php }?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("countries"),'first_name'=>"destination_data[countries]",'first_data'=>$_smarty_tpl->tpl_vars['destination_data']->value['countries'],'second_name'=>"all_countries",'second_data'=>$_smarty_tpl->tpl_vars['countries']->value,'class_name'=>"destination-countries"), 0, false);
?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("states"),'first_name'=>"destination_data[states]",'first_data'=>$_smarty_tpl->tpl_vars['destination_data']->value['states'],'second_name'=>"all_states",'second_data'=>$_smarty_tpl->tpl_vars['states']->value,'class_name'=>"destination-states"), 0, true);
?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("zipcodes")), 0, false);
?>
                <div class="table-wrapper">
                    <table width="100%">
                    <tr>
                        <td width="48%">
                            <textarea name="destination_data[zipcodes]"
                                      id="elm_destination_zipcodes"
                                      rows="8"
                                      class="input-full"
                            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_data']->value['zipcodes'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </td>
                        <td>&nbsp;</td>
                        <td width="48%"><?php echo $_smarty_tpl->__("text_zipcodes_wildcards");?>
</td>
                    </tr>
                    </table>
                </div>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("cities")), 0, true);
?>
                <div class="table-wrapper">
                    <table cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tr>
                        <td width="48%">
                            <textarea name="destination_data[cities]"
                                      id="elm_destination_cities"
                                      rows="8"
                                      class="input-full"
                            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_data']->value['cities'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </td>
                        <td>&nbsp;</td>
                        <td width="48%"><?php echo $_smarty_tpl->__("text_cities_wildcards");?>
</td>
                    </tr>
                    </table>
                </div>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("addresses")), 0, true);
?>
                <div class="table-wrapper">
                    <table cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tr>
                        <td width="48%">
                            <textarea name="destination_data[addresses]"
                                      id="elm_destination_cities"
                                      rows="8"
                                      class="input-full"
                            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_data']->value['addresses'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </td>
                        <td>&nbsp;</td>
                        <td width="48%"><?php echo $_smarty_tpl->__("text_addresses_wildcards");?>
</td>
                    </tr>
                    </table>
                </div>
            </div>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"destinations:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"destinations:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"destinations:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[destinations.update]",'but_target_form'=>"destinations_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        </form>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"destinations:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"destinations:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"destinations:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['destination']->value['destination'] : $_smarty_tpl->__("new_rate_area"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_languages'=>true), 0, false);
}
}
