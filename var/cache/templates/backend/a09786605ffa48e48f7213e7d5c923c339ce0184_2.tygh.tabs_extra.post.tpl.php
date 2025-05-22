<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:07:41
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\attachments\hooks\products\tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6cfd698d62_83392811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a09786605ffa48e48f7213e7d5c923c339ce0184' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\attachments\\hooks\\products\\tabs_extra.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/attachments/views/components/add_new_attachments_files.tpl' => 1,
    'tygh:addons/attachments/views/attachments/manage.tpl' => 1,
  ),
),false)) {
function content_680b6cfd698d62_83392811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.component.php','function'=>'smarty_block_component',),));
?>
<div id="content_attachments" class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "attachments") {?>hidden<?php }?>">
    <?php if (!(fn_allowed_for("ULTIMATE") && ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['shared_product'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id']))) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/attachments/views/components/add_new_attachments_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attachment'=>array(),'object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"attachments",'section'=>"main",'field'=>"attachments"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"attachments",'section'=>"main",'field'=>"attachments"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product",'hide_add_new_attachments'=>true), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"attachments",'section'=>"main",'field'=>"attachments"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!--content_attachments--></div><?php }
}
