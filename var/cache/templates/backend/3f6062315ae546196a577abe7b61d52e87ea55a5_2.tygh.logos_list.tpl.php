<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:47:17
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\themes\components\logos_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f1cd56ac532_81366672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f6062315ae546196a577abe7b61d52e87ea55a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\themes\\components\\logos_list.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/themes/components/logo_item.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_682f1cd56ac532_81366672 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('logos','show_extra_logos','theme_editor.favicon_size','hide_extra_logos'));
?>
<div class="logos-section">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_logos_form" id="update_logos_form" enctype="multipart/form-data">
        <div class="row-fluid">
            <div class="span12" id="title_theme_logo">
                <h4><?php if ($_smarty_tpl->tpl_vars['default_layout_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_layout_name']->value, ENT_QUOTES, 'UTF-8');?>
: <?php }
echo $_smarty_tpl->__("logos");?>
</h4>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/themes/components/logo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"theme",'logo'=>$_smarty_tpl->tpl_vars['logos']->value['theme']), 0, false);
?>
        <div class="row-fluid">
            <div class="span12">
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['show_all_logos']->value) {
echo " hidden";
}
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("show_extra_logos"),'but_role'=>"action",'but_id'=>"on_attach_additional_logos",'but_meta'=>"cm-combination ".$_prefixVariable4), 0, false);
?>
            </div>
        </div>
        <div id="attach_additional_logos" name="attach_additional_logos"<?php if (!$_smarty_tpl->tpl_vars['show_all_logos']->value) {?> class="hidden"<?php }?>>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logos']->value, 'logo', false, 'type');
$_smarty_tpl->tpl_vars['logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "theme") {?>
                    <?php continue 1;?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/themes/components/logo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['type']->value,'logo'=>$_smarty_tpl->tpl_vars['logo']->value,'show_alt'=>($_smarty_tpl->tpl_vars['type']->value != "favicon"),'show_hidpi_checkbox'=>($_smarty_tpl->tpl_vars['type']->value != "favicon"),'description'=>$_smarty_tpl->tpl_vars['type']->value == "favicon" ? $_smarty_tpl->__("theme_editor.favicon_size") : ''), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="row-fluid">
                <div class="span12">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("hide_extra_logos"),'but_role'=>"action",'but_id'=>"off_attach_additional_logos",'but_meta'=>"cm-combination"), 0, true);
?>
                </div>
            </div>
        </div>
    </form>
</div>
<?php }
}
