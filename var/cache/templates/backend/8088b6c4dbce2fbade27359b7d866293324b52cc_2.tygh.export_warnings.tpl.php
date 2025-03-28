<?php
/* Smarty version 4.3.0, created on 2025-03-26 15:53:31
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\views\product_variations\components\export_warnings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e406db753f59_79233063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8088b6c4dbce2fbade27359b7d866293324b52cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\export_warnings.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e406db753f59_79233063 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('close'));
?>
<div>
     <div class="table-responsive-wrapper">
        <table width="100%" class="table table-no-hover table--relative table-responsive table-responsive-w-titles">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                <tr class="no-border">
                    <td data-th="&nbsp;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <div>
        <a class="btn cm-notification-close pull-right"><?php echo $_smarty_tpl->__("close");?>
</a>
    </div>
</div><?php }
}
