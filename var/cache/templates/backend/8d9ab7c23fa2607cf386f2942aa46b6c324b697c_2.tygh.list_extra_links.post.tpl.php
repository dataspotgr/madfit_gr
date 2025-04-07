<?php
/* Smarty version 4.3.0, created on 2025-04-04 16:08:34
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\gdpr\hooks\profiles\list_extra_links.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67efd9d2522ff7_58671475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d9ab7c23fa2607cf386f2942aa46b6c324b697c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\gdpr\\hooks\\profiles\\list_extra_links.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67efd9d2522ff7_58671475 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.text_anonymize_question','gdpr.anonymize'));
if ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "C" && $_smarty_tpl->tpl_vars['user']->value['anonymized'] != "Y") {?>
    <li><?php ob_start();
echo $_smarty_tpl->__("gdpr.text_anonymize_question");
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("gdpr.anonymize"),'href'=>"profiles.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_prefixVariable4),'method'=>"POST"), true);?>
</li>
<?php }
}
}
