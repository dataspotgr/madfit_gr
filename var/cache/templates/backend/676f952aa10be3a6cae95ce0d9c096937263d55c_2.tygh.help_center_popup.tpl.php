<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:26:26
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\help_center\component\help_center_popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f17f2218bf4_77685506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '676f952aa10be3a6cae95ce0d9c096937263d55c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\help_center\\component\\help_center_popup.tpl',
      1 => 1747915842,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/views/help_center/manage.tpl' => 1,
  ),
),false)) {
function content_682f17f2218bf4_77685506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('help_center.growth_center','help_center.growth_center'));
$_smarty_tpl->_assignInScope('help_center_counter', (($tmp = $_smarty_tpl->tpl_vars['help_center_counter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<button type="button"
    class="cm-dialog-opener top-bar__btn help-center-popup__btn"
    id="opener_help_center_popup" 
    title="<?php echo $_smarty_tpl->__("help_center.growth_center");?>
"
    data-ca-target-id="content_help_center_popup"
    data-ca-max-width="1120"
    data-ca-help-center="popupBtn"
>
    <span class="top-bar__btn-inner">
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"question",'class'=>"help-center-popup__icon",'title'=>$_smarty_tpl->__("help_center.growth_center"),'data'=>array("data-ca-help-center-counter"=>$_smarty_tpl->tpl_vars['help_center_counter']->value)),$_smarty_tpl);?>

    </span>
</button>
<div class="hidden help-center-popup" data-ca-help-center="popupContent" id="content_help_center_popup">
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/views/help_center/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('in_popup'=>true), 0, false);
?>
</div>
<?php }
}
