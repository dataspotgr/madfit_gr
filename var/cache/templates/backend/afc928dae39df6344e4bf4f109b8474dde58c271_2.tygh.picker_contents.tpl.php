<?php
/* Smarty version 4.3.0, created on 2025-03-21 01:57:41
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\banners\pickers\banners\picker_contents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd2a05c0f030_06793323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afc928dae39df6344e4bf4f109b8474dde58c271' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\banners\\pickers\\banners\\picker_contents.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/banners/views/banners/components/banners_search_form.tpl' => 1,
    'tygh:addons/banners/views/banners/components/banners_list.tpl' => 1,
    'tygh:buttons/add_close.tpl' => 1,
  ),
),false)) {
function content_67dd2a05c0f030_06793323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.to_relative_url.php','function'=>'smarty_modifier_to_relative_url',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','add_banners','add_banners_and_close'));
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

    $.ceEvent('on', 'ce.formpost_banners_form', function(frm, elm) {

        var banners = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                banners[id] = $('#banner_' + id).text();
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), banners, 'b', {
                '{banner_id}': '%id',
                '{banner}': '%item'
            });
            

            $.ceNotification('show', {
                type: 'N',
                title: _.tr('notice'),
                message: _.tr('text_items_added'),
                message_state: 'I'
            });
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
</head>

<?php $_smarty_tpl->_subTemplateRender("tygh:addons/banners/views/banners/components/banners_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"banners.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true), 0, false);
?>

<form action="<?php echo htmlspecialchars((string) fn_url(smarty_modifier_to_relative_url($_REQUEST['extra'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars((string) $_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="banners_form" enctype="multipart/form-data">

<?php $_smarty_tpl->_subTemplateRender("tygh:addons/banners/views/banners/components/banners_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('banners'=>$_smarty_tpl->tpl_vars['banners']->value,'form_name'=>"banners_form"), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['banners']->value) {?>
<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add_banners"),'but_close_text'=>$_smarty_tpl->__("add_banners_and_close"),'is_js'=>fn_is_empty($_REQUEST['extra'])), 0, false);
?>
</div>
<?php }?>

</form>
<?php }
}
