<?php
/* Smarty version 4.3.0, created on 2025-03-31 15:28:03
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\email_templates\preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea8a53352133_73489267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c102e64a0ff5cb63364f12765698d59cc6751f9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\email_templates\\preview.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ea8a53352133_73489267 (Smarty_Internal_Template $_smarty_tpl) {
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
