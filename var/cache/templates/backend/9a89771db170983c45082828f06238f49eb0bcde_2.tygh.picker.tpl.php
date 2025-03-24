<?php
/* Smarty version 4.3.0, created on 2025-03-21 01:57:31
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\banners\pickers\banners\picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd29fb934304_69709500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a89771db170983c45082828f06238f49eb0bcde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\banners\\pickers\\banners\\picker.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:addons/banners/pickers/banners/js.tpl' => 2,
  ),
),false)) {
function content_67dd29fb934304_69709500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.explode.php','function'=>'smarty_modifier_explode',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_banners','add_banners','position_short','name','no_items'));
$_smarty_tpl->_assignInScope('rnd', rand());
$_smarty_tpl->_assignInScope('data_id', ((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value));
$_smarty_tpl->_assignInScope('view_mode', (($tmp = $_smarty_tpl->tpl_vars['view_mode']->value ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['item_ids']->value && !is_array($_smarty_tpl->tpl_vars['item_ids']->value) && $_smarty_tpl->tpl_vars['type']->value != "table") {?>
        <?php $_smarty_tpl->_assignInScope('item_ids', smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['item_ids']->value));
}?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="buttons-container"><?php }
if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>[<?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("banners.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&aoc=".((string)$_smarty_tpl->tpl_vars['aoc']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)),'but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_banners") ?? null : $tmp),'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener btn pull-right",'but_icon'=>"icon-plus"), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>]<?php }
if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>

    <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_banners") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "button") {?>
    <?php if (!$_smarty_tpl->tpl_vars['positions']->value) {?>
    <input id="b<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" class="input-micro" />
    <?php }?>
    <div class="clearfix"></div>
    <div class="table-responsive-wrapper">
        <table width="100%" class="table table-middle table--relative table-responsive">
        <thead>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['positions']->value) {?><th><?php echo $_smarty_tpl->__("position_short");?>
</th><?php }?>
                <th width="100%"><?php echo $_smarty_tpl->__("name");?>
</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/banners/pickers/banners/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('banner_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."banner_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>"0"), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'p_id', false, NULL, 'items', array (
  'first' => true,
  'iteration' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['p_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p_id']->value) {
$_smarty_tpl->tpl_vars['p_id']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index'];
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/banners/pickers/banners/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('banner_id'=>$_smarty_tpl->tpl_vars['p_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'first_item'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null),'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration'] : null)), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        </tbody>
        <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <tr>
            <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>" data-th="&nbsp;"><p class="no-items"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p></td>
        </tr>
        </tbody>
        </table>
    </div>
<?php }
}
}
