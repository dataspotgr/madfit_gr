<?php
/* Smarty version 4.3.0, created on 2025-03-21 02:47:20
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\call_requests\views\call_requests\request.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd35a8d2beb8_72255922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53bf41cf9dd8e00424cb9f69e639319362d66989' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\call_requests\\views\\call_requests\\request.tpl',
      1 => 1742455426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/call_requests/views/call_requests/components/call_requests_content.tpl' => 2,
  ),
),false)) {
function content_67dd35a8d2beb8_72255922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', "buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', "call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));
}?>

<div class="hidden" title="<?php echo $_smarty_tpl->__("call_requests.buy_now_with_one_click");?>
" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/call_requests/views/call_requests/components/call_requests_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
<!--content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/views/call_requests/request.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/views/call_requests/request.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', "buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', "call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));
}?>

<div class="hidden" title="<?php echo $_smarty_tpl->__("call_requests.buy_now_with_one_click");?>
" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/call_requests/views/call_requests/components/call_requests_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
<!--content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
