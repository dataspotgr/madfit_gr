<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:03:04
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\companies\components\company_name.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6be803e4a4_88565309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b93c9dc152c4396922fe6891ee4bf647e21ed093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\companies\\components\\company_name.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6be803e4a4_88565309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('type', (($tmp = $_smarty_tpl->tpl_vars['type']->value ?? null)===null||$tmp==='' ? "default" ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_company_name', false);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:company_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:company_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'] && ($_smarty_tpl->tpl_vars['object']->value['company_id'] || $_smarty_tpl->tpl_vars['object']->value['company_name'])) {?>
    <?php if (!$_smarty_tpl->tpl_vars['object']->value['company_name']) {?>
        <?php $_smarty_tpl->_assignInScope('_company_name', fn_get_company_name($_smarty_tpl->tpl_vars['object']->value['company_id']));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_hidden_input']->value) {?>
        <?php $_smarty_tpl->_assignInScope('show_company_name', true);?>
        <input type="hidden" id="company_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" id="company_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['object']->value['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] !== smarty_modifier_enum("UserTypes::VENDOR")) {?>
        <?php $_smarty_tpl->_assignInScope('show_company_name', true);?>
        <?php if ($_smarty_tpl->tpl_vars['type']->value === "basic") {?>
            <span class="company-name <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['object']->value['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value === "simple" || $_smarty_tpl->tpl_vars['simple']->value) {?>
            <small class="muted company-name <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['object']->value['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
        <?php } else { ?>
                        <p class="muted company-name <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><small><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['object']->value['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</small></p>
        <?php }?>
    <?php }
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:company_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('show_company_name', $_smarty_tpl->tpl_vars['show_company_name']->value ,false ,2);
}
}
