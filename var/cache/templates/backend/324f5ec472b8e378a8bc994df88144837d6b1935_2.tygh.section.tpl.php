<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:35:13
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea53c1e33185_14791816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '324f5ec472b8e378a8bc994df88144837d6b1935' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\section.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ea53c1e33185_14791816 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('close'));
$_smarty_tpl->_assignInScope('rnd', rand());?>
<div class="clear" id="ds_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="section-border">
        <?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['section_state']->value) {?>
            <p align="right">
                <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"close_section=".((string)$_smarty_tpl->tpl_vars['key']->value))), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("close");?>
</a>
            </p>
        <?php }?>
    </div>
</div><?php }
}
