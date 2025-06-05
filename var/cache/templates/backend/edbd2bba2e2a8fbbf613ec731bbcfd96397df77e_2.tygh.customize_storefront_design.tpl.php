<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-30 09:48:05
=======
/* Smarty version 4.3.0, created on 2025-05-23 13:44:56
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\onboarding_guide\steps\customize_storefront_design.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683954a5aa9ce9_26874957',
=======
  'unifunc' => 'content_683051a8c9b966_25429591',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edbd2bba2e2a8fbbf613ec731bbcfd96397df77e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\customize_storefront_design.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996596,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_683954a5aa9ce9_26874957 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683051a8c9b966_25429591 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.sb_make_changes_on_the_fly_description','onboarding_guide.make_changes_on_the_fly_description','onboarding_guide.modify_colors_fonts_backgrounds','onboarding_guide.edit_texts','onboarding_guide.edit_blocks'));
?>
<div class="onboarding_content_margin--bottom_x2">
    <span class="onboarding_section__progress_text">
        <?php if ((!empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>
            <?php echo $_smarty_tpl->__("onboarding_guide.sb_make_changes_on_the_fly_description");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("onboarding_guide.make_changes_on_the_fly_description");?>

        <?php }?>
    </span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
    <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.customize_storefront?type=theme_editor"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary og-action" data-og-action="edit_style" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.modify_colors_fonts_backgrounds");?>
 ↗</a>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
    <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.customize_storefront?type=live_editor"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary og-action" data-og-action="edit_texts" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.edit_texts");?>
 ↗</a>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
    <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.customize_storefront?type=block_manager"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary og-action" data-og-action="edit_blocks" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.edit_blocks");?>
 ↗</a>
</div>
<?php }
}
