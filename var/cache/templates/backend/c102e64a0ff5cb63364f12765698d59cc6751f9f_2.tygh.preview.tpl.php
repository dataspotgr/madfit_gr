<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-30 09:48:05
=======
/* Smarty version 4.3.0, created on 2025-05-23 13:44:56
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\email_templates\preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683954a59a59b8_57151981',
=======
  'unifunc' => 'content_683051a8ac53d4_20833601',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c102e64a0ff5cb63364f12765698d59cc6751f9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\email_templates\\preview.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996680,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_683954a59a59b8_57151981 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683051a8ac53d4_20833601 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('preview','subject','body'));
?>
<div title="<?php echo $_smarty_tpl->__("preview");?>
" id="preview_dialog">

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
    <h4><?php echo $_smarty_tpl->__("subject");?>
:</h4>
    <div>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview']->value->getSubject(), ENT_QUOTES, 'UTF-8');?>

    </div>
    <h4><?php echo $_smarty_tpl->__("body");?>
:</h4>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['preview']->value->getBody();?>

    </div>
<?php }?>

<!--preview_dialog--></div>
<?php }
}
