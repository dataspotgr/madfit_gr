<?php
/* Smarty version 4.3.0, created on 2025-05-22 16:50:19
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\social_buttons\providers\twitter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f2b9b9a7ee3_31452292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6336b97c0147d5483a0a725a41968b11f934a1da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\social_buttons\\providers\\twitter.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f2b9b9a7ee3_31452292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['twitter_enable'] == "Y" && $_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"social_buttons:twitter"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"social_buttons:twitter"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<a href="https://twitter.com/share" class="twitter-share-button" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data'];?>
>Tweet</a>
<div hidden
    data-ca-social-buttons="twitter"
    data-ca-social-buttons-src="//platform.twitter.com/widgets.js"></div>
<?php echo smarty_function_script(array('src'=>"js/addons/social_buttons/providers/twitter.js",'class'=>"cm-ajax-force",'cookie-name'=>"twitter"),$_smarty_tpl);?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"social_buttons:twitter"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/twitter.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/twitter.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['twitter_enable'] == "Y" && $_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"social_buttons:twitter"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"social_buttons:twitter"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<a href="https://twitter.com/share" class="twitter-share-button" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['twitter']['data'];?>
>Tweet</a>
<div hidden
    data-ca-social-buttons="twitter"
    data-ca-social-buttons-src="//platform.twitter.com/widgets.js"></div>
<?php echo smarty_function_script(array('src'=>"js/addons/social_buttons/providers/twitter.js",'class'=>"cm-ajax-force",'cookie-name'=>"twitter"),$_smarty_tpl);?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"social_buttons:twitter"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
