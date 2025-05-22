<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:22:58
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\shippings\additional_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ebf28da197_07763972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '719d36bf2192e4d562e32228ce40e61524e8b554' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\shippings\\additional_settings.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/adaptive_object_selection.tpl' => 1,
  ),
),false)) {
function content_6811ebf28da197_07763972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('shipping.pricing','taxes','use_for_free_shipping','tt_views_shippings_update_use_for_free_shipping','customer_information','is_address_required','tt_views_shippings_update_is_address_required'));
?>
<div id="content_additional_settings">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:additional_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:additional_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("shipping.pricing"),'target'=>"#shipping_pricing"), 0, false);
?>
<fieldset id="shipping_pricing" class="collapse-visible collapse in">

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("taxes");?>
:</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"shipping_data[tax_ids]",'input_id'=>"elm_shippings_taxes",'item_ids'=>$_smarty_tpl->tpl_vars['shipping']->value['tax_ids'],'items'=>$_smarty_tpl->tpl_vars['taxes']->value,'id_field'=>"tax_id",'name_field'=>"tax",'type'=>"taxes",'class_prefix'=>"taxes",'close_on_select'=>"false",'list_mode'=>false), 0, false);
?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="free_shipping"><?php echo $_smarty_tpl->__("use_for_free_shipping");?>
:</label>
        <div class="controls">
            <input type="hidden" name="shipping_data[free_shipping]" value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
 />
            <input type="checkbox" name="shipping_data[free_shipping]" id="free_shipping" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['free_shipping'] == smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
 />
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_shippings_update_use_for_free_shipping");?>
</p>
        </div>
    </div>

</fieldset>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("customer_information"),'target'=>"#customer_information"), 0, true);
?>
<fieldset id="customer_information" class="collapse-visible collapse in">

    <div class="control-group">
        <label class="control-label" for="elm_is_address_required"
        ><?php echo $_smarty_tpl->__("is_address_required");?>
:</label>
        <div class="controls">
            <input type="hidden"
                   name="shipping_data[is_address_required]"
                   value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>

            />
            <input type="checkbox"
                   name="shipping_data[is_address_required]"
                   id="is_address_required"
                   <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
if ((($tmp = $_smarty_tpl->tpl_vars['shipping']->value['is_address_required'] ?? null)===null||$tmp==='' ? $_prefixVariable3 ?? null : $tmp) === smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>
                   value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>

            />
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_shippings_update_is_address_required");?>
</p>
        </div>
    </div>

</fieldset>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:additional_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<!--content_additional_settings--></div><?php }
}
