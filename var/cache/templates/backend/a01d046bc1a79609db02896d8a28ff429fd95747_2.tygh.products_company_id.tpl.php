<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:07:12
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\products\components\search_filters\products_company_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6ce0688f54_93617845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a01d046bc1a79609db02896d8a28ff429fd95747' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\products\\components\\search_filters\\products_company_id.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_vendor.tpl' => 1,
  ),
),false)) {
function content_680b6ce0688f54_93617845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor','owner'));
$_smarty_tpl->_assignInScope('is_enabled_select_vendor', false);
$_smarty_tpl->_assignInScope('is_hidden_select_vendor', false);
$_smarty_tpl->_assignInScope('select_vendor_label', fn_allowed_for("MULTIVENDOR") ? $_smarty_tpl->__("vendor") : $_smarty_tpl->__("owner"));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "select_vendor", null, null);?>
    <?php if (fn_string_not_empty((($tmp = $_smarty_tpl->tpl_vars['picker_selected_company']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>
        <?php $_smarty_tpl->_assignInScope('is_hidden_select_vendor', true);?>
        <input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_selected_company']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)."_company_id"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'select_vendor') && smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'select_vendor')) !== '') {?>
    <?php $_smarty_tpl->_assignInScope('is_enabled_select_vendor', true);
}?>

<?php $_smarty_tpl->_assignInScope('is_enabled_select_vendor', $_smarty_tpl->tpl_vars['is_enabled_select_vendor']->value ,false ,2);
$_smarty_tpl->_assignInScope('is_hidden_select_vendor', $_smarty_tpl->tpl_vars['is_hidden_select_vendor']->value ,false ,2);
$_smarty_tpl->_assignInScope('select_vendor_label', $_smarty_tpl->tpl_vars['select_vendor_label']->value ,false ,2);
}
}
