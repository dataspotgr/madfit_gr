<?php
/* Smarty version 4.3.0, created on 2025-03-31 11:45:34
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\views\product_variations\components\generate_variations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67ea562e179af9_72246874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87e500f6596facd7965a194b79ab4de7609936ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\generate_variations.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/product_features/components/picker/picker.tpl' => 1,
    'tygh:views/product_features/components/variants_picker/picker.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:common/check_items.tpl' => 1,
    'tygh:addons/product_variations/views/product_variations/components/combination_item.tpl' => 2,
  ),
),false)) {
function content_67ea562e179af9_72246874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.generator.features.placeholder','product_variations.add_all_variants','product_variations.generator.feature_variants.placeholder','delete','product_variations.generator.warning.new_features_add','product_variations.no_available_features','product_variations.too_many_combinations_display','product_variations.generator.table.title','features','name','sku','price','quantity','product_variations.too_many_combinations_display'));
echo smarty_function_script(array('src'=>"js/addons/product_variations/tygh/backend/generator.js?ver=1.2"),$_smarty_tpl);?>


<div id="generate_variations_container">
    <div class="cm-variations-generator product-variations__generator"
        data-ca-container-id="generate_variations_container"
        data-ca-features-container-id="generate_variations_container__features_container"
        data-ca-combinations-container-id="generate_variations__combinations_container"
        data-ca-buttons-container-id="tools_tab_create_new_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-quick-add-feature-selector="#product_variations_quick_add_feature"
    >
        <?php if (!$_smarty_tpl->tpl_vars['group']->value) {?>
            <?php $_smarty_tpl->_assignInScope('purpose_group_catalog_item', constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_CATALOG_ITEM"));?>
            <?php $_smarty_tpl->_assignInScope('purpose_group_variation_catalog_item', constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"));?>

            <div class="control-toolbar">
                <div class="control-toolbar__btns cm-variations-generator__features" id="variations_generator_features">
                    <div class="control-toolbar__btns-center">
                        <?php $_smarty_tpl->_assignInScope('search_data', array("product_id"=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],"filter_category_ids"=>$_smarty_tpl->tpl_vars['product_data']->value['category_ids'],"purpose"=>array()));?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['search_data']) ? $_smarty_tpl->tpl_vars['search_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["purpose"][] = $_smarty_tpl->tpl_vars['purpose_group_catalog_item']->value;
$_smarty_tpl->_assignInScope('search_data', $_tmp_array);?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['search_data']) ? $_smarty_tpl->tpl_vars['search_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["purpose"][] = $_smarty_tpl->tpl_vars['purpose_group_variation_catalog_item']->value;
$_smarty_tpl->_assignInScope('search_data', $_tmp_array);?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['search_data']) ? $_smarty_tpl->tpl_vars['search_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["exclude_feature_ids"] = $_smarty_tpl->tpl_vars['feature_ids']->value;
$_smarty_tpl->_assignInScope('search_data', $_tmp_array);?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['search_data']) ? $_smarty_tpl->tpl_vars['search_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["get_only_available"] = true;
$_smarty_tpl->_assignInScope('search_data', $_tmp_array);?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('empty_variant_text'=>$_smarty_tpl->__("product_variations.generator.features.placeholder"),'search_data'=>$_smarty_tpl->tpl_vars['search_data']->value,'multiple'=>true,'hide_selection'=>true,'close_on_select'=>false,'meta'=>"object-picker--product-variations-features control-toolbar__select",'allow_add'=>true,'create_option_to_end'=>"true"), 0, false);
?>
                    </div>
                </div>
                <div class="control-toolbar__panel">
                    <div id="product_variations_quick_add_feature"
                        data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-target-id="generate_variations_container__features_container"
                        data-ca-inline-dialog-action-context="product_variation_generator"
                        data-ca-inline-dialog-url="<?php ob_start();
echo htmlspecialchars((string) http_build_query(array("category_ids"=>array_values((($tmp = $_smarty_tpl->tpl_vars['product_data']->value['category_ids'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp)))), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string) fn_url("product_features.quick_add?category_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['main_category'])."&".$_prefixVariable1), ENT_QUOTES, 'UTF-8');?>
&show_purposes=1&filter_purposes[]=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['purpose_group_catalog_item']->value, ENT_QUOTES, 'UTF-8');?>
&filter_purposes[]=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['purpose_group_variation_catalog_item']->value, ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>
            </div>
        <?php }?>

        <form action="<?php echo htmlspecialchars((string) fn_url("product_variations.generate"), ENT_QUOTES, 'UTF-8');?>
"
            name="generate_product_to_group_form"
            method="post"
            class="form-horizontal form-edit"
        >
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="cm-variations-generator__features-variants" id="generate_variations_container__features_container">
                <?php if ($_smarty_tpl->tpl_vars['selected_features']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                        <div class="control-group cm-variations-generator__select-feature-variations" data-ca-feautre-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <input type="hidden" name="feature_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                            <label class="control-label" for="variations_feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>

                                <div class="link cm-variations-generator_add-all-variants" data-ca-feature-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
">
                                    <span class="btn-link"><?php echo $_smarty_tpl->__("product_variations.add_all_variants");?>
</span>
                                </div>
                            </label>
                            <div class="controls" id="product_feature_variations_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
">
                                <div class="product-assign-features__row">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('empty_variant_text'=>$_smarty_tpl->__("product_variations.generator.feature_variants.placeholder"),'feature_id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'multiple'=>true,'close_on_select'=>false,'item_ids'=>(($tmp = $_smarty_tpl->tpl_vars['features_variant_ids']->value[$_smarty_tpl->tpl_vars['feature']->value['feature_id']] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'unremovable_item_ids'=>(($tmp = $_smarty_tpl->tpl_vars['exists_features_variant_ids']->value[$_smarty_tpl->tpl_vars['feature']->value['feature_id']] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'enable_permanent_placeholder'=>true,'input_name'=>"features_variants_ids[".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id'])."][]",'meta'=>"product-assign-features__select"), 0, true);
?>
                                    <?php if (!$_smarty_tpl->tpl_vars['group']->value) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"button-icon",'but_meta'=>"btn cm-variations-generator__delete-feature-variation",'but_icon'=>"icon-trash product-update-features_delete-icon",'title'=>$_smarty_tpl->__("delete")), 0, true);
?>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php if ($_smarty_tpl->tpl_vars['group']->value) {?>
                        <div class="well">
                            <?php echo $_smarty_tpl->__("product_variations.generator.warning.new_features_add");?>

                        </div>
                    <?php }?>
                <?php } else { ?>
                    <div class="no-items row-fluid">
                        <div class="span8 offset2 left"><?php echo $_smarty_tpl->__("product_variations.no_available_features",array("[manage_features_href]"=>fn_url("product_features.manage")));?>
</div>
                    </div>
                <?php }?>
            <!--generate_variations_container__features_container--></div>

            <div class="cm-variations-generator__combinations" id="generate_variations__combinations_container">
                <?php if ($_smarty_tpl->tpl_vars['combinations']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['all_combinations_count']->value > $_smarty_tpl->tpl_vars['combinations_count_allowed_for_display']->value) {?>
                        <p><?php echo $_smarty_tpl->__("product_variations.too_many_combinations_display");?>
</p>
                    <?php } else { ?>
                        <p><?php echo $_smarty_tpl->__("product_variations.generator.table.title");?>
</p>
                        <div class="table-responsive-wrapper">
                            <table width="100%" class="table table-middle table--relative table-responsive">
                                <thead>
                                <tr>
                                    <th width="2%"><?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"checkbox",'checked'=>$_smarty_tpl->tpl_vars['is_all_combinations_active']->value), 0, false);
?></th>
                                    <th width="2%">&nbsp;</th>
                                    <th width="20%" class="nowrap"><span><?php echo $_smarty_tpl->__("features");?>
</span></th>
                                    <th width="25%" class="nowrap"><span><?php echo $_smarty_tpl->__("name");?>
</span></th>
                                    <th width="16%" class="nowrap"><?php echo $_smarty_tpl->__("sku");?>
</th>
                                    <th width="13%" class="nowrap"><?php echo $_smarty_tpl->__("price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</th>
                                    <th width="9%" class="nowrap"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                </tr>
                                </thead>
                                <?php $_smarty_tpl->_assignInScope('combinations_count', smarty_modifier_count($_smarty_tpl->tpl_vars['combinations']->value));?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinations']->value, 'combination');
$_smarty_tpl->tpl_vars['combination']->index = -1;
$_smarty_tpl->tpl_vars['combination']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['combination']->value) {
$_smarty_tpl->tpl_vars['combination']->do_else = false;
$_smarty_tpl->tpl_vars['combination']->index++;
$_smarty_tpl->tpl_vars['combination']->first = !$_smarty_tpl->tpl_vars['combination']->index;
$__foreach_combination_1_saved = $_smarty_tpl->tpl_vars['combination'];
?>
                                    <?php if (!$_smarty_tpl->tpl_vars['combination']->value['parent_combination_id']) {?>
                                        <?php if (!$_smarty_tpl->tpl_vars['combination']->first) {?>
                                            </tbody>
                                        <?php }?>

                                        <tbody class="combinations-table__parent-combination">
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/combination_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('combinations_count'=>$_smarty_tpl->tpl_vars['combinations_count']->value), 0, true);
?>
                                        </tbody>
                                        <tbody data-ca-switch-id="product_variations_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
">
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/combination_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('combinations_count'=>$_smarty_tpl->tpl_vars['combinations_count']->value), 0, true);
?>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['combination'] = $__foreach_combination_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                    <?php }?>
                <?php } elseif (!empty($_smarty_tpl->tpl_vars['selected_features']->value) && $_smarty_tpl->tpl_vars['all_combinations_count']->value === 0) {?>
                    <p><?php echo $_smarty_tpl->__("product_variations.too_many_combinations_display");?>
</p>
                <?php }?>
            <!--generate_variations__combinations_container--></div>

        </form>
    </div>
<!--generate_variations_container--></div>
<?php }
}
