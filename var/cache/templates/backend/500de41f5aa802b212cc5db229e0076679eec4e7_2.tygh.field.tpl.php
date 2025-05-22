<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:05:26
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\components\field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6c76c9ebd3_80918384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '500de41f5aa802b212cc5db229e0076679eec4e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\field.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6c76c9ebd3_80918384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.column_header','advanced_import.product_property','none','none','advanced_import.first_line_import_value','advanced_import.modifier_title','advanced_import.example_imported_title','advanced_import.example_modified_title','advanced_import.show_more','advanced_import.show_less','advanced_import.modifier','advanced_import.modifier'));
?>
<tr class="import-field" id="field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <td class="import-field__name" data-th="<?php echo $_smarty_tpl->__("advanced_import.column_header");?>
">
        <input type="hidden"
               name="fields[<?php echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['name']->value), ENT_QUOTES, 'UTF-8');?>
][name]"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
        />
        <span data-ca-advanced-import-element="field"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    </td>
    <td class="import-field__related_object" data-th="<?php echo $_smarty_tpl->__("advanced_import.product_property",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
">
        <input type="hidden"
               name="fields[<?php echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['name']->value), ENT_QUOTES, 'UTF-8');?>
][related_object_type]"
               id="elm_field_related_object_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        />
        <label class="cm-adv-import-placeholder cm-adv-import-placeholder--empty <?php if ($_smarty_tpl->tpl_vars['view_only']->value) {?>cm-adv-import-placeholder--view_only<?php }?>"
            data-ca-advanced-import-field-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-advanced-import-select-name="fields[<?php echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['name']->value), ENT_QUOTES, 'UTF-8');?>
][related_object]"
            data-ca-advanced-import-field-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-placeholder="-<?php echo $_smarty_tpl->__("none");?>
-"
            data-ca-view-only="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['view_only']->value ?? null)===null||$tmp==='' ? "false" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        >-<?php echo $_smarty_tpl->__("none");?>
-</label>
        <input type="hidden" id="elm_field_related_object_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="fields[<?php echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['name']->value), ENT_QUOTES, 'UTF-8');?>
][related_object]" value=""/>
    </td>
    <?php if (!$_smarty_tpl->tpl_vars['detailed_preset_page']->value) {?>
    <td class="import-field__preview" data-th="<?php echo $_smarty_tpl->__("advanced_import.first_line_import_value");?>
">
        <?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['preview']->value, 'preview_item');
$_smarty_tpl->tpl_vars['preview_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['preview_item']->value) {
$_smarty_tpl->tpl_vars['preview_item']->do_else = false;
?>
                <div class="import-field__preview-wrapper cm-show-more__wrapper">
                    <div class="import-field__preview-value cm-show-more__block">
                        <?php if ($_smarty_tpl->tpl_vars['preset']->value['fields'][$_smarty_tpl->tpl_vars['name']->value]['modifier']) {?>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_item']->value[$_smarty_tpl->tpl_vars['name']->value]['modified'], ENT_QUOTES, 'UTF-8');?>

                            <div class="import-field__preview-info">
                                <a class="import-field__preview-button"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign"),$_smarty_tpl);?>
</a>
                                <div class="popover fade bottom in">
                                    <div class="arrow"></div>
                                    <h3 class="popover-title"><?php echo $_smarty_tpl->__("advanced_import.modifier_title");?>
</h3>
                                    <div class="popover-content">
                                        <div class="import-field__preview--original">
                                            <strong><?php echo $_smarty_tpl->__("advanced_import.example_imported_title");?>
</strong>
                                            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_item']->value[$_smarty_tpl->tpl_vars['name']->value]['original'], ENT_QUOTES, 'UTF-8');?>
</p>
                                        </div>
                                        <div class="import-field__preview--modified">
                                            <strong><?php echo $_smarty_tpl->__("advanced_import.example_modified_title");?>
</strong>
                                            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_item']->value[$_smarty_tpl->tpl_vars['name']->value]['modified'], ENT_QUOTES, 'UTF-8');?>
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_item']->value[$_smarty_tpl->tpl_vars['name']->value]['original'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="cm-show-more__btn">
                <a href="#" class="cm-show-more__btn-more"><?php echo $_smarty_tpl->__("advanced_import.show_more");?>
</a>
                <a href="#" class="cm-show-more__btn-less"><?php echo $_smarty_tpl->__("advanced_import.show_less");?>
</a>
            </div>
        <?php }?>
    </td>
    <?php }?>
    <td class="import-field__modifier" data-th="<?php echo $_smarty_tpl->__("advanced_import.modifier");?>
">
        <div class="control-group import-field__modifier-input-group">
            <input type="text"
                   name="fields[<?php echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['name']->value), ENT_QUOTES, 'UTF-8');?>
][modifier]"
                   class="input-text input-hidden import-field__modifier-input"
                   placeholder="<?php echo $_smarty_tpl->__("advanced_import.modifier");?>
"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preset']->value['fields'][$_smarty_tpl->tpl_vars['name']->value]['modifier'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-advanced-import-original-value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['preview_item']->value[$_smarty_tpl->tpl_vars['name']->value]['original'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-advanced-import-element="modifier"
                   <?php if ($_smarty_tpl->tpl_vars['view_only']->value) {?>disabled<?php }?>
            />
        </div>
    </td>
<!--field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
<?php }
}
