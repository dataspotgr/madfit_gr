<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:04:29
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\components\option_fileeditor_open.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6c3d261432_88821032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a122bceeb277af816cf92c1e2a8abfa9bf08a75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\option_fileeditor_open.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6c3d261432_88821032 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
_dialog" class="hidden"></div>
<input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
"
       class="input-large"
       type="text"
       name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
       value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['option']->value['selected_value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
/><?php }
}
