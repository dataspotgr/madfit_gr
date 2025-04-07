<?php
/* Smarty version 4.3.0, created on 2025-03-31 10:59:50
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\advanced_import\views\import_presets\components\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea4b76a97826_22458299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c296b77fd418f3c0e506cc5a28619837fd790a7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\options.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ea4b76a97826_22458299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('tab', (($tmp = $_smarty_tpl->tpl_vars['tab']->value ?? null)===null||$tmp==='' ? "general" ?? null : $tmp));
$_smarty_tpl->_assignInScope('section', (($tmp = $_smarty_tpl->tpl_vars['section']->value ?? null)===null||$tmp==='' ? "general" ?? null : $tmp));?>

<?php if ((($tmp = $_smarty_tpl->tpl_vars['display']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option', false, 'option_id');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_id']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <?php if (!is_array($_smarty_tpl->tpl_vars['option']->value) || $_smarty_tpl->tpl_vars['tab']->value != (($tmp = $_smarty_tpl->tpl_vars['option']->value['tab'] ?? null)===null||$tmp==='' ? "general" ?? null : $tmp) || $_smarty_tpl->tpl_vars['section']->value != (($tmp = $_smarty_tpl->tpl_vars['option']->value['section'] ?? null)===null||$tmp==='' ? "general" ?? null : $tmp) || $_smarty_tpl->tpl_vars['option']->value['hidden'] || $_smarty_tpl->tpl_vars['option']->value['export_only']) {?>
            <?php continue 1;?>
        <?php }?>
        <div class="control-group<?php if ($_smarty_tpl->tpl_vars['option']->value['control_group_meta']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option']->value['control_group_meta'], ENT_QUOTES, 'UTF-8');
}?>">
            <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label">
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['option']->value['title']);?>
:
            </label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['option']->value['type'] == "checkbox") {?>
                    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
                    <input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                           type="checkbox"
                           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                           value="Y"
                           <?php if ((($tmp = $_smarty_tpl->tpl_vars['option']->value['selected_value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] ?? null : $tmp) == "Y") {?>checked="checked"<?php }?>
                    />
                <?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == "input") {?>
                    <?php if ($_smarty_tpl->tpl_vars['option']->value['option_template']) {?>
                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['option']->value['option_template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>$_smarty_tpl->tpl_vars['option']->value,'field_name_prefix'=>$_smarty_tpl->tpl_vars['field_name_prefix']->value,'option_id'=>$_smarty_tpl->tpl_vars['option_id']->value), 0, true);
?>
                    <?php } else { ?>
                        <input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                               class="input-large"
                               type="text"
                               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                               value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['option']->value['selected_value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                        />
                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == "select") {?>
                    <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['variants'], 'variant', false, 'variant_id');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_id']->value => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['variant_id']->value == (($tmp = $_smarty_tpl->tpl_vars['option']->value['selected_value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] ?? null : $tmp)) {?>selected="selected"<?php }?>
                            ><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['variant']->value);?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['option']->value['notes']) {?>
                    <p class="muted description"><?php echo $_smarty_tpl->tpl_vars['option']->value['notes'];?>
</p>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['option']->value['description']) {?>
                    <p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['option']->value['description'],(($tmp = $_smarty_tpl->tpl_vars['option']->value['description_params'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
</p>
                <?php }?>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option', false, 'option_id');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_id']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <input type="hidden"
               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
               <?php if (is_array($_smarty_tpl->tpl_vars['option']->value)) {?>
                   value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['option']->value['selected_value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
               <?php } else { ?>
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option']->value, ENT_QUOTES, 'UTF-8');?>
"
               <?php }?>
        />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
