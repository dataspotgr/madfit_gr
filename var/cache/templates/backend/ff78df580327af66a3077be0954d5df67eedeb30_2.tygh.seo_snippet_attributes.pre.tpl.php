<?php
/* Smarty version 4.3.0, created on 2025-04-25 14:07:36
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\seo\addons\discussion\hooks\products\seo_snippet_attributes.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b6cf89e35f4_01764139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff78df580327af66a3077be0954d5df67eedeb30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\seo\\addons\\discussion\\hooks\\products\\seo_snippet_attributes.pre.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b6cf89e35f4_01764139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('seo.rich_snippets_rating','seo.rich_snippets_reviews'));
if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['average_rating']) {?>

<?php $_smarty_tpl->_assignInScope('stars', fn_get_discussion_rating($_smarty_tpl->tpl_vars['discussion']->value['average_rating']));?>
<p class="nowrap gstars">
    <?php
$__section_full_star_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['stars']->value['full']) ? count($_loop) : max(0, (int) $_loop));
$__section_full_star_0_total = $__section_full_star_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_full_star'] = new Smarty_Variable(array());
if ($__section_full_star_0_total !== 0) {
for ($__section_full_star_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index'] = 0; $__section_full_star_0_iteration <= $__section_full_star_0_total; $__section_full_star_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index']++){
echo smarty_function_include_ext(array('file'=>"common/icon_deprecated.tpl",'class'=>"gicon-star"),$_smarty_tpl);
}
}
?>
    <?php if ($_smarty_tpl->tpl_vars['stars']->value['part']) {
echo smarty_function_include_ext(array('file'=>"common/icon_deprecated.tpl",'class'=>"gicon-star-half"),$_smarty_tpl);
}?>
    <?php
$__section_full_star_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['stars']->value['empty']) ? count($_loop) : max(0, (int) $_loop));
$__section_full_star_1_total = $__section_full_star_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_full_star'] = new Smarty_Variable(array());
if ($__section_full_star_1_total !== 0) {
for ($__section_full_star_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index'] = 0; $__section_full_star_1_iteration <= $__section_full_star_1_total; $__section_full_star_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_full_star']->value['index']++){
echo smarty_function_include_ext(array('file'=>"common/icon_deprecated.tpl",'class'=>"gicon-star-empty"),$_smarty_tpl);
}
}
?>
</p>
&nbsp;<?php echo $_smarty_tpl->__("seo.rich_snippets_rating");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion']->value['average_rating'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->__("seo.rich_snippets_reviews",array($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']));?>
 - <?php }?>‎
<?php }
}
