<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:26:47
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\onboarding_guide\steps\manage_product_catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f1807ecc113_33979256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2b5923a4a79fe75201cfd9ca783b338f5a394df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\manage_product_catalog.tpl',
      1 => 1747915842,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f1807ecc113_33979256 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.sb_manage_products_description','onboarding_guide.manage_products_description','onboarding_guide.add_one_product','onboarding_guide.import_csv_or_xml','onboarding_guide.view_product_page_description','onboarding_guide.premoderation','onboarding_guide.view_product_page'));
?>
<div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text">
        <?php if ((!empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>
            <?php echo $_smarty_tpl->__("onboarding_guide.sb_manage_products_description");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("onboarding_guide.manage_products_description");?>

        <?php }?>
    </span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2 <?php if (!$_smarty_tpl->tpl_vars['data']->value['products_available']) {?>og-step-complete<?php }?>">
    <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.open_vendor_panel?redirect=products.add"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary" data-og-action="edit_style" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.add_one_product");?>
 ↗</a>
    <a href="<?php ob_start();
echo htmlspecialchars((string) urlencode("import_presets.add&object_type=products"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
echo htmlspecialchars((string) fn_url("onboarding_guide.open_vendor_panel?redirect=".$_prefixVariable3), ENT_QUOTES, 'UTF-8');?>
" class="btn" data-og-action="edit_structure" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.import_csv_or_xml");?>
 ↗</a>
</div>

<?php if ($_smarty_tpl->tpl_vars['data']->value['products_available']) {?>
    <div class="onboarding_content_margin--bottom">
        <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.view_product_page_description");?>
</span>
    </div>

    <div class="onboarding_section__action_block onboarding_content_margin--bottom og-step-complete">
        <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.preview_last_product"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary cm-tooltip" target="_blank" <?php if ((empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>title="<?php echo htmlspecialchars((string) htmlspecialchars_decode($_smarty_tpl->__("onboarding_guide.premoderation"), ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
"<?php }?> ><?php echo $_smarty_tpl->__("onboarding_guide.view_product_page");?>
 ↗</a>
    </div>
<?php }
}
}
