<?php
/* Smarty version 4.3.0, created on 2025-03-26 02:36:49
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\pickers\profile_fields\picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3cab1496639_92238712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'add0dcd21e707ac12e012b05beef068fd07c98dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\pickers\\profile_fields\\picker.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:pickers/profile_fields/js.tpl' => 2,
  ),
),false)) {
function content_67e3cab1496639_92238712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.explode.php','function'=>'smarty_modifier_explode',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_profile_fields','add_profile_fields','id','description','required','no_items'));
$_smarty_tpl->_assignInScope('rnd', rand());
$_smarty_tpl->_assignInScope('data_id', ((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value));
$_smarty_tpl->_assignInScope('view_mode', (($tmp = $_smarty_tpl->tpl_vars['view_mode']->value ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp));?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value && !is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('item_ids', smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['item_ids']->value));
}?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>
    <div class="clearfix">
        <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
            <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="buttons-container pull-right"><?php }
if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>[<?php }?>
            <?php $_smarty_tpl->_assignInScope('exclude_names', (($tmp = $_smarty_tpl->tpl_vars['exclude_names']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('include_names', (($tmp = $_smarty_tpl->tpl_vars['include_names']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('exclude_types', (($tmp = $_smarty_tpl->tpl_vars['exclude_types']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
            <?php ob_start();
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['exclude_names']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
ob_start();
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['include_names']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
ob_start();
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['exclude_types']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("profile_fields.picker?section=".((string)$_smarty_tpl->tpl_vars['section']->value)."&exclude_names=".$_prefixVariable1."&include_names=".$_prefixVariable2."&exclude_types=".$_prefixVariable3."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)),'but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_profile_fields") ?? null : $tmp),'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"btn cm-dialog-opener",'but_icon'=>"icon-plus"), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>]<?php }
if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
        <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_profile_fields") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>
<?php }?>

<input id="pf_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" />
<div class="clearfix"></div>
<div class="table-responsive-wrapper">
    <table class="table table-middle table--relative table-responsive">
        <thead>
            <tr>
                <td width="1%"></td>
                <th width="15%"><?php echo $_smarty_tpl->__("id");?>
</th>
                <th width="60%"><?php echo $_smarty_tpl->__("description");?>
</th>
                <th width="15%" <?php if ($_smarty_tpl->tpl_vars['adjust_requireability']->value === false) {?>class="hidden"<?php }?>><?php echo $_smarty_tpl->__("required");?>
</th>
                <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?><th>&nbsp;</th><?php }?>
            </tr>
        </thead>
        <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }
if ($_smarty_tpl->tpl_vars['sortable']->value) {?> data-cm-sortable-profile-fields-picker-container="true" data-ca-sortable-item-class="profile-field-picker__sortable-row" data-ca-data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/profile_fields/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."field_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'description'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."description".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'clone'=>true), 0, false);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'field_id');
$_smarty_tpl->tpl_vars['field_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_id']->value) {
$_smarty_tpl->tpl_vars['field_id']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('profile_field', fn_get_profile_field($_smarty_tpl->tpl_vars['field_id']->value));?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/profile_fields/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field_id'=>$_smarty_tpl->tpl_vars['field_id']->value,'field_name'=>$_smarty_tpl->tpl_vars['profile_field']->value['field_name'],'description'=>$_smarty_tpl->tpl_vars['profile_field']->value['description'],'required'=>$_smarty_tpl->tpl_vars['profile_field']->value['checkout_required'],'disable_required'=>$_smarty_tpl->tpl_vars['disable_required']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
        <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <tr>
            <td colspan="<?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>5<?php } else { ?>4<?php }?>" data-th="&nbsp;" class="table-responsive__td--hide-th-mobile"><p class="no-items"><?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>
</p></td>
        </tr>
        </tbody>
    </table>
</div>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/pickers/profile_fields.js"),$_smarty_tpl);?>

<?php }
}
