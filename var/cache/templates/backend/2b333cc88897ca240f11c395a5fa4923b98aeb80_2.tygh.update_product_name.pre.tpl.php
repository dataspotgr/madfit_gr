<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:54:34
=======
/* Smarty version 4.3.0, created on 2025-05-23 10:50:47
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_product_name.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_6838671a31a193_55979986',
=======
  'unifunc' => 'content_683028d7c34961_92874860',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b333cc88897ca240f11c395a5fa4923b98aeb80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_name.pre.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747915842,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6838671a31a193_55979986 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683028d7c34961_92874860 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
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
