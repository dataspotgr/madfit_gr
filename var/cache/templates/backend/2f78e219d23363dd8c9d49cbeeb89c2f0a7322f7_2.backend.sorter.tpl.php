<?php
/* Smarty version 4.3.0, created on 2025-05-28 14:47:41
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\debugger\components\sorter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6836f7dda90f07_77980692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f78e219d23363dd8c9d49cbeeb89c2f0a7322f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\debugger\\components\\sorter.tpl',
      1 => 1743766598,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6836f7dda90f07_77980692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ($_smarty_tpl->tpl_vars['field']->value != $_smarty_tpl->tpl_vars['order_by']->value) {?>
    <?php $_smarty_tpl->_assignInScope('direction', "none");?>
    <?php $_smarty_tpl->_assignInScope('order_direction', "asc");
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['direction']->value == "asc") {?>
        <?php $_smarty_tpl->_assignInScope('order_direction', "desc");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('order_direction', "asc");?>
    <?php }
}?>
<a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['url']->value)."?order_by=".((string)$_smarty_tpl->tpl_vars['field']->value).",".((string)$_smarty_tpl->tpl_vars['order_direction']->value)."&debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['direction']->value == "none") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"icon-asc"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"icon-desc",'data'=>array('style'=>"margin-left: -2px;")),$_smarty_tpl);
} else {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>$_smarty_tpl->tpl_vars['order_direction']->value),$_smarty_tpl);
}?></a>
<?php }
}
