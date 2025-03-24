<?php
/* Smarty version 4.3.0, created on 2025-03-21 05:28:53
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\store_locator\hooks\destinations\tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67dd5b859ab679_48845221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e91644f03cabafe468ddf5d8a8629aa92adb4b31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\store_locator\\hooks\\destinations\\tabs_content.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_name.tpl' => 1,
  ),
),false)) {
function content_67dd5b859ab679_48845221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('store_locator.name','store_locator.main_destination','store_locator.name','store_locator.main_destination','no_data'));
?>
<div class="hidden" id="content_pickup">
    <?php if ($_smarty_tpl->tpl_vars['pickup_locations']->value) {?>
        <div id="pickup_list">
            <div class="table-responsive-wrapper">
                <table class="table table--relative table-responsive" data-ca-sortable="true" data-ca-sort-list="[[0, 0]]">
                    <thead>
                    <tr>
                        <th data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("store_locator.name");?>
</th>
                        <th data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("store_locator.main_destination");?>
</th>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"store_locator:tab_list_extra_th"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"store_locator:tab_list_extra_th"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"store_locator:tab_list_extra_th"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pickup_locations']->value, 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
                        <tr class="cm-row-status-<?php echo htmlspecialchars((string) strtolower($_smarty_tpl->tpl_vars['store']->value['status']), ENT_QUOTES, 'UTF-8');?>
">
                            <td data-th="<?php echo $_smarty_tpl->__("store_locator.name");?>
">
                                <a href="<?php echo htmlspecialchars((string) fn_url("store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['store']->value['store_location_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                   class="row-status link--monochrome"
                                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['store']->value), 0, true);
?>
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("store_locator.main_destination");?>
"
                            >
                                <?php if ($_smarty_tpl->tpl_vars['store']->value['main_destination_id'] == $_smarty_tpl->tpl_vars['destination']->value['destination_id']) {?>
                                    <span class="row-status">
                                        <?php echo htmlspecialchars((string) fn_get_destination_name($_smarty_tpl->tpl_vars['store']->value['main_destination_id']), ENT_QUOTES, 'UTF-8');?>

                                    </span>
                                <?php } else { ?>
                                    <a href="<?php echo htmlspecialchars((string) fn_url("destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['store']->value['main_destination_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                       class="row-status link--monochrome"
                                    ><?php echo htmlspecialchars((string) fn_get_destination_name($_smarty_tpl->tpl_vars['store']->value['main_destination_id']), ENT_QUOTES, 'UTF-8');?>
</a>
                                <?php }?>
                            </td>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"store_locator:tab_list_extra_td"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"store_locator:tab_list_extra_td"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"store_locator:tab_list_extra_td"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
</div>
<?php }
}
