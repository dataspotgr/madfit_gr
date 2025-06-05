<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:54:35
=======
/* Smarty version 4.3.0, created on 2025-05-23 10:50:49
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\product_variations\hooks\products\update_detailed_images.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_6838671b1948c6_52906431',
=======
  'unifunc' => 'content_683028d9d1b2d9_15105091',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d35795f0a80f03a085fc0556bc233fa1d985375' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_detailed_images.override.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747915842,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/form_file_uploader.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_6838671b1948c6_52906431 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683028d9d1b2d9_15105091 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
\Tygh\Languages\Helper::preloadLangVars(array('images'));
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("detailed_image")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("images");?>
:</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/form_file_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('existing_pairs'=>($_smarty_tpl->tpl_vars['product_data']->value['main_pair'] ? array($_smarty_tpl->tpl_vars['product_data']->value['main_pair']) : array())+(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['image_pairs'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'file_name'=>"file",'image_pair_types'=>array('N'=>'product_add_additional_image','M'=>'product_main_image','A'=>'product_additional_image'),'allow_update_files'=>false), 0, false);
?>
        </div>
    </div>
<?php }
}
}
