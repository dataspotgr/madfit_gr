<?php
/* Smarty version 4.3.0, created on 2025-03-24 02:16:24
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\views\product_variations\components\search_product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e122e8e51ba0_18699385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a470c464f04b942422aa3e4bf1fd383cca2218e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\search_product_list.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/products_search_form.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/image.tpl' => 1,
    'tygh:views/companies/components/company_name.tpl' => 1,
  ),
),false)) {
function content_67e122e8e51ba0_18699385 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('image','name','sku','no_data','product_variations.no_available_features'));
?>
<div id="generate_product_group_form">
    <?php if ($_smarty_tpl->tpl_vars['selected_features']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"product_variations.find_variations",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"product_group_form_list,tools_tab_link_existing_".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true,'show_product_type_filter'=>false,'show_product_parent_filter'=>false), 0, false);
?>
    <?php }?>

    <form action="<?php echo htmlspecialchars((string) fn_url("product_variations.link"), ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit" name="add_product_to_group_form" method="post">
        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />

        <div class="items-container" id="product_group_form_list">
            <?php if ($_smarty_tpl->tpl_vars['selected_features']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"product_group_form_list",'disable_history'=>true), 0, false);
?>

                    <table width="100%" class="table table-middle table--relative">
                        <thead>
                        <tr>
                            <th class="center" width="1%">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </th>
                            <th width="5%"><span><?php echo $_smarty_tpl->__("image");?>
</span></th>
                            <th width="25%"><span><?php echo $_smarty_tpl->__("name");?>
 / <?php echo $_smarty_tpl->__("sku");?>
</span></th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                                <th width="10%"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span></th>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <tr>
                                <td class="center" width="1%">
                                    <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item mrg-check" id="checkbox_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                </td>
                                <td>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] ?? null : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']))), 0, true);
?>
                                </td>
                                <td>
                                    <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
                                    <div class="product-list__labels">
                                        <div class="product-code">
                                            <span class="product-code__label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        </div>
                                    </div>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                                </td>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                                    <td width="10%"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['variation_features'][$_smarty_tpl->tpl_vars['feature']->value['feature_id']]['variant'], ENT_QUOTES, 'UTF-8');?>
</span></td>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"product_group_form_list",'disable_history'=>true), 0, true);
?>
                <?php } else { ?>
                    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                <?php }?>
            <?php } else { ?>
                <div class="no-items row-fluid">
                    <div class="span8 offset2 left"><?php echo $_smarty_tpl->__("product_variations.no_available_features",array("[manage_features_href]"=>fn_url("product_features.manage")));?>
</div>
                </div>
            <?php }?>
        <!--product_group_form_list--></div>
    </form>
<!--generate_product_group_form--></div><?php }
}
