<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:54:25
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_name.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683061f1022104_28838774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b333cc88897ca240f11c395a5fa4923b98aeb80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_name.pre.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683061f1022104_28838774 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.variation_of_product'));
if ($_smarty_tpl->tpl_vars['parent_product_data']->value) {?>
    <div class="control-group">
        <div class="controls">
            <p>
                <?php echo $_smarty_tpl->__("product_variations.variation_of_product",array("[url]"=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['parent_product_id'])),"[product]"=>$_smarty_tpl->tpl_vars['parent_product_data']->value['variation_name']));?>

            </p>
        </div>
    </div>
<?php }
}
}
