<?php
/* Smarty version 4.3.0, created on 2025-05-22 11:43:25
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\seo\views\seo_rules\components\search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682ee3ad79f630_47011061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d425af9b18dc8c72eb88f95e0646bc4637bd9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\seo\\views\\seo_rules\\components\\search_form.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_682ee3ad79f630_47011061 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','seo_name','dispatch_value'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="seo_rules_search_form" method="get">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("seo_name");?>
</label>
    <input type="text" name="name" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text" />
</div>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("dispatch_value");?>
</label>
    <input type="text" name="rule_params" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['rule_params'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"seo_rules",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0, false);
?>

</form>
</div><?php }
}
