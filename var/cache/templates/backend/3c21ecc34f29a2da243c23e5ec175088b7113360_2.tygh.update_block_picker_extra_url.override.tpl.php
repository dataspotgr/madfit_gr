<?php
/* Smarty version 4.3.0, created on 2025-03-24 06:18:16
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\blog\hooks\block_manager\update_block_picker_extra_url.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e15b98328fb4_72145807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c21ecc34f29a2da243c23e5ec175088b7113360' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\blog\\hooks\\block_manager\\update_block_picker_extra_url.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e15b98328fb4_72145807 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch'] == "pages.view?page_type=".((string)(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null))) {?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>
&page_type=<?php echo htmlspecialchars((string) (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null), ENT_QUOTES, 'UTF-8');?>

<?php }
}
}
