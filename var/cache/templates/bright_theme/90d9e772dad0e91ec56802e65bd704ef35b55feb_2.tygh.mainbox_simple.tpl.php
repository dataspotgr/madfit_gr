<?php
/* Smarty version 4.3.0, created on 2025-05-22 15:32:06
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\blocks\wrappers\mainbox_simple.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682f1946935fa8_28753537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90d9e772dad0e91ec56802e65bd704ef35b55feb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\blocks\\wrappers\\mainbox_simple.tpl',
      1 => 1747915844,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682f1946935fa8_28753537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="ty-mainbox-simple-container clearfix<?php if ((isset($_smarty_tpl->tpl_vars['hide_wrapper']->value))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['title']->value || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
            <h2 class="ty-mainbox-simple-title">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:mainbox_simple_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title');?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </h2>
        <?php }?>
        <div class="ty-mainbox-simple-body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/mainbox_simple.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/wrappers/mainbox_simple.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="ty-mainbox-simple-container clearfix<?php if ((isset($_smarty_tpl->tpl_vars['hide_wrapper']->value))) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['title']->value || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
            <h2 class="ty-mainbox-simple-title">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wrapper:mainbox_simple_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') && smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title');?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </h2>
        <?php }?>
        <div class="ty-mainbox-simple-body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
    </div>
<?php }
}
}
}
