<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:30:30
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\storefronts\components\status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f18e6a56158_53426946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6025ee08100f401ca8531efa53c0988154b819a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\storefronts\\components\\status.tpl',
      1 => 1747915843,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/switcher.tpl' => 1,
  ),
),false)) {
function content_682f18e6a56158_53426946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('storefront_status','storefront_status.tooltip','ttc_stores_status'));
?>

<?php $_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "storefront_data[status]" ?? null : $tmp));?>

<div class="control-group">
    <label for="status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("storefront_status");?>

    </label>
    <div class="controls">
        <input type="hidden"
               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
"
        />

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checked'=>$_smarty_tpl->tpl_vars['status']->value === smarty_modifier_enum("StorefrontStatuses::OPEN"),'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value),'input_value'=>smarty_modifier_enum("StorefrontStatuses::OPEN"),'input_id'=>"status_".((string)$_smarty_tpl->tpl_vars['id']->value),'meta'=>$_smarty_tpl->tpl_vars['meta']->value,'extra_attrs'=>$_smarty_tpl->tpl_vars['extra_attrs']->value), 0, false);
?>

        <p>
            <?php echo $_smarty_tpl->__("storefront_status.tooltip");?>

        </p>

        <p class="muted description"><?php echo $_smarty_tpl->__("ttc_stores_status");?>
</p>
    </div>
</div>
<?php }
}
