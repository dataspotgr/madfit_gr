<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:24:02
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\pickers\profile_fields\picker_contents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ec32cc4618_46751762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50134da501a534b2cf65d9701c82c69071b521f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\pickers\\profile_fields\\picker_contents.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:buttons/add_close.tpl' => 1,
  ),
),false)) {
function content_6811ec32cc4618_46751762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.to_relative_url.php','function'=>'smarty_modifier_to_relative_url',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','can_not_add_file_type_profile_field','id','name','id','description','no_data','add_profile_fields','add_profile_fields_and_close'));
if (!$_REQUEST['extra']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr((string)$_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
    _.tr('text_can_not_add_file_type', '<?php echo strtr((string)$_smarty_tpl->__("can_not_add_file_type_profile_field"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');

    $.ceEvent('on', 'ce.formpost_add_profile_fields', function(frm, elm) {
        var max_displayed_qty = <?php echo htmlspecialchars((string) (($tmp = $_REQUEST['max_displayed_qty'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
        var details_url = '<?php echo htmlspecialchars((string) fn_url("profile_fields.update?field_id="), ENT_QUOTES, 'UTF-8');?>
';
        var profile_fields = {};
        var profile_fields_count = 0;

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var type = $(this).data('type');
                if (type !== '<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::FILE"), ENT_QUOTES, 'UTF-8');?>
') {
                    var id = $(this).val();
                    var item = $(this).parent().parent();
                    profile_fields[id] = {
                        description: item.find('td.cm-profile-field-description').text(),
                    };
                    profile_fields_count ++;
                } else {
                    $.ceNotification('show', {
                        type: 'W',
                        title: _.tr('warning'),
                        message: _.tr('text_can_not_add_file_type'),
                        message_state: 'I'
                    });
                }
            });

            if (profile_fields_count > 0) {
                
                $.cePicker('add_js_item', frm.data('caResultId'), profile_fields, 'pf_', {
                    '{field_id}': '%id',
                    '{description}': '%item.description',
                });
                

                $.cePicker('check_items_qty', frm.data('caResultId'), details_url, max_displayed_qty);

                $.ceNotification('show', {
                    type: 'N',
                    title: _.tr('notice'),
                    message: _.tr('text_items_added'),
                    message_state: 'I'
                });
            }
        }

        return false;
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<form action="<?php echo htmlspecialchars((string) fn_url(smarty_modifier_to_relative_url($_REQUEST['extra'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_profile_fields">

<?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table--relative table-responsive">
    <tr>
        <th class="center" width="1%">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"mrg-check"), 0, false);
?></th>
        <th width="10%"><?php echo $_smarty_tpl->__("id");?>
</th>
        <th width="15%"><?php echo $_smarty_tpl->__("name");?>
</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
    <tr>
        <td class="center" width="1%" data-th="">
            <input type="checkbox" name="add_parameter[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" data-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
" class="mrg-check cm-item" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("id");?>
">
            <span>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
</span></td>
        <td class="cm-profile-field-description" data-th="<?php echo $_smarty_tpl->__("description");?>
"><input type="hidden" name="origin_statuses[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add_profile_fields"),'but_close_text'=>$_smarty_tpl->__("add_profile_fields_and_close"),'is_js'=>fn_is_empty($_REQUEST['extra'])), 0, false);
?>
</div>

</form>
<?php }
}
