<?php
/* Smarty version 4.3.0, created on 2025-03-26 15:59:24
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\components\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e4083c675d56_20907050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8907a0efbdad0527f8694e99cee999b4ff81d099' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\form.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e4083c675d56_20907050 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="manage_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preffix']->value, ENT_QUOTES, 'UTF-8');?>
_import_presets_form"
        enctype="multipart/form-data"
        class="cm-skip-check-items import-preset cm-ajax cm-comet"
        data-ca-advanced-import-element="management_form"
        id="manage_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preffix']->value, ENT_QUOTES, 'UTF-8');?>
_import_presets_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_extra_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <?php echo $_smarty_tpl->tpl_vars['wrapper_content']->value;?>

</form><?php }
}
