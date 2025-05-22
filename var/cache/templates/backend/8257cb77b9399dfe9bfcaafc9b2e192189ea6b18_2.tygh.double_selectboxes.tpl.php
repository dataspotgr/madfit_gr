<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:30:36
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\double_selectboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f18ec51d178_83522256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8257cb77b9399dfe9bfcaafc9b2e192189ea6b18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\double_selectboxes.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_682f18ec51d178_83522256 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('multiple_selectbox_notice'));
$_smarty_tpl->_assignInScope('first_id', uniqid(''));
$_smarty_tpl->_assignInScope('second_id', uniqid(''));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>
<div class="table-wrapper">
    <table class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_name']->value, ENT_QUOTES, 'UTF-8');?>
" width="100%">
    <tr>
        <td width="48%">
            <label for="id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['required']->value) {?>cm-required<?php }?> cm-all hidden"></label>
            <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
" size="10" value="" multiple="multiple" class="input-full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['first_data']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>

            <?php if ($_smarty_tpl->tpl_vars['sortable']->value) {?>
            <p>
                <span onclick="Tygh.$('#id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
').swapOptions('up');" class="icon-chevron-up hand" ></span>
                <span onclick="Tygh.$('#id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
').swapOptions('down');" class="icon-chevron-down hand" ></span>
            </p>
            <?php }?>
        </td>
        <td class="center chevron-icons" width="4%">
                <span onclick="Tygh.$('#id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['second_id']->value, ENT_QUOTES, 'UTF-8');?>
').moveOptions('#id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="icon-chevron-left hand clear"></span><br/>
                <span onclick="Tygh.$('#id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
').moveOptions('#id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['second_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="icon-chevron-right hand"></span>
        </td>
        <td width="48%" valign="top">
            <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['second_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['second_id']->value, ENT_QUOTES, 'UTF-8');?>
" size="10" value="" multiple="multiple" class="input-full">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['second_data']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </td>
    </tr>
    </table>
</div>
<div class="muted description"><?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>
</div>
<?php }
}
