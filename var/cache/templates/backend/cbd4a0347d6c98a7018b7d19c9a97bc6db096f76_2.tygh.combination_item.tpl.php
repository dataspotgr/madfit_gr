<?php
/* Smarty version 4.3.0, created on 2025-03-24 02:16:24
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\views\product_variations\components\combination_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e122e80b36c2_62789692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbd4a0347d6c98a7018b7d19c9a97bc6db096f76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\combination_item.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e122e80b36c2_62789692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','name','product_variations.mark_main_product','sku','price','quantity'));
?>
<tr
    class="cm-variations-generator__parent-combination-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['parent_combination_id'], ENT_QUOTES, 'UTF-8');?>
 cm-variations-generator__combination-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
 cm-variations-generator__combination-row"
    data-ca-combination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-parent-combination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['parent_combination_id'], ENT_QUOTES, 'UTF-8');?>
"
>
    <td width="40">
        <input type="hidden" value="0" name="combinations_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][active]" />
        <input type="checkbox"
            value="1"
            name="combinations_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][active]"
            <?php if ($_smarty_tpl->tpl_vars['combination']->value['active']) {?>checked="checked" <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['combination']->value['linked'] || $_smarty_tpl->tpl_vars['combinations_count']->value === 1) {?>disabled="disabled" <?php }?>
            class="cm-item cm-variations-generator__combination-activity-checbox"
        />
        <?php if ($_smarty_tpl->tpl_vars['combination']->value['linked'] || $_smarty_tpl->tpl_vars['combinations_count']->value === 1) {?>
            <input type="hidden" value="1" name="combinations_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][active]" />
        <?php }?>
    </td>
    <td width="40">
        <?php if (!$_smarty_tpl->tpl_vars['combination']->value['parent_combination_id'] && $_smarty_tpl->tpl_vars['combination']->value['has_children']) {?>
            <button alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="sw_product_variations_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
" aaaid="on_variations" class="cm-combinations cm-product-variations__collapse product-variations__collapse-btn product-variations__collapse-btn--collapsed" type="button">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_down",'data'=>array("data-ca-switch-id"=>"product_variations_group_".((string)$_smarty_tpl->tpl_vars['combination']->value['combination_id']))),$_smarty_tpl);?>

                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_right",'class'=>"hidden",'data'=>array("data-ca-switch-id"=>"product_variations_group_".((string)$_smarty_tpl->tpl_vars['combination']->value['combination_id']))),$_smarty_tpl);?>

            </button>
        <?php } else { ?>
            &nbsp;
        <?php }?>
    </td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_id'] == $_smarty_tpl->tpl_vars['combination']->value['product_id']) {?>
            <strong>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combination']->value['variant_names'], 'variant_name', true);
$_smarty_tpl->tpl_vars['variant_name']->iteration = 0;
$_smarty_tpl->tpl_vars['variant_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->do_else = false;
$_smarty_tpl->tpl_vars['variant_name']->iteration++;
$_smarty_tpl->tpl_vars['variant_name']->last = $_smarty_tpl->tpl_vars['variant_name']->iteration === $_smarty_tpl->tpl_vars['variant_name']->total;
$__foreach_variant_name_4_saved = $_smarty_tpl->tpl_vars['variant_name'];
?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['variant_name']->last) {?> • <?php }?>
        <?php
$_smarty_tpl->tpl_vars['variant_name'] = $__foreach_variant_name_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_id'] == $_smarty_tpl->tpl_vars['combination']->value['product_id']) {?>
            </strong>
        <?php }?>
    </td>
    <td <?php if (!$_smarty_tpl->tpl_vars['combination']->value['parent_combination_id']) {?>data-th="<?php echo $_smarty_tpl->__("name");?>
"<?php }?>>
        <?php if (!$_smarty_tpl->tpl_vars['combination']->value['parent_combination_id']) {?>
            <input type="text" name="combinations_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][product_name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['product_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden" />

            <?php if (!$_smarty_tpl->tpl_vars['combination']->value['exists'] || !$_smarty_tpl->tpl_vars['combination']->value['linked']) {?>
                <input type="hidden" class="cm-variations-generator__combination-set-as-default-input" name="combinations_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][set_as_default]" value="1"/>
            <?php }?>
        <?php } elseif (!$_smarty_tpl->tpl_vars['combination']->value['exists'] && $_smarty_tpl->tpl_vars['combination']->value['active'] && !$_smarty_tpl->tpl_vars['combination']->value['parent_combination_exists']) {?>
            <input type="hidden" class="cm-variations-generator__combination-set-as-default-input" name="combinations_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][set_as_default]" value="1" id="combination_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
_set_as_default_input" disabled="disabled" />
            <a hre="#" data-ca-input-selector="#combination_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
_set_as_default_input" class="hidden-tools cm-variations-generator__combination-set-default-link"><?php echo $_smarty_tpl->__("product_variations.mark_main_product");?>
</a>
        <?php }?>
    </td>

    <td width="13%" data-th="<?php echo $_smarty_tpl->__("sku");?>
">
        <input type="text" name="combinations_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][product_code]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden" />
    </td>

    <td width="13%" data-th="<?php echo $_smarty_tpl->__("price");?>
">
        <input type="text" name="combinations_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][product_price]" value="<?php echo htmlspecialchars((string) fn_format_price($_smarty_tpl->tpl_vars['combination']->value['product_price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden"/>
    </td>
    <td width="9%" data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
        <input type="text" name="combinations_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][product_amount]" size="6" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['product_amount'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden cm-value-decimal" />
    </td>
</tr>
<?php }
}
