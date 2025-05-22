<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:22:57
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\shippings\components\rates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ebf15392b8_71900345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efc51f2b18cb82f42d0373845cf0256b6d0b80a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\shippings\\components\\rates.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/shippings/components/picker/rates/picker.tpl' => 1,
    'tygh:views/shippings/components/condition_row.tpl' => 1,
  ),
),false)) {
function content_6811ebf15392b8_71900345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('shipping_price_condition','shipping_weight_condition','shipping_items_condition','shipping_surcharge_discount','shipping_per','shipping_item','text_are_you_sure_to_proceed','shipping_from_value','shipping_to_value','shipping_and_up','shipping_rate_range_overlap_error_message','shipping_rate_range_limit_error_message'));
?>
<input type="hidden" name="shipping_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="shipping_data[rates][]" id="shipping_data_rate_init" disabled value="" />

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    Tygh.tr({
        'C_condition_name': '<?php echo strtr((string)$_smarty_tpl->__("shipping_price_condition"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        'W_condition_name': '<?php echo strtr((string)$_smarty_tpl->__("shipping_weight_condition"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        'I_condition_name': '<?php echo strtr((string)$_smarty_tpl->__("shipping_items_condition"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        'surcharge_discount_name': '<?php echo strtr((string)$_smarty_tpl->__("shipping_surcharge_discount"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        'per': '<?php echo strtr((string)$_smarty_tpl->__("shipping_per"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
 ',
        'C_unit': '<?php echo htmlspecialchars((string) strtr((string)preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'] ?: ''), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
        'W_unit': '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
        'I_unit': '<?php echo strtr((string)$_smarty_tpl->__("shipping_item"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        'text_are_you_sure_to_proceed': '<?php echo strtr((string)$_smarty_tpl->__("text_are_you_sure_to_proceed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        'from': '<?php echo strtr((string)$_smarty_tpl->__("shipping_from_value"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        'to': '<?php echo strtr((string)$_smarty_tpl->__("shipping_to_value"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        'shipping_and_up': '<?php echo strtr((string)$_smarty_tpl->__("shipping_and_up"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        'currencies_after': '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
        'rate_range_overlap_error_message': '<?php echo strtr((string)$_smarty_tpl->__("shipping_rate_range_overlap_error_message"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        'rate_range_limit_error_message': '<?php echo strtr((string)$_smarty_tpl->__("shipping_rate_range_limit_error_message"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
    });
    Tygh.currencies_after = <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after'] == 'Y') {?> true <?php } else { ?> false <?php }?>;
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo smarty_function_script(array('src'=>"js/tygh/backend/shipping_rates.js"),$_smarty_tpl);?>


<div class="dashboard-shipping" id="dashboard_shipping_rate">

    <?php $_smarty_tpl->_subTemplateRender("tygh:views/shippings/components/picker/rates/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('multiple'=>true,'view_mode'=>"external",'item_ids'=>$_smarty_tpl->tpl_vars['ids']->value,'shipping_id'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>

    <template id="template_table_row">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/shippings/components/condition_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </template>
<!--dashboard_shipping_rate--></div>
<?php }
}
