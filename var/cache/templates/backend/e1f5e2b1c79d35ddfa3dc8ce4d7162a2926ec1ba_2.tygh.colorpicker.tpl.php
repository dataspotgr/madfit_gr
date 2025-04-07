<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:46:13
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\colorpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea565555f8c1_68548190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f5e2b1c79d35ddfa3dc8ce4d7162a2926ec1ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\colorpicker.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ea565555f8c1_68548190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),));
?>
<div class="colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo smarty_modifier_render_tag_attrs((($tmp = $_smarty_tpl->tpl_vars['cp_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
>
    <input
        type="hidden"
        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['show_picker']->value) {?>data-ca-spectrum-show-initial="true"<?php } else { ?>data-ca-view="palette"<?php }?>
        class="cm-colorpicker"
    >
</div><?php }
}
