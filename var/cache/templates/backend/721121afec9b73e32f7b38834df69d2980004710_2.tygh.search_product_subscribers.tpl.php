<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:54:38
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\products\components\search_product_subscribers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683061fe607672_42734548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '721121afec9b73e32f7b38834df69d2980004710' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\products\\components\\search_product_subscribers.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/search.tpl' => 1,
    'tygh:common/section.tpl' => 1,
  ),
),false)) {
function content_683061fe607672_42734548 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('email'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "section", null, null);?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="form-inline" name="subscribers_search_form" method="get">
	<input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="selected_section" value="subscribers" />
    <input type="hidden" name="dispatch" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <div class="input-append shift-left flex">
    <input type="text" name="email" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" placeholder="<?php echo $_smarty_tpl->__("email");?>
" />
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"flex-shrink-none"), 0, false);
?>
    </div>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section_content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'section')), 0, false);
}
}
