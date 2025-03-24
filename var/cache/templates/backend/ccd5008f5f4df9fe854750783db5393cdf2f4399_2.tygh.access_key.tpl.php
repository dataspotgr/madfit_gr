<?php
/* Smarty version 4.3.0, created on 2025-03-20 00:34:28
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\storefronts\components\access_key.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbc5045dee81_76946191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccd5008f5f4df9fe854750783db5393cdf2f4399' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\storefronts\\components\\access_key.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dbc5045dee81_76946191 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('storefront_access_key'));
?>

<?php $_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "storefront_data[access_key]" ?? null : $tmp));?>

<div class="control-group">
    <label for="access_key_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("storefront_access_key");?>

    </label>
    <div class="controls">
        <input type="text"
               id="access_key_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="input-large"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>
<?php }
}
