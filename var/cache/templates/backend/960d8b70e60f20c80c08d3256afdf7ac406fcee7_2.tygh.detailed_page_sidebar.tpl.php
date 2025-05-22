<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:03:57
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\addons\components\detailed_page\sidebar\detailed_page_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6c1dc4f156_07573744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '960d8b70e60f20c80c08d3256afdf7ac406fcee7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\addons\\components\\detailed_page\\sidebar\\detailed_page_sidebar.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/detailed_page/sidebar/addon_status.tpl' => 1,
    'tygh:views/addons/components/detailed_page/sidebar/enjoy_addon.tpl' => 1,
    'tygh:views/addons/components/detailed_page/sidebar/addon_market_info.tpl' => 1,
    'tygh:views/addons/components/detailed_page/sidebar/addon_support.tpl' => 1,
  ),
),false)) {
function content_680b6c1dc4f156_07573744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons_detailed:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons_detailed:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/addon_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/enjoy_addon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/addon_market_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/addon_support.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons_detailed:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
