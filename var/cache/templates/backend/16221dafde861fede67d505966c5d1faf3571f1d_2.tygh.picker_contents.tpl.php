<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:54:40
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\pickers\pages\picker_contents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd6190375752_52971759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16221dafde861fede67d505966c5d1faf3571f1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\pickers\\pages\\picker_contents.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/pages/components/pages_search_form.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:views/pages/components/pages_tree.tpl' => 1,
    'tygh:buttons/add_close.tpl' => 1,
  ),
),false)) {
function content_67dd6190375752_52971759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.to_relative_url.php','function'=>'smarty_modifier_to_relative_url',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','no_data','choose','add_pages_and_close','add_pages'));
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

    $.ceEvent('on', 'ce.formpost_pages_form', function(frm, elm) {
        var pages = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                pages[id] = $('#page_title_' + id).text();
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), pages, 'a', {
                '{page_id}': '%id',
                '{page}': '%item'
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

<?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/pages_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"pages.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\"><input type=\"hidden\" name=\"get_tree\" value=\"\"><input type=\"hidden\" name=\"root\" value=\"\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true), 0, false);
?>

<form action="<?php echo htmlspecialchars((string) fn_url(smarty_modifier_to_relative_url($_REQUEST['extra'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="pages_form">

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['pages_tree']->value) {?>
        <div class="items-container multi-level">
            <?php $_smarty_tpl->_assignInScope('random_value', rand());?>
            <?php $_smarty_tpl->_assignInScope('combination_suffix', (($tmp = $_smarty_tpl->tpl_vars['combination_suffix']->value ?? null)===null||$tmp==='' ? "_".((string)$_smarty_tpl->tpl_vars['random_value']->value) ?? null : $tmp));?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/pages_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('header'=>true,'picker'=>true,'checkbox_name'=>$_REQUEST['checkbox_name'],'hide_delete_button'=>true,'display'=>$_REQUEST['display'],'dispatch'=>"pages.picker",'combination_suffix'=>$_smarty_tpl->tpl_vars['combination_suffix']->value), 0, false);
?>
        </div>
    <?php } else { ?>
        <div class="items-container"><p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p></div>
    <?php }?>


    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0, true);
?>

    <?php if ($_smarty_tpl->tpl_vars['pages_tree']->value) {?>
    <div class="buttons-container">
        <?php if ($_REQUEST['display'] == "radio") {?>
            <?php $_smarty_tpl->_assignInScope('but_close_text', $_smarty_tpl->__("choose"));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('but_close_text', (($tmp = $_smarty_tpl->tpl_vars['button_names']->value['but_close_text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_pages_and_close") ?? null : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['button_names']->value['but_text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_pages") ?? null : $tmp));?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0, false);
?>
    </div>
    <?php }?>
</form>
<?php }
}
