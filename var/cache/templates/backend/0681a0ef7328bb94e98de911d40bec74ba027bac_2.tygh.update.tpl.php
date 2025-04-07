<?php
/* Smarty version 4.3.0, created on 2025-04-07 11:30:42
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\tabs\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67f38d32f1d9a6_54460317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0681a0ef7328bb94e98de911d40bec74ba027bac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\tabs\\update.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:views/block_manager/render/block.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_67f38d32f1d9a6_54460317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','status','name','show_tab_in_popup','block','select_block','select_block','global_status','active','disabled','disable_for','enable_for'));
$_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['tab_data']->value ? $_smarty_tpl->tpl_vars['tab_data']->value['tab_id'] : 0);
$_smarty_tpl->_assignInScope('available_in_popup', (($tmp = $_smarty_tpl->tpl_vars['tab_data']->value['available_in_popup'] ?? null)===null||$tmp==='' ? true ?? null : $tmp));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/block_manager.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('html_id', "tab_".((string)$_smarty_tpl->tpl_vars['id']->value));
$_smarty_tpl->_assignInScope('tabs_count', $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value && $_smarty_tpl->tpl_vars['id']->value > 0 ? 2 : 1);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    var html_id = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
";
    var BlockManager = new BlockManager_Class();
    
    
    (function(_, $) {
        $(document).ready(function() {
            var is_manage_blocks = true;
            var result_id = 'ajax_update_block_' + html_id;

            BlockManager.initBlockManagerActions(is_manage_blocks, result_id);
        });

    }(Tygh, Tygh.$));
    
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" name="update_product_tab_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class=" form-horizontal">
<div id="content_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="tab_data[tab_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="result_ids" value="content_group_tab_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
        <ul class="nav nav-tabs">
            <li id="general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "block_general_".((string)$_smarty_tpl->tpl_vars['html_id']->value)) {?> active<?php }?>">
                <a><?php echo $_smarty_tpl->__("general");?>
</a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value && $_smarty_tpl->tpl_vars['id']->value > 0) {?>
                <li id="tab_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "block_status_".((string)$_smarty_tpl->tpl_vars['html_id']->value)) {?> active<?php }?>">
                    <a><?php echo $_smarty_tpl->__("status");?>
</a>
                </li>
            <?php }?>
        </ul>
    </div>

    <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="content_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <fieldset>
                <div class="control-group">
                    <label class="cm-required control-label" for="elm_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <input type="text" name="tab_data[name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="elm_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="18" />
                    </div>
                </div>

                <?php if (!$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"tab_data[status]",'id'=>"elm_tab_data_".((string)$_smarty_tpl->tpl_vars['html_id']->value),'obj'=>$_smarty_tpl->tpl_vars['tab_data']->value), 0, false);
?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['available_in_popup']->value) {?>
                    <div class="control-group">
                        <label for="elm_show_in_popup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("show_tab_in_popup");?>
:</label>
                        <div class="controls">
                            <input type="hidden" name="tab_data[show_in_popup]" value="N" />
                            <input type="checkbox" name="tab_data[show_in_popup]" id="elm_show_in_popup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['tab_data']->value['show_in_popup'] == "Y") {?>checked="checked"<?php }?> value="Y">
                        </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['tab_data']->value['is_primary'] !== 'Y' && fn_check_view_permissions("block_manager.update_block")) {?>
                    <div class="control-group">
                        <label for="elm_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required control-label"><?php echo $_smarty_tpl->__("block");?>
:</label>
                        <div class="controls clearfix help-inline-wrap">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('act'=>"general",'id'=>"select_block_".((string)$_smarty_tpl->tpl_vars['html_id']->value),'text'=>$_smarty_tpl->__("select_block"),'link_text'=>$_smarty_tpl->__("select_block"),'href'=>"block_manager.block_selection?extra_id=".((string)$_smarty_tpl->tpl_vars['tab_data']->value['tab_id'])."&on_product_tabs=1",'action'=>"block_manager.block_selection",'opener_ajax_class'=>"cm-ajax cm-ajax-force",'content'=>'','meta'=>"pull-left"), 0, false);
?>
                            <br><br>
                            <div id="ajax_update_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="block_data[block_id]" id="elm_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['tab_data']->value['block_id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                                <?php if ($_smarty_tpl->tpl_vars['tab_data']->value['block_id'] > 0) {?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_data'=>$_smarty_tpl->tpl_vars['block_data']->value,'external_render'=>true,'external_id'=>$_smarty_tpl->tpl_vars['html_id']->value), 0, false);
?>
                                <?php }?>
                            <!--ajax_update_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                        </div>
                    </div>
                <?php }?>
            </fieldset>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value && $_smarty_tpl->tpl_vars['id']->value > 0) {?>
            <div id="content_tab_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" >
                <fieldset>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("global_status");?>
:</label>
                        <div class="controls">
                            <label class="radio text-value"><?php if ($_smarty_tpl->tpl_vars['tab_data']->value['status'] == 'A') {
echo $_smarty_tpl->__("active");
} else {
echo $_smarty_tpl->__("disabled");
}?></label>
                        </div>
                    </div>
                    <input type="hidden" class="cm-no-hide-input" name="snapping_data[object_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
" />
                    <div class="control-group">
                        <label class="control-label"><?php if ($_smarty_tpl->tpl_vars['tab_data']->value['status'] == 'A') {
echo $_smarty_tpl->__("disable_for");
} else {
echo $_smarty_tpl->__("enable_for");
}?>:</label>
                        <div class="controls">
                            <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker'],'data_id'=>"tab_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_product_ids",'input_name'=>"tab_data[product_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['tab_data']->value['product_ids'],'view_mode'=>"links",'params_array'=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']),$_smarty_tpl);?>

                        </div>
                    </div>
                </fieldset>
            <!--content_tab_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
    </div>

<!--content_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[tabs.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
</div>
</form>
<?php }
}
