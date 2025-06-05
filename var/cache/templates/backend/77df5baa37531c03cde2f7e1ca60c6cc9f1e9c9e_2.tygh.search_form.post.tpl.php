<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:51:26
=======
/* Smarty version 4.3.0, created on 2025-05-23 14:06:59
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\bestsellers\hooks\products\search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_6838665e42fc13_01376517',
=======
  'unifunc' => 'content_683056d3c99de1_33870190',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77df5baa37531c03cde2f7e1ca60c6cc9f1e9c9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\search_form.post.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996582,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6838665e42fc13_01376517 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683056d3c99de1_33870190 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }
}
