<?php
/* Smarty version 4.3.0, created on 2025-05-28 15:53:07
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\pickers\filters\picker_contents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68370733305100_83625565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '150e10e4459bf3293c15ed36371304a8a5339d7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\pickers\\filters\\picker_contents.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/product_filters/components/product_filters_search_form.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:buttons/add_close.tpl' => 1,
  ),
),false)) {
function content_68370733305100_83625565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.to_relative_url.php','function'=>'smarty_modifier_to_relative_url',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','name','description','status','name','description','status','active','disabled','no_data','choose','add_filters_and_close','add_filters'));
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
    var display_type = '<?php echo strtr((string)$_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';

    $.ceEvent('on', 'ce.formpost_filters_form', function(frm, elm) {
        var filters = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                filters[id] = $('#filter_title_' + id).text();
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), filters, 'f', {
                '{filter_id}': '%id',
                '{filter}': '%item'
            });
            

            if (display_type != 'radio') {
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

<?php $_smarty_tpl->_subTemplateRender("tygh:views/product_filters/components/product_filters_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"product_filters.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true), 0, false);
?>

<form action="<?php echo htmlspecialchars((string) fn_url(smarty_modifier_to_relative_url($_REQUEST['extra'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="filters_form">

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['filters']->value) {?>

    <div class="table-responsive-wrapper">
        <table width="100%" class="table table-middle table--relative table-responsive">
            <thead>
            <tr>
                <th width="1%" class="center">
                    <?php if ($_REQUEST['display'] == "checkbox") {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php }?>
                </th>
                <th><?php echo $_smarty_tpl->__("name");?>
</th>
                <th><?php echo $_smarty_tpl->__("description");?>
</th>
                <th><?php echo $_smarty_tpl->__("status");?>
</th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                <tr>
                    <td class="left" data-th="">
                        <?php if ($_REQUEST['display'] == "checkbox") {?>
                            <input type="checkbox" name="add_filters[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
                            <?php } elseif ($_REQUEST['display'] == "radio") {?>
                            <input type="radio" name="selected_filter_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" />
                        <?php }?>
                    </td>
                    <td id="filter_title_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("name");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td data-th="<?php echo $_smarty_tpl->__("description");?>
"><?php echo $_smarty_tpl->tpl_vars['filter']->value['filter_description'];?>
</td>
                    <td class="center" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['status'] == "A") {?>
                            <?php echo $_smarty_tpl->__("active");?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("disabled");?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <?php } else { ?>
        <div class="items-container"><p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p></div>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0, true);
?>

    <?php if ($_smarty_tpl->tpl_vars['filters']->value) {?>
    <div class="buttons-container">
        <?php if ($_REQUEST['display'] == "radio") {?>
            <?php $_smarty_tpl->_assignInScope('but_close_text', $_smarty_tpl->__("choose"));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('but_close_text', (($tmp = $_smarty_tpl->tpl_vars['button_names']->value['but_close_text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_filters_and_close") ?? null : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['button_names']->value['but_text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_filters") ?? null : $tmp));?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0, false);
?>
    </div>
    <?php }?>
</form>
<?php }
}
