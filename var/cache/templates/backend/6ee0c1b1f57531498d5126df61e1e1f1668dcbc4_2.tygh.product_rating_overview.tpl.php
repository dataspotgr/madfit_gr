<?php
/* Smarty version 4.3.0, created on 2025-03-20 02:22:33
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_reviews\views\product_reviews\components\rating\product_rating_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dbde59d69c00_70761583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ee0c1b1f57531498d5126df61e1e1f1668dcbc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\rating\\product_rating_overview.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/rating/stars_with_text.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/rating/stars_details.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl' => 1,
  ),
),false)) {
function content_67dbde59d69c00_70761583 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="cs-product-reviews-rating-product-rating-overview well">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'meta'=>"muted"), 0, false);
?>

    </section>
<?php }
}
}
