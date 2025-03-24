<?php
/* Smarty version 4.3.0, created on 2025-03-20 02:22:30
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbde56359f90_41967121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '081882f0d1adc24097ffcf712e551ef1f79d8b4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\tooltip.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dbde56359f90_41967121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip flex-inline link--monochrome <?php if ($_smarty_tpl->tpl_vars['position']->value === "middle") {?>vertical-align-middle<?php } else { ?>top<?php }
if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"question_sign",'class'=>"cs-tooltip__icon"),$_smarty_tpl);?>
</a><?php }
}
}
