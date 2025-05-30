<?php
/* Smarty version 4.3.0, created on 2025-05-29 16:43:52
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\addons\components\addons\addon_full_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68386498b97bb6_32255115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '363e718987314684ee70b9040a3b1e90c05cebc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_full_info.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68386498b97bb6_32255115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('active','disabled','not_installed','na','na','verified','installed_version','addons.latest_version','installed_version','addons.latest_version','addons.latest_available_for_installation_version','installed_version','developer','addon_id','version','installed_date','developer','addon_id','status','installed_date'));
?>

<?php $_smarty_tpl->_assignInScope('ADDON_NAME_LIMIT', 50 ,false ,2);?>

<?php if ($_smarty_tpl->tpl_vars['addon']->value['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->_assignInScope('status_description', $_smarty_tpl->__("active"));
} elseif ($_smarty_tpl->tpl_vars['addon']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
    <?php $_smarty_tpl->_assignInScope('status_description', $_smarty_tpl->__("disabled"));
} elseif ($_smarty_tpl->tpl_vars['addon']->value['status'] === smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
    <?php $_smarty_tpl->_assignInScope('status_description', $_smarty_tpl->__("not_installed"));
}
$_smarty_tpl->_assignInScope('installed_version', $_smarty_tpl->tpl_vars['addon']->value['version']);
$_smarty_tpl->_assignInScope('latest_version', (($tmp = $_smarty_tpl->tpl_vars['addon']->value['latest_upgrade_version'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("na") ?? null : $tmp));
$_smarty_tpl->_assignInScope('actual_version', (($tmp = $_smarty_tpl->tpl_vars['addon']->value['actual_version'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("na") ?? null : $tmp));
ob_start();
echo $_smarty_tpl->__("verified");
$_prefixVariable22=ob_get_clean();
$_smarty_tpl->_assignInScope('verified_developer', $_smarty_tpl->tpl_vars['a']->value['identified'] || $_smarty_tpl->tpl_vars['a']->value['is_core_addon'] ? " (".$_prefixVariable22.")" : '');?>

<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_long_name'] = (mb_strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['a']->value['name'] ?: ''), 'UTF-8') > $_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT']->value);
$_smarty_tpl->_assignInScope('a', $_tmp_array ,false ,2);
$_tmp_array = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['short_name'] = (($tmp = smarty_modifier_truncate($_smarty_tpl->tpl_vars['a']->value['name'],$_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT']->value,"...",true) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value ?? null : $tmp);
$_smarty_tpl->_assignInScope('a', $_tmp_array ,false ,2);?>

<?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] || !$_smarty_tpl->tpl_vars['addon']->value['actual_version']) {?>
    <?php ob_start();
echo $_smarty_tpl->__("installed_version");
$_prefixVariable23=ob_get_clean();
$_smarty_tpl->_assignInScope('addon_full_version_info', $_prefixVariable23.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value) ,false ,2);?>

<?php } elseif ($_smarty_tpl->tpl_vars['actual_version']->value === $_smarty_tpl->tpl_vars['latest_version']->value) {?>
    <?php ob_start();
echo $_smarty_tpl->__("addons.latest_version");
$_prefixVariable24=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("installed_version");
$_prefixVariable25=ob_get_clean();
$_smarty_tpl->_assignInScope('addon_full_version_info', $_prefixVariable24.":
".((string)$_smarty_tpl->tpl_vars['actual_version']->value)."

".$_prefixVariable25.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value) ,false ,2);?>

<?php } else { ?>
    <?php ob_start();
echo $_smarty_tpl->__("addons.latest_version");
$_prefixVariable26=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("addons.latest_available_for_installation_version");
$_prefixVariable27=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("installed_version");
$_prefixVariable28=ob_get_clean();
$_smarty_tpl->_assignInScope('addon_full_version_info', $_prefixVariable26.":
".((string)$_smarty_tpl->tpl_vars['actual_version']->value)."

".$_prefixVariable27.":
".((string)$_smarty_tpl->tpl_vars['latest_version']->value)."

".$_prefixVariable28.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value) ,false ,2);?>

<?php }?>

<?php $_smarty_tpl->_assignInScope('install_datetime_format', smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['install_datetime'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])));?>

<?php if ($_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {
ob_start();
echo $_smarty_tpl->__("developer");
$_prefixVariable29=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("addon_id");
$_prefixVariable30=ob_get_clean();
$_smarty_tpl->_assignInScope('addon_full_description', ((string)$_smarty_tpl->tpl_vars['addon']->value['name'])."

".((string)(strip_tags((string) $_smarty_tpl->tpl_vars['addon']->value['description'])))."

".$_prefixVariable29.": ".((string)$_smarty_tpl->tpl_vars['a']->value['supplier']).((string)$_smarty_tpl->tpl_vars['verified_developer']->value)."
".$_prefixVariable30.": ".((string)$_smarty_tpl->tpl_vars['addon']->value['addon']) ,false ,2);
} else { ?>  
<?php ob_start();
echo $_smarty_tpl->__("version");
$_prefixVariable31=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("installed_date");
$_prefixVariable32=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("developer");
$_prefixVariable33=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("addon_id");
$_prefixVariable34=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("status");
$_prefixVariable35=ob_get_clean();
$_smarty_tpl->_assignInScope('addon_full_description', ((string)$_smarty_tpl->tpl_vars['addon']->value['name'])."

".((string)(strip_tags((string) $_smarty_tpl->tpl_vars['addon']->value['description'])))."

".$_prefixVariable31.": ".((string)((($tmp = $_smarty_tpl->tpl_vars['addon']->value['version'] ?? null)===null||$tmp==='' ? 0.1 ?? null : $tmp)))."
".$_prefixVariable32.": ".((string)$_smarty_tpl->tpl_vars['install_datetime_format']->value)."
".$_prefixVariable33.": ".((string)$_smarty_tpl->tpl_vars['a']->value['supplier']).((string)$_smarty_tpl->tpl_vars['verified_developer']->value)."
".$_prefixVariable34.": ".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])."
".$_prefixVariable35.": ".((string)$_smarty_tpl->tpl_vars['status_description']->value) ,false ,2);
}?>

<?php ob_start();
echo $_smarty_tpl->__("installed_date");
$_prefixVariable36=ob_get_clean();
$_smarty_tpl->_assignInScope('install_datetime_full_info', $_prefixVariable36.":
".((string)$_smarty_tpl->tpl_vars['install_datetime_format']->value) ,false ,2);
}
}
