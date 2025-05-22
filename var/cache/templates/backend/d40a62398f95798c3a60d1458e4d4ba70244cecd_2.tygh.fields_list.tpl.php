<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:05:26
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\components\fields_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6c769f5075_52608034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd40a62398f95798c3a60d1458e4d4ba70244cecd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\fields_list.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:addons/advanced_import/views/import_presets/components/field.tpl' => 1,
  ),
),false)) {
function content_680b6c769f5075_52608034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.fields_mapping.description','advanced_import.modifiers_list','advanced_import.modifiers_list','advanced_import.column_header','advanced_import.product_property','advanced_import.first_line_import_value','advanced_import.modifier','no_data'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    Tygh.advanced_import = {
        relations: <?php echo json_encode($_smarty_tpl->tpl_vars['relations']->value);?>
,
        fields: <?php echo json_encode($_smarty_tpl->tpl_vars['fields']->value);?>
,
        preset_fields: <?php echo json_encode((($tmp = $_smarty_tpl->tpl_vars['preset']->value['fields'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>

    };
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('detailed_preset_page', false);?>
<div data-ca-advanced-import-preset-file-extension="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['preset']->value['file_extension'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
     class="preview-fields-mapping__wrapper clearfix"
>

    <p class="pull-left p-notice"><?php echo $_smarty_tpl->__("advanced_import.fields_mapping.description",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>
    <div class="btn-bar btn-toolbar pull-right">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"action1",'but_target_id'=>"advanced_import_modifiers_list_popup",'but_text'=>$_smarty_tpl->__("advanced_import.modifiers_list"),'but_href'=>"advanced_import.modifiers_list",'but_meta'=>"nav__actions-adv-buttons btn adv-buttons pull-right cm-dialog-opener"), 0, false);
?>
        <div id="advanced_import_modifiers_list_popup" class="hidden" title="<?php echo $_smarty_tpl->__("advanced_import.modifiers_list");?>
"></div>
    </div>

    <div class="clearfix"></div>

    <div class="span16 table-responsive-wrapper">
        <table width="100%" class="table table--relative table-responsive">
            <thead>
            <tr>
                <th class="import-field__name">
                    <?php echo $_smarty_tpl->__("advanced_import.column_header");?>

                </th>
                <th class="import-field__related_object">
                    <?php echo $_smarty_tpl->__("advanced_import.product_property",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>

                </th>
                <?php if (!$_smarty_tpl->tpl_vars['detailed_preset_page']->value) {?>
                    <th class="import-field__preview">
                        <?php echo $_smarty_tpl->__("advanced_import.first_line_import_value");?>

                    </th>
                <?php }?>
                <th class="import-field__modifier">
                    <?php echo $_smarty_tpl->__("advanced_import.modifier");?>

                </th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = $_smarty_tpl->tpl_vars['fields']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp), 'name', false, 'id');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/advanced_import/views/import_presets/components/field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('view_only'=>$_smarty_tpl->tpl_vars['view_only']->value,'detailed_preset_page'=>$_smarty_tpl->tpl_vars['detailed_preset_page']->value), 0, true);
?>
            <?php
}
if ($_smarty_tpl->tpl_vars['name']->do_else) {
?>
                <tr>
                    <td colspan="4">
                        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>

    <div class="clearfix"></div>
</div>
<?php }
}
