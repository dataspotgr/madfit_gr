<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:54:27
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\multiple_checkboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683061f326f7c9_93698268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97893dbcf4bed8bbae5455e309b74b01cf89e0f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\multiple_checkboxes.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683061f326f7c9_93698268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'k');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['id_field']->value) {?>
        <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['id_field']->value]);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['k']->value);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['name_field']->value) {?>
        <?php $_smarty_tpl->_assignInScope('item_name', $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name_field']->value]);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('item_name', $_smarty_tpl->tpl_vars['item']->value);?>
    <?php }?>

    <label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input 
            type="checkbox" 
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
]" 
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['item_ids']->value)) {?>
                checked="checked"
            <?php }?> 
        />
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>

    </label>
<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
    <?php echo $_smarty_tpl->__("no_items");?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
