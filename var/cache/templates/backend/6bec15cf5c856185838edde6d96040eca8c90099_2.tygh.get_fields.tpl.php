<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:05:26
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\get_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6c768238e0_79167628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bec15cf5c856185838edde6d96040eca8c90099' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\get_fields.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/advanced_import/views/import_presets/components/fields_list.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_680b6c768238e0_79167628 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('import'));
?>
<div id="content_fields">
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/fields_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('view_only'=>$_smarty_tpl->tpl_vars['view_only']->value), 0, false);
?>
<!--content_fields--></div>
<?php if ($_smarty_tpl->tpl_vars['show_buttons_container']->value) {?>
    <div class="buttons-container">
        <?php $_smarty_tpl->_assignInScope('allow_href_backup', (($tmp = $_smarty_tpl->tpl_vars['allow_href']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('allow_href', true);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cancel_action'=>"close",'hide_first_button'=>!(($tmp = $_smarty_tpl->tpl_vars['fields']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'but_text'=>$_smarty_tpl->__("import"),'but_meta'=>"cm-submit",'but_onclick'=>"$".".ceAdvancedImport('setFieldsForImport', ".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id']).")",'but_name'=>"dispatch[advanced_import.import]"), 0, false);
?>
        <?php $_smarty_tpl->_assignInScope('allow_href', $_smarty_tpl->tpl_vars['allow_href_backup']->value);?>
    </div>
<?php }
}
}
