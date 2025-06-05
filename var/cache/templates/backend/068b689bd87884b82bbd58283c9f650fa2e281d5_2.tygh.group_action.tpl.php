<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:51:24
=======
/* Smarty version 4.3.0, created on 2025-05-23 14:06:57
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\components\context_menu\items\group_action.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_6838665c544d42_81110326',
=======
  'unifunc' => 'content_683056d11797f3_58434020',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '068b689bd87884b82bbd58283c9f650fa2e281d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\components\\context_menu\\items\\group_action.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996636,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6838665c544d42_81110326 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_683056d11797f3_58434020 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),));
?>

<li <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']['class']) {?>
        class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['menu_item_class'], ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <a <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['action_attributes']);?>

            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']['class']) {?>
                class="cm-process-items cm-submit <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['action_class'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']["data-ca-target-form"]) {?>
                data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']["data-ca-dispatch"]) {?>
                data-ca-dispatch="dispatch[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
]"
            <?php }?>
    >
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>

    </a>
</li>
<?php }
}
