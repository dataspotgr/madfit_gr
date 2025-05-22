<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:22:57
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\shippings\components\picker\rates\picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ebf1949009_78597270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '343c572db83f9b34584d8aae747c6009ac301223' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\shippings\\components\\picker\\rates\\picker.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/shippings/components/picker/rates/item.tpl' => 1,
    'tygh:views/shippings/components/picker/rates/item_selection.tpl' => 1,
  ),
),false)) {
function content_6811ebf1949009_78597270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.to_json.php','function'=>'smarty_modifier_to_json',),));
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search','add_all_destinations'));
$_smarty_tpl->_assignInScope('picker_id', (($tmp = $_smarty_tpl->tpl_vars['picker_id']->value ?? null)===null||$tmp==='' ? uniqid() ?? null : $tmp));
$_smarty_tpl->_assignInScope('multiple', (($tmp = $_smarty_tpl->tpl_vars['multiple']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_ids', array_filter((($tmp = $_smarty_tpl->tpl_vars['item_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)));
$_smarty_tpl->_assignInScope('view_only', (($tmp = $_smarty_tpl->tpl_vars['view_only']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<div class="object-picker__simple object-picker__simple--shipping-rates">
    <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
            class="cm-object-picker object-picker__select-native"
            data-ca-object-picker-object-type="shipping-rates"
            data-ca-object-picker-escape-html="false"
            data-ca-object-picker-ajax-url="<?php echo htmlspecialchars((string) fn_url("destinations.selector?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping_id']->value)), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-ajax-delay="250"
            data-ca-object-picker-template-result-selector="#shipping_rates_picker_result_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-selector="#shipping_rates_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-load-selector="#shipping_rates_picker_selection_load_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['view_mode']->value === "external") {?>
                data-ca-object-picker-external-container-selector="#shipping_rates_picker_external_selected_rates_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            data-ca-object-picker-placeholder="<?php echo $_smarty_tpl->__("type_to_search");?>
"
            data-ca-object-picker-autofocus="false"
    >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'item_id');
$_smarty_tpl->tpl_vars['item_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
        <a class="btn cm-ajax shipping-rate__add-all" data-ca-target-id="dashboard_shipping_rate" href="<?php echo htmlspecialchars((string) fn_url("shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping_id']->value)."&selected_section=shipping_charges&add_all_destinations"), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("add_all_destinations");?>

        </a>
    <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value === "external") {?>
    <div class="object-picker__selected-external-container">
        <div id="shipping_rates_picker_external_selected_rates_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="object-picker__selected-external object-picker__selected-external--shipping-rates">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'item_id');
$_smarty_tpl->tpl_vars['item_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->do_else = false;
?>
                <div class="object-picker__skeleton object-picker__skeleton--shipping-rates" data-data="<?php echo htmlspecialchars((string) smarty_modifier_to_json(array("id"=>$_smarty_tpl->tpl_vars['item_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="object-picker__skeleton object-picker__skeleton--shipping-rates">...</div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
 type="text/template" id="shipping_rates_picker_result_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result object-picker__result--shipping-rates">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/shippings/components/picker/rates/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="shipping_rates_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-external object-picker__selection-external--shipping-rates cm-object-picker-object">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/shippings/components/picker/rates/item_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="shipping_rates_picker_selection_load_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton object-picker__skeleton--shipping-rates">...</div>
<?php echo '</script'; ?>
>
<?php }
}
