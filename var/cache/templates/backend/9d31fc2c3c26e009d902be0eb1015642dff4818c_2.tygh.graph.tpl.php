<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-30 09:48:06
=======
/* Smarty version 4.3.0, created on 2025-05-23 13:44:58
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\index\components\analytics_section\analytics_card\graph.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683954a6b9d158_53413943',
=======
  'unifunc' => 'content_683051aa8d9813_08441457',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d31fc2c3c26e009d902be0eb1015642dff4818c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\index\\components\\analytics_section\\analytics_card\\graph.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996682,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_683954a6b9d158_53413943 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683051aa8d9813_08441457 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('previous_period','current_period','current_previous_period'));
if ($_smarty_tpl->tpl_vars['graph']->value && $_smarty_tpl->tpl_vars['graph']->value['content']) {
echo smarty_function_script(array('src'=>"js/tygh/backend/dashboard/graph.js"),$_smarty_tpl);?>
<div class="analytics-card-graph" data-ca-analytics-card="graph" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['graph']->value['id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-is-day="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-previous-period-text="<?php echo htmlspecialchars((string) htmlentities(mb_convert_encoding((string)$_smarty_tpl->__("previous_period"), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-current-period-text="<?php echo htmlspecialchars((string) htmlentities(mb_convert_encoding((string)$_smarty_tpl->__("current_period"), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-current-previous-period-text="<?php echo htmlspecialchars((string) htmlentities(mb_convert_encoding((string)$_smarty_tpl->__("current_previous_period",array("[date]"=>"MMM d, yyyy")), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-content="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['graph']->value['content']), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-graph__view spinner" data-ca-analytics-card="graphView"></div></div><?php }
}
}
