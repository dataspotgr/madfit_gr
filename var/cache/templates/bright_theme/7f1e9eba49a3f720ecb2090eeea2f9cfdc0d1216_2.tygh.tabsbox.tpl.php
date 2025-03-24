<?php
/* Smarty version 4.3.0, created on 2025-03-24 03:39:35
  from 'C:\xampp\htdocs\madfit_gr\design\themes\bright_theme\templates\common\tabsbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e13667ef8568_12865087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f1e9eba49a3f720ecb2090eeea2f9cfdc0d1216' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\bright_theme\\templates\\common\\tabsbox.tpl',
      1 => 1742812772,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e13667ef8568_12865087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.empty_tabs.php','function'=>'smarty_modifier_empty_tabs',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.in_array.php','function'=>'smarty_modifier_in_array',),3=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>

<?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
    <?php $_smarty_tpl->_assignInScope('active_tab', $_REQUEST['selected_section']);
}?>

<?php if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']) {?>

    <?php $_smarty_tpl->_assignInScope('empty_tab_ids', smarty_modifier_empty_tabs($_smarty_tpl->tpl_vars['content']->value));?>
    <?php $_smarty_tpl->_assignInScope('_tabs', false);?>
    <?php if ($_smarty_tpl->tpl_vars['top_order_actions']->value) {
echo $_smarty_tpl->tpl_vars['top_order_actions']->value;
}?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/accordion.js"),$_smarty_tpl);?>
     <div class="ty-accordion cm-j-tabs<?php if ($_smarty_tpl->tpl_vars['track']->value) {?> cm-track<?php }?> clearfix">
        <div class="ty-accordion__list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['tabs'], 'tab', false, 'key', 'tabs', array (
));
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                <?php if (((!$_smarty_tpl->tpl_vars['tabs_section']->value && !$_smarty_tpl->tpl_vars['tab']->value['section']) || ($_smarty_tpl->tpl_vars['tabs_section']->value == $_smarty_tpl->tpl_vars['tab']->value['section'])) && !smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value)) {?>
                    <?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('active_tab', $_smarty_tpl->tpl_vars['key']->value);?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('_tabs', true);?>
                    <?php if ($_smarty_tpl->tpl_vars['disable_blocks']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value != "product_tab_99") {?>                             <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-accordion__item<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?>">
                                <a href="javascript:void(0);" class="ty-accordion__header"><?php if ($_smarty_tpl->tpl_vars['tab']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');
}?></a>
                                <div class="ty-accordion__content">
                                    <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['tab']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');
}?></a>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                    <?php } else { ?>
                        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-accordion__item<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?>">
                            <a href="javascript:void(0);" class="ty-accordion__header"><?php if ($_smarty_tpl->tpl_vars['tab']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');
}?></a>
                            <div class="ty-accordion__content">
                                <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?>
                                    <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['tab']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');
}?></a>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['_tabs']->value) {?>
        <div class="cm-tabs-content ty-accordion__content clearfix" id="accordion_content">
                            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                    </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            var hndl = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                'accordion_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_section']->value, ENT_QUOTES, 'UTF-8');?>
': <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['onclick']->value, ENT_QUOTES, 'UTF-8');?>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

        <?php echo '</script'; ?>
>
    <?php }
} else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['disable_blocks']->value == 1) {?>
    <?php echo '<script'; ?>
>
        $("#content_product_tab_99").hide();
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/tabsbox.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/tabsbox.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>

<?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
    <?php $_smarty_tpl->_assignInScope('active_tab', $_REQUEST['selected_section']);
}?>

<?php if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']) {?>

    <?php $_smarty_tpl->_assignInScope('empty_tab_ids', smarty_modifier_empty_tabs($_smarty_tpl->tpl_vars['content']->value));?>
    <?php $_smarty_tpl->_assignInScope('_tabs', false);?>
    <?php if ($_smarty_tpl->tpl_vars['top_order_actions']->value) {
echo $_smarty_tpl->tpl_vars['top_order_actions']->value;
}?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/accordion.js"),$_smarty_tpl);?>
     <div class="ty-accordion cm-j-tabs<?php if ($_smarty_tpl->tpl_vars['track']->value) {?> cm-track<?php }?> clearfix">
        <div class="ty-accordion__list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['tabs'], 'tab', false, 'key', 'tabs', array (
));
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                <?php if (((!$_smarty_tpl->tpl_vars['tabs_section']->value && !$_smarty_tpl->tpl_vars['tab']->value['section']) || ($_smarty_tpl->tpl_vars['tabs_section']->value == $_smarty_tpl->tpl_vars['tab']->value['section'])) && !smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value)) {?>
                    <?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('active_tab', $_smarty_tpl->tpl_vars['key']->value);?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('_tabs', true);?>
                    <?php if ($_smarty_tpl->tpl_vars['disable_blocks']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value != "product_tab_99") {?>                             <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-accordion__item<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?>">
                                <a href="javascript:void(0);" class="ty-accordion__header"><?php if ($_smarty_tpl->tpl_vars['tab']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');
}?></a>
                                <div class="ty-accordion__content">
                                    <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['tab']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');
}?></a>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                    <?php } else { ?>
                        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-accordion__item<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?>">
                            <a href="javascript:void(0);" class="ty-accordion__header"><?php if ($_smarty_tpl->tpl_vars['tab']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');
}?></a>
                            <div class="ty-accordion__content">
                                <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?>
                                    <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['tab']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');
}?></a>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['_tabs']->value) {?>
        <div class="cm-tabs-content ty-accordion__content clearfix" id="accordion_content">
                            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                    </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            var hndl = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                'accordion_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_section']->value, ENT_QUOTES, 'UTF-8');?>
': <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['onclick']->value, ENT_QUOTES, 'UTF-8');?>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

        <?php echo '</script'; ?>
>
    <?php }
} else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['disable_blocks']->value == 1) {?>
    <?php echo '<script'; ?>
>
        $("#content_product_tab_99").hide();
    <?php echo '</script'; ?>
>
<?php }
}
}
}
