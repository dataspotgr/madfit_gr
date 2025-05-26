<?php
/* Smarty version 4.3.0, created on 2025-05-23 10:46:52
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\exim\components\csv_output.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683027ec579517_85923206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e523743b6b1ad3528299136c6cdb528485aaf9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\exim\\components\\csv_output.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683027ec579517_85923206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('direct_download','screen','server'));
?>
<select name="export_options[output]" id="output">
    <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("EximOutputOptions::DIRECT_DOWNLOAD"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value === smarty_modifier_enum("EximOutputOptions::DIRECT_DOWNLOAD")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("direct_download");?>
</option>
    <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("EximOutputOptions::SCREEN"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value === smarty_modifier_enum("EximOutputOptions::SCREEN")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("screen");?>
</option>
    <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("EximOutputOptions::SERVER"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value === smarty_modifier_enum("EximOutputOptions::SERVER")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("server");?>
</option>
</select><?php }
}
