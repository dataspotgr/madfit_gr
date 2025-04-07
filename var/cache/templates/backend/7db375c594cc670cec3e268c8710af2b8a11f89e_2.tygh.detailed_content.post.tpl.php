<?php
/* Smarty version 4.3.0, created on 2025-04-04 16:08:50
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\hybrid_auth\hooks\profiles\detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67efd9e20c5d54_69583054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db375c594cc670cec3e268c8710af2b8a11f89e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\hybrid_auth\\hooks\\profiles\\detailed_content.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_67efd9e20c5d54_69583054 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.link_provider'));
if ($_smarty_tpl->tpl_vars['providers_list']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("hybrid_auth.link_provider")), 0, false);
?>

<div id="hybrid_providers">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers_list']->value, 'provider_data', false, 'provider_id');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_id']->value => $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>

    <span class="hybrid-auth-icon<?php if (!in_array($_smarty_tpl->tpl_vars['provider_id']->value,$_smarty_tpl->tpl_vars['linked_providers']->value)) {?> link-unlink-provider<?php }?>">
        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
" />
    </span>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!--hybrid_providers--></div>
<?php }
}
}
