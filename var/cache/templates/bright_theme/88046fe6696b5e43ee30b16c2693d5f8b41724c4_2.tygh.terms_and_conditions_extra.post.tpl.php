<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:50:51
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\gdpr\hooks\checkout\terms_and_conditions_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2bbb415df2_59201399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88046fe6696b5e43ee30b16c2693d5f8b41724c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\gdpr\\hooks\\checkout\\terms_and_conditions_extra.post.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gdpr/componentes/agreement_checkbox.tpl' => 4,
  ),
),false)) {
function content_682f2bbb415df2_59201399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_agreement', false);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "agreement_contents", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <?php $_smarty_tpl->_assignInScope('onclick', "fn_check_agreements('".((string)$_smarty_tpl->tpl_vars['suffix']->value)."');");?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"checkout_place_order",'onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'suffix'=>$_smarty_tpl->tpl_vars['suffix']->value,'const_suffix'=>$_smarty_tpl->tpl_vars['const_suffix']->value,'agreement_required'=>true), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['show_agreement']->value) {?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'agreement_contents');?>

        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->_assignInScope('show_agreement', false);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "agreement_contents_profiles_update", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <?php $_smarty_tpl->_assignInScope('onclick', "fn_check_agreements('".((string)$_smarty_tpl->tpl_vars['suffix']->value)."');");?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"checkout_profiles_update",'onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'suffix'=>$_smarty_tpl->tpl_vars['suffix']->value,'const_suffix'=>$_smarty_tpl->tpl_vars['const_suffix']->value,'agreement_required'=>true), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['show_agreement']->value) {?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'agreement_contents_profiles_update');?>

        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/checkout/terms_and_conditions_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/hooks/checkout/terms_and_conditions_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_agreement', false);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "agreement_contents", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <?php $_smarty_tpl->_assignInScope('onclick', "fn_check_agreements('".((string)$_smarty_tpl->tpl_vars['suffix']->value)."');");?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"checkout_place_order",'onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'suffix'=>$_smarty_tpl->tpl_vars['suffix']->value,'const_suffix'=>$_smarty_tpl->tpl_vars['const_suffix']->value,'agreement_required'=>true), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['show_agreement']->value) {?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'agreement_contents');?>

        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->_assignInScope('show_agreement', false);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "agreement_contents_profiles_update", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <?php $_smarty_tpl->_assignInScope('onclick', "fn_check_agreements('".((string)$_smarty_tpl->tpl_vars['suffix']->value)."');");?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"checkout_profiles_update",'onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'suffix'=>$_smarty_tpl->tpl_vars['suffix']->value,'const_suffix'=>$_smarty_tpl->tpl_vars['const_suffix']->value,'agreement_required'=>true), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['show_agreement']->value) {?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'agreement_contents_profiles_update');?>

        </div>
    </div>
<?php }
}
}
}
