<?php
/* Smarty version 4.3.0, created on 2025-03-24 02:15:59
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\common\select2\components\object_result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e122cfefdcd4_83211409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '674e7bc58322cf55f65155fd31c4f6e394abc4d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\common\\select2\\components\\object_result.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e122cfefdcd4_83211409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
<div class="object-selector-result-wrapper">
    <span class="object-selector-result">
        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
            <span class="object-selector-result__icon-wrapper">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icon']->value)." object-selector-result__icon"),$_smarty_tpl);?>

            </span>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content_pre']->value;?>

        <span class="object-selector-result__text"><span class="object-selector-result__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
</span> <span class="object-selector-result__body">[text]</span></span>
        <span class="object-selector-result__append">[append]</span>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </span>
    <?php if ($_smarty_tpl->tpl_vars['help']->value) {?>
        <div class="object-selector-result__help">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['help']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
</div>
<?php }
}
