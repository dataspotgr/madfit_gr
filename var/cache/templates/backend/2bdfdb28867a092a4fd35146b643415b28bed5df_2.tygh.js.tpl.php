<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:20:38
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\banners\pickers\banners\js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68305a06bcb711_55841589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bdfdb28867a092a4fd35146b643415b28bed5df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\banners\\pickers\\banners\\js.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68305a06bcb711_55841589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('position_short','name','delete'));
if ($_smarty_tpl->tpl_vars['banner_id']->value == "0") {?>
    <?php $_smarty_tpl->_assignInScope('banner', $_smarty_tpl->tpl_vars['default_name']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('banner', (($tmp = fn_get_banner_name($_smarty_tpl->tpl_vars['banner_id']->value) ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."banner".((string)$_smarty_tpl->tpl_vars['rdelim']->value) ?? null : $tmp));
}?>

<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?>
        <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
            <input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-micro" <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>disabled="disabled"<?php }?> />
        </td>
    <?php }?>
    <td data-th="<?php echo $_smarty_tpl->__("name");?>
"><a href="<?php echo htmlspecialchars((string) fn_url("banners.update?banner_id=".((string)$_smarty_tpl->tpl_vars['banner_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value, ENT_QUOTES, 'UTF-8');?>
</a></td>
    <td data-th="&nbsp;">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value && !$_smarty_tpl->tpl_vars['view_only']->value) {?>
                <li><a onclick="Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'b'); return false;"><?php echo $_smarty_tpl->__("delete");?>
</a></li>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <div class="hidden-tools">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        </div>
    </td>
</tr><?php }
}
