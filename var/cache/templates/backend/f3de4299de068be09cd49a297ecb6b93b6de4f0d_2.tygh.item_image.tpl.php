<?php
/* Smarty version 4.3.0, created on 2025-05-29 16:54:40
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\product_features\components\variants_picker\item_image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68386720ab52b2_57232674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3de4299de068be09cd49a297ecb6b93b6de4f0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\product_features\\components\\variants_picker\\item_image.tpl',
      1 => 1743766598,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68386720ab52b2_57232674 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['enable_image']->value) {?>
    
        ${data.image_url
        ? `<img src="${data.image_url}" width="30" height="30" alt="${data.name}" class="object-picker__product-feature-image"/>`
            : `<div class="no-image object-picker__product-feature-no-image" style="width: 30px; height: 30px;"><span class="cs-icon glyph-image"></span></div>`
        }
    
<?php }?>
<div class="object-picker__product-feature-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }
}
