<?php
/* Smarty version 4.3.0, created on 2025-03-31 10:59:28
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\addons\components\detailed_page\sidebar\enjoy_addon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea4b6077b1e1_55007699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cf1309172705d36f7cc94e79c89ead9e168ea84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\addons\\components\\detailed_page\\sidebar\\enjoy_addon.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/rating/enjoying_addon_notification.tpl' => 1,
  ),
),false)) {
function content_67ea4b6077b1e1_55007699 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] && $_smarty_tpl->tpl_vars['addon']->value['identified'] && !$_smarty_tpl->tpl_vars['personal_review']->value) {?>
    <div class="sidebar-row marketplace">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"addons_write_review_sidebar"), 0, false);
?>
    </div>
<?php }
}
}
