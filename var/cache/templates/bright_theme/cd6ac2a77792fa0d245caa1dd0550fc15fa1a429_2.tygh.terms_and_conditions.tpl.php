<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:50:47
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\blocks\lite_checkout\terms_and_conditions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2bb7c36845_62902065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd6ac2a77792fa0d245caa1dd0550fc15fa1a429' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\blocks\\lite_checkout\\terms_and_conditions.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/terms_and_conditions.tpl' => 2,
  ),
),false)) {
function content_682f2bb7c36845_62902065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__container">
    <?php $_smarty_tpl->_assignInScope('const_suffix', (($tmp = $_smarty_tpl->tpl_vars['suffix']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
    <?php if (!$_smarty_tpl->tpl_vars['suffix']->value) {?>
        <?php $_smarty_tpl->_assignInScope('suffix', uniqid(''));?>
    <?php }?>

    <div class="litecheckout__item">
        <div class="litecheckout__terms" id="litecheckout_terms">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/terms_and_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('suffix'=>$_smarty_tpl->tpl_vars['suffix']->value,'const_suffix'=>$_smarty_tpl->tpl_vars['const_suffix']->value), 0, false);
?>
        <!--litecheckout_terms--></div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/terms_and_conditions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/terms_and_conditions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__container">
    <?php $_smarty_tpl->_assignInScope('const_suffix', (($tmp = $_smarty_tpl->tpl_vars['suffix']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
    <?php if (!$_smarty_tpl->tpl_vars['suffix']->value) {?>
        <?php $_smarty_tpl->_assignInScope('suffix', uniqid(''));?>
    <?php }?>

    <div class="litecheckout__item">
        <div class="litecheckout__terms" id="litecheckout_terms">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/terms_and_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('suffix'=>$_smarty_tpl->tpl_vars['suffix']->value,'const_suffix'=>$_smarty_tpl->tpl_vars['const_suffix']->value), 0, true);
?>
        <!--litecheckout_terms--></div>
    </div>
</div>
<?php }
}
}
