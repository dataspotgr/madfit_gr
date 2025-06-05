<?php
<<<<<<< HEAD
<<<<<<<< HEAD:var/cache/templates/backend/acdcd7318f75fc314dda6879bd4d6d67b6cee2a7_2.tygh.tabs_extra.post.tpl.php
/* Smarty version 4.3.0, created on 2025-06-02 09:25:20
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\categories\tabs_extra.post.tpl' */
========
/* Smarty version 4.3.0, created on 2025-05-27 13:19:57
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\pages\tabs_extra.post.tpl' */
>>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862:var/cache/templates/backend/7abd830e3da86241020206911ffe144dea6d625a_2.tygh.tabs_extra.post.tpl.php
=======
/* Smarty version 4.3.0, created on 2025-05-27 14:49:50
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\discussion\hooks\categories\tabs_extra.post.tpl' */
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
<<<<<<<< HEAD:var/cache/templates/backend/acdcd7318f75fc314dda6879bd4d6d67b6cee2a7_2.tygh.tabs_extra.post.tpl.php
  'unifunc' => 'content_683d43d0ae12c0_82860499',
========
  'unifunc' => 'content_683591cd609d94_12584093',
>>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862:var/cache/templates/backend/7abd830e3da86241020206911ffe144dea6d625a_2.tygh.tabs_extra.post.tpl.php
=======
  'unifunc' => 'content_6835a6deb2b570_84318159',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acdcd7318f75fc314dda6879bd4d6d67b6cee2a7' => 
    array (
<<<<<<< HEAD
<<<<<<<< HEAD:var/cache/templates/backend/acdcd7318f75fc314dda6879bd4d6d67b6cee2a7_2.tygh.tabs_extra.post.tpl.php
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\tabs_extra.post.tpl',
      1 => 1743766598,
========
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\pages\\tabs_extra.post.tpl',
      1 => 1747996585,
>>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862:var/cache/templates/backend/7abd830e3da86241020206911ffe144dea6d625a_2.tygh.tabs_extra.post.tpl.php
=======
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\tabs_extra.post.tpl',
      1 => 1747996585,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
<<<<<<<< HEAD:var/cache/templates/backend/acdcd7318f75fc314dda6879bd4d6d67b6cee2a7_2.tygh.tabs_extra.post.tpl.php
function content_683d43d0ae12c0_82860499 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || !fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>0), 0, false);
========
function content_683591cd609d94_12584093 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page_type']->value != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id']), 0, false);
>>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862:var/cache/templates/backend/7abd830e3da86241020206911ffe144dea6d625a_2.tygh.tabs_extra.post.tpl.php
=======
function content_6835a6deb2b570_84318159 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || !fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>0), 0, false);
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
}
}
}
