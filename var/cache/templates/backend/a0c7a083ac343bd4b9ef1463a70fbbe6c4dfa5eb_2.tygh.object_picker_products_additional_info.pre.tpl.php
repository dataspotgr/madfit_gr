<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:54:32
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\object_picker_products_additional_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683061f86971b4_22070461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0c7a083ac343bd4b9ef1463a70fbbe6c4dfa5eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\object_picker_products_additional_info.pre.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683061f86971b4_22070461 (Smarty_Internal_Template $_smarty_tpl) {
?>
    ${data.variation_features
        ? `<div class="product-variations__variation-features product-variations__variation-features--inline product-variations__variation-features--secondary">
            ${data.variation_features.map(feature => feature['variant']).join(' • ')}&nbsp;—&nbsp;
           </div>`
        : ''
    }
<?php }
}
