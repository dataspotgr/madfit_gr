<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:04:01
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6c21eed8b8_73171498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5659cdd107d85de73c54339c13fdb1a16b9e33dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\manage.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 2,
    'tygh:addons/advanced_import/views/import_presets/components/preset.tpl' => 2,
    'tygh:addons/advanced_import/views/import_presets/components/common_preset.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 2,
    'tygh:addons/advanced_import/views/import_presets/components/form.tpl' => 2,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_680b6c21eed8b8_73171498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.common_presets','name','advanced_import.last_launch','advanced_import.last_status','advanced_import.file','advanced_import.has_modifiers','advanced_import.your_presets','name','advanced_import.last_launch','advanced_import.last_status','advanced_import.file','advanced_import.has_modifiers','no_data','advanced_import.add_preset','advanced_import.add_preset','advanced_import.import_'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>
    <?php $_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('rev_common', "common_preset_contents");?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"import_presets:list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"import_presets:list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_content_common", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['common_presets']->value) {?>
                <?php $_smarty_tpl->_assignInScope('show_notification', true);?>
                <?php ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('context_menu_id', "context_menu_".$_prefixVariable1);?>

                <h4 class="subheader">
                    <?php echo $_smarty_tpl->__("advanced_import.common_presets");?>

                </h4>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "common_presets_table", null, null);?>
                    <div class="table-responsive-wrapper longtap-selection" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev_common']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <table width="100%" class="table table-middle table--relative table-responsive">
                            <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <th class="left import-preset__checker mobile-hide">
                                    <?php if (!$_smarty_tpl->tpl_vars['company_id']->value) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_check_all_shown'=>true,'elms_container'=>"#".((string)$_smarty_tpl->tpl_vars['context_menu_id']->value)), 0, false);
?>

                                        <input type="checkbox"
                                            class="bulkedit-toggler hide"
                                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                        />
                                    <?php }?>
                                </th>
                                <th class="import-preset__preset"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev_common']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>

                                <th class="import-preset__last-launch"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_import&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev_common']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("advanced_import.last_launch");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "last_import") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                                <th class="import-preset__last-status"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev_common']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("advanced_import.last_status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                                <th class="import-preset__file"><?php echo $_smarty_tpl->__("advanced_import.file");?>
</th>
                                <th class="import-preset__has-modifiers"><?php echo $_smarty_tpl->__("advanced_import.has_modifiers");?>
</th>
                                <th class="import-preset__run">&nbsp;</th>
                                <th class="import-preset__tools">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['common_presets']->value, 'preset');
$_smarty_tpl->tpl_vars['preset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['preset']->value) {
$_smarty_tpl->tpl_vars['preset']->do_else = false;
?>
                                <?php if (!$_smarty_tpl->tpl_vars['company_id']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('allowed_ext', array('csv','xml'));?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/preset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('allowed_ext'=>$_smarty_tpl->tpl_vars['allowed_ext']->value), 0, true);
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('allowed_ext', array($_smarty_tpl->tpl_vars['preset']->value['file_extension']));?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/common_preset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('allowed_ext'=>$_smarty_tpl->tpl_vars['allowed_ext']->value), 0, true);
?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev_common']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hook'=>"common_import_presets:context_menu",'id'=>$_smarty_tpl->tpl_vars['context_menu_id']->value,'form'=>"manage_common_import_presets_form",'object'=>"import_presets",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'common_presets_table'),'is_check_all_shown'=>true), 0, false);
?>

                <h4 class="subheader">
                    <?php echo $_smarty_tpl->__("advanced_import.your_presets");?>

                </h4>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wrapper_content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox_content_common'),'wrapper_extra_id'=>'','preffix'=>"common"), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_content_vendors", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['presets']->value) {?>
                <?php ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('context_menu_id', "context_menu_".$_prefixVariable2);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "vendor_presets_table", null, null);?>
                    <div class="table-responsive-wrapper longtap-selection">
                        <table width="100%" class="table table-middle table--relative table-responsive">
                            <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <th class="left import-preset__checker mobile-hide">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_check_all_shown'=>true), 0, true);
?>

                                    <input type="checkbox"
                                        class="bulkedit-toggler hide"
                                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                                <th class="import-preset__preset"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                                <th class="import-preset__last-launch"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_import&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("advanced_import.last_launch");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "last_import") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                                <th class="import-preset__last-status"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("advanced_import.last_status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                                <th class="import-preset__file"><?php echo $_smarty_tpl->__("advanced_import.file");?>
</th>
                                <th class="import-preset__has-modifiers"><?php echo $_smarty_tpl->__("advanced_import.has_modifiers");?>
</th>
                                <th class="import-preset__run">&nbsp;</th>
                                <th class="import-preset__tools">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['presets']->value, 'preset');
$_smarty_tpl->tpl_vars['preset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['preset']->value) {
$_smarty_tpl->tpl_vars['preset']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['company_id']->value === $_smarty_tpl->tpl_vars['preset']->value['company_id']) {?>
                                    <?php $_smarty_tpl->_assignInScope('allowed_ext', array("csv","xml"));?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('allowed_ext', array($_smarty_tpl->tpl_vars['preset']->value['file_extension']));?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/preset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'allowed_ext'=>$_smarty_tpl->tpl_vars['allowed_ext']->value), 0, true);
?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['context_menu_id']->value,'form'=>"manage_vendor_import_presets_form",'object'=>"import_presets",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'vendor_presets_table'),'is_check_all_shown'=>true), 0, true);
?>

                <div class="clearfix">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>$_REQUEST['content_id']), 0, true);
?>
                </div>
            <?php } else { ?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wrapper_content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox_content_vendors'),'wrapper_extra_id'=>'','preffix'=>"vendor"), 0, true);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"import_presets:list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"advanced_import:presets_manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"advanced_import:presets_manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"advanced_import:presets_manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items')), true);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"import_presets.add?object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value),'tool_override_meta'=>"btn btn-primary",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->__("advanced_import.add_preset"),'link_text'=>$_smarty_tpl->__("advanced_import.add_preset"),'icon'=>"icon-plus"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("advanced_import.import_".((string)$_smarty_tpl->tpl_vars['object_type']->value)),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popups');?>

<?php }
}
