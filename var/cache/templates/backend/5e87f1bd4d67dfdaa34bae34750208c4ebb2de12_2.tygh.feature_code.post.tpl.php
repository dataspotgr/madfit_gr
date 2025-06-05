<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-30 11:48:15
=======
/* Smarty version 4.3.0, created on 2025-05-23 10:51:46
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\seo\hooks\product_features\feature_code.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683970cf6bde94_22909757',
=======
  'unifunc' => 'content_683029122fc406_76047630',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e87f1bd4d67dfdaa34bae34750208c4ebb2de12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\seo\\hooks\\product_features\\feature_code.post.tpl',
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
function content_683970cf6bde94_22909757 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683029122fc406_76047630 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('seo.product_feature.feature_code.notice'));
?>
<div id="elm_feature_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_description" class="muted description">
    <p><?php echo $_smarty_tpl->__("seo.product_feature.feature_code.notice");?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['feature_codes']->value) {?>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature_codes']->value, 'feature_code');
$_smarty_tpl->tpl_vars['feature_code']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_code']->value) {
$_smarty_tpl->tpl_vars['feature_code']->do_else = false;
?>
                <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_code']->value['name'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_code']->value['description'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
</div><?php }
}
