<?php
/* Smarty version 4.3.0, created on 2025-04-24 16:56:24
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\my_changes\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680a430896c381_21574507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c958af6e7e436c5389b8cb9c49693911cd5b2d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\my_changes\\hooks\\index\\scripts.post.tpl',
      1 => 1744014184,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680a430896c381_21574507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
$(document).ready(function() {
    $('#carrier_key_1 option').each(function() {
        if ($(this).val() !== "" && $(this).val() !== "ups") {
            $(this).hide();
        }
    });
})
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
