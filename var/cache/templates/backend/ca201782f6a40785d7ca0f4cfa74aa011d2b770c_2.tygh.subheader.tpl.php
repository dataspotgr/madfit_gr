<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:44:14
=======
/* Smarty version 4.3.0, created on 2025-05-26 09:40:25
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\subheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683864ae7067c9_49770985',
=======
  'unifunc' => 'content_68340cd9ab2ae6_93199990',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca201782f6a40785d7ca0f4cfa74aa011d2b770c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\subheader.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996629,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/help.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_683864ae7067c9_49770985 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_68340cd9ab2ae6_93199990 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ($_smarty_tpl->tpl_vars['notes']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->tpl_vars['notes']->value,'id'=>$_smarty_tpl->tpl_vars['notes_id']->value), 0, false);
}?>
<h4 class="subheader <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['target']->value) {?> hand<?php }?>" <?php if ($_smarty_tpl->tpl_vars['target']->value) {?>data-toggle="collapse" data-target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?><small class="muted"> #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8');?>
</small><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['target']->value) {?><span class="flex-inline top"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_down",'class'=>"subheader__icon"),$_smarty_tpl);?>
</span><?php }?>
</h4>
<?php }
}
