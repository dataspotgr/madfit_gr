<?php
/* Smarty version 4.3.0, created on 2025-03-21 02:40:58
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\seo\addons\discussion\hooks\products\seo_snippet_attributes.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd342ad52308_95830621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dcaf507b6e52a61b8ddd0806c234e2ae873fbc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\seo\\addons\\discussion\\hooks\\products\\seo_snippet_attributes.pre.tpl',
      1 => 1742455426,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dd342ad52308_95830621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'] && floatval($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'])) {?>
    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
        <meta itemprop="reviewCount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
">
        <meta itemprop="ratingValue" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'], ENT_QUOTES, 'UTF-8');?>
">
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['discussion']['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['name'] && $_smarty_tpl->tpl_vars['post']->value['rating_value']) {?>
            <div itemprop="review" itemscope itemtype="http://schema.org/Review">
                <div itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <meta itemprop="name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                    <meta itemprop="ratingValue" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['rating_value'], ENT_QUOTES, 'UTF-8');?>
" />
                    <meta itemprop="bestRating" content="5" />
                </div>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'] && floatval($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'])) {?>
    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
        <meta itemprop="reviewCount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
">
        <meta itemprop="ratingValue" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'], ENT_QUOTES, 'UTF-8');?>
">
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['discussion']['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['name'] && $_smarty_tpl->tpl_vars['post']->value['rating_value']) {?>
            <div itemprop="review" itemscope itemtype="http://schema.org/Review">
                <div itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <meta itemprop="name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                    <meta itemprop="ratingValue" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['rating_value'], ENT_QUOTES, 'UTF-8');?>
" />
                    <meta itemprop="bestRating" content="5" />
                </div>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
