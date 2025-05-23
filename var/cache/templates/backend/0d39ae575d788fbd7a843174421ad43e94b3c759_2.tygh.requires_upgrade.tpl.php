<?php
/* Smarty version 4.3.0, created on 2025-05-23 14:37:43
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\addons\components\notification\requires_upgrade.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68305e07c65023_36801094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d39ae575d788fbd7a843174421ad43e94b3c759' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\addons\\components\\notification\\requires_upgrade.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_68305e07c65023_36801094 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('requires_upgrade','new_add_on_is_not_compatible_with_your_product','upgrade_and_update_addon'));
if ($_smarty_tpl->tpl_vars['actual_change_log']->value && $_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility'] !== true) {?>
    <div class="alert alert-block">
        <h4>
            <?php echo $_smarty_tpl->__("requires_upgrade",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>

        </h4>

        <p>
            <?php echo $_smarty_tpl->__("new_add_on_is_not_compatible_with_your_product",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null),"[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility']));?>

        </p>
        <p>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"upgrade_center.manage",'but_role'=>"action",'but_meta'=>"btn-primary",'but_text'=>$_smarty_tpl->__("upgrade_and_update_addon",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)))), 0, false);
?>
        </p>
    </div>
<?php }
}
}
