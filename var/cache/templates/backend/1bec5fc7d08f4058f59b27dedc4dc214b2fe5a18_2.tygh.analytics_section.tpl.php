<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-30 09:48:06
=======
/* Smarty version 4.3.0, created on 2025-05-23 13:44:58
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\index\components\analytics_section\analytics_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683954a67d1465_55249510',
=======
  'unifunc' => 'content_683051aa23e2a9_69430669',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bec5fc7d08f4058f59b27dedc4dc214b2fe5a18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\index\\components\\analytics_section\\analytics_section.tpl',
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
    'tygh:views/index/components/analytics_section/analytics_card/analytics_card.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_683954a67d1465_55249510 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683051aa23e2a9_69430669 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_section_title','no_data'));
$_smarty_tpl->_assignInScope('show_analytics_section', (($tmp = $_smarty_tpl->tpl_vars['show_analytics_section']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_analytics_section']->value) {?><section class="analytics-section"><h2 class="analytics-section__title"><?php echo $_smarty_tpl->__("dashboard.analytics_section_title");?>
</h2><div class="analytics-section__content"><?php if ($_smarty_tpl->tpl_vars['dashboard_blocks']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dashboard_blocks']->value, 'blocks', false, 'section_id');
$_smarty_tpl->tpl_vars['blocks']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section_id']->value => $_smarty_tpl->tpl_vars['blocks']->value) {
$_smarty_tpl->tpl_vars['blocks']->do_else = false;
?><div class="analytics-section__column analytics-section__column--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_card/analytics_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('analytics_card'=>$_smarty_tpl->tpl_vars['block']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="analytics-section__no-items no-items"><?php echo $_smarty_tpl->__("no_data");?>
</div><?php }?></div></section><?php }
}
}
