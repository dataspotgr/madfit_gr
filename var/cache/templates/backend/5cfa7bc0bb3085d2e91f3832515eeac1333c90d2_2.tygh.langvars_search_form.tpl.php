<?php
/* Smarty version 4.3.0, created on 2025-03-21 07:30:10
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\languages\components\langvars_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd77f2a33392_16920682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cfa7bc0bb3085d2e91f3832515eeac1333c90d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\languages\\components\\langvars_search_form.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/search.tpl' => 1,
  ),
),false)) {
function content_67dd77f2a33392_16920682 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','search_for_pattern'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="langvars_search_form" method="get">
        <input type="hidden" name="name" value="<?php if (!is_array($_REQUEST['name'])) {
echo htmlspecialchars((string) $_REQUEST['name'], ENT_QUOTES, 'UTF-8');
}?>"/>

        <div class="sidebar-field">
            <label><?php echo $_smarty_tpl->__("search_for_pattern");?>
</label>
            <input type="text" name="q" size="20" value="<?php echo htmlspecialchars((string) $_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text"/>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[languages.translations]"), 0, false);
?>
    </form>
</div><?php }
}
