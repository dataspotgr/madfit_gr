<?php
/* Smarty version 4.3.0, created on 2025-04-25 11:11:13
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\blocks\menu\dropdown_vertical.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_680b43a1bc66a5_69958488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50daf90971611d6eeb8e1a40d7c0b0703c5e9522' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\blocks\\menu\\dropdown_vertical.tpl',
      1 => 1744014184,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/sidebox_dropdown.tpl' => 2,
  ),
),false)) {
function content_680b43a1bc66a5_69958488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-menu ty-menu-vertical ty-menu-vertical__dropdown">
    <ul id="vmenu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__items cm-responsive-menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['right_to_left_orientation'] == "Y") {?> rtl<?php }?>">
        <li class="ty-menu__item ds-burger-menu-wrapper ty-menu__menu-btn visible-phone cm-responsive-menu-toggle-main">
            <a class="ty-menu__item-link">
                <span class="ds-products-text hidden-phone">Προϊόντα</span>
                <span class="ds-burger-menu">
                    <img  src="/madfit_gr/images/design_images/menu.png">
                </span>
            </a>
        </li>
        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'separated'=>true,'submenu'=>false,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), 0, false);
?>
    </ul>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/dropdown_vertical.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/dropdown_vertical.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-menu ty-menu-vertical ty-menu-vertical__dropdown">
    <ul id="vmenu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__items cm-responsive-menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['right_to_left_orientation'] == "Y") {?> rtl<?php }?>">
        <li class="ty-menu__item ds-burger-menu-wrapper ty-menu__menu-btn visible-phone cm-responsive-menu-toggle-main">
            <a class="ty-menu__item-link">
                <span class="ds-products-text hidden-phone">Προϊόντα</span>
                <span class="ds-burger-menu">
                    <img  src="/madfit_gr/images/design_images/menu.png">
                </span>
            </a>
        </li>
        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'separated'=>true,'submenu'=>false,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), 0, true);
?>
    </ul>
</div>
<?php }
}
}
