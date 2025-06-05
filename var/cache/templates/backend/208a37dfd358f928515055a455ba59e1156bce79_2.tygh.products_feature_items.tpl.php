<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:51:29
=======
/* Smarty version 4.3.0, created on 2025-05-23 14:07:04
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\products\components\search_filters\products_feature_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_68386661bd88f1_50234169',
=======
  'unifunc' => 'content_683056d8cb5275_13015587',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '208a37dfd358f928515055a455ba59e1156bce79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\products\\components\\search_filters\\products_feature_items.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996701,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/advanced_search_form.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_68386661bd88f1_50234169 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683056d8cb5275_13015587 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('error_features_too_many_variants'));
if ($_smarty_tpl->tpl_vars['feature_items']->value) {?>
    <div class="group form-horizontal">
        <div class="control-group">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/advanced_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_features'=>$_smarty_tpl->tpl_vars['feature_items']->value,'prefix'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)."_feature_",'data_name'=>"feature_variants"), 0, false);
?>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['feature_items_too_many']->value) {?>
    <div class="group form-horizontal">
        <?php echo $_smarty_tpl->__("error_features_too_many_variants");?>

    </div>
<?php }
}
}
