<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:03:11
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\buttons\helpdesk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6befa74777_85986871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756b34b4734f10fa69eeef3e9510fbfed2158a13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\buttons\\helpdesk.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6befa74777_85986871 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('helpdesk_account.sign_in'));
$_smarty_tpl->_assignInScope('btn_text', (($tmp = $_smarty_tpl->tpl_vars['btn_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("helpdesk_account.sign_in") ?? null : $tmp));
$_smarty_tpl->_assignInScope('btn_href', (($tmp = $_smarty_tpl->tpl_vars['btn_href']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["helpdesk.connect_url"] ?? null : $tmp));?>
<a class="btn btn-primary <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['btn_class']->value, ENT_QUOTES, 'UTF-8');?>
"
   href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['btn_href']->value), ENT_QUOTES, 'UTF-8');?>
"
>
    <span class="btn__icon btn__icon--with-text">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 5.10759V13.1026C15 14.0624 14.214 14.8401 13.2438 14.8401H5.16263C4.19241 14.8401 3.4064 14.0624 3.4064 13.1026V5.10759C3.4064 4.14771 4.19241 3.37008 5.16263 3.37008H13.2438C14.214 3.37008 15 4.14771 15 5.10759ZM1.75623 0C0.786007 0 0 0.777626 0 1.73751C0 2.69739 0.786007 3.47502 1.75623 3.47502C2.72646 3.47502 3.51247 2.69739 3.51247 1.73751C3.51247 0.777626 2.72646 0 1.75623 0Z" fill="white"/>
        </svg>
    </span>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['btn_text']->value, ENT_QUOTES, 'UTF-8');?>

</a>
<?php }
}
