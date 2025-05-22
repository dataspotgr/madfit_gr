<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:27:04
  from 'C:\xampp\htdocs\madfit_gr\design\themes\bright_theme\templates\addons\my_changes\hooks\index\footer.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2628e50e85_68470444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78a7722c4e5617b4b120b006bbb0dbb07a420697' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\bright_theme\\templates\\addons\\my_changes\\hooks\\index\\footer.post.tpl',
      1 => 1747919270,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f2628e50e85_68470444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><button id="goTopBtn" class="go-top-button" title="Πάνω">↑</button>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_changes/hooks/index/footer.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/my_changes/hooks/index/footer.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><button id="goTopBtn" class="go-top-button" title="Πάνω">↑</button>
<?php }
}
}
