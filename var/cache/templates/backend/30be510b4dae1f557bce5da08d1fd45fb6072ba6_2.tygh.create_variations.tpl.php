<?php
/* Smarty version 4.3.0, created on 2025-03-24 02:16:23
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\views\product_variations\create_variations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e122e72a4066_27087685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30be510b4dae1f557bce5da08d1fd45fb6072ba6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\create_variations.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/generate_variations.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_67e122e72a4066_27087685 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.create_new','product_variations.link_existing','cancel','product_variations.generator.create_btn'));
$_smarty_tpl->_assignInScope('tabs_count', $_smarty_tpl->tpl_vars['is_allow_generate_variations']->value ? 2 : 1);?>

<div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <?php if ($_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>
            <li id="tab_create_new_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-js active">
                <a><?php echo $_smarty_tpl->__("product_variations.create_new");?>
</a>
            </li>
        <?php }?>
        <li id="tab_link_existing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-js cm-ajax <?php if (!$_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>active<?php }?>">
            <a href="<?php echo htmlspecialchars((string) fn_url("product_variations.find_variations?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("product_variations.link_existing");?>
</a>
        </li>
    </ul>
</div>
<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>
        <div id="content_tab_create_new_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/generate_variations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    <?php }?>
    <div id="content_tab_link_existing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">&nbsp;
    <!--content_tab_link_existing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
</div>
<div class="buttons-container product-variations__add-variations-buttons-container">
    <div>
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>
        <div class="cm-tab-tools tab-tools" id="tools_tab_create_new_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['new_combinations_count']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("product_variations.generator.create_btn",array($_smarty_tpl->tpl_vars['new_combinations_count']->value)),'but_role'=>"submit-link",'but_name'=>"dispatch[product_variations.generate]",'but_meta'=>"btn-primary",'but_target_form'=>"generate_product_to_group_form"), 0, false);
?>
            <?php }?>
        <!--tools_tab_create_new_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
    <div class="cm-tab-tools tab-tools" id="tools_tab_link_existing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <!--tools_tab_link_existing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
</div>
<?php }
}
