<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-06-02 12:15:17
=======
/* Smarty version 4.3.0, created on 2025-05-26 16:05:06
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\table_tools_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683d6ba5e05f83_96607875',
=======
  'unifunc' => 'content_68346702a5fda6_62346098',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85e43deb61e28e5c1372d3791fc25665f01dbbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\table_tools_list.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996630,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_683d6ba5e05f83_96607875 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_68346702a5fda6_62346098 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('view','edit'));
if ($_smarty_tpl->tpl_vars['popup']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['skip_check_permissions']->value || fn_check_view_permissions($_smarty_tpl->tpl_vars['href']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value,'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'act'=>$_smarty_tpl->tpl_vars['act']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'link_class'=>$_smarty_tpl->tpl_vars['link_class']->value), 0, false);
?>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['href']->value) {
$_smarty_tpl->_assignInScope('_href', fn_url($_smarty_tpl->tpl_vars['href']->value));
if (!fn_check_view_permissions($_smarty_tpl->tpl_vars['_href']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('link_text', $_smarty_tpl->__("view"));
}?>

<?php if ($_smarty_tpl->tpl_vars['act']->value == "link") {?>
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['link_extra']->value;?>
 class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-tooltip"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
<?php } else { ?>
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['link_extra']->value;?>
 class="icon-edit <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-tooltip" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['link_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("edit") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"></a>
<?php }?>

<?php }
if ($_smarty_tpl->tpl_vars['skip_check_permissions']->value || fn_check_view_permissions($_smarty_tpl->tpl_vars['tools_list']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['tools_list']->value;?>

<?php }
}
}
