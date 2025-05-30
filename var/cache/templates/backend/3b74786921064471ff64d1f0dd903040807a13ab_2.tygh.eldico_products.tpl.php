<?php
/* Smarty version 4.3.0, created on 2025-05-30 11:31:17
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\ds_eldico_bridge\views\ds_eldico_bridge\eldico_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68396cd56a4554_03314783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b74786921064471ff64d1f0dd903040807a13ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\ds_eldico_bridge\\views\\ds_eldico_bridge\\eldico_products.tpl',
      1 => 1748593326,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_68396cd56a4554_03314783 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('ds_bridge_products_updates_description','ds_bridge_products_total','ds_bridge_products_create','ds_bridge_products_update','ds_bridge_products_updates_description'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <div class="table-responsive-wrapper">
        <div id="content-send">
            <table style="width:100%;">
                <thead>
                <tr>
                    <th style="text-align: left;"><?php echo $_smarty_tpl->__("ds_bridge_products_updates_description");?>
</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr><td><strong><?php echo $_smarty_tpl->__("ds_bridge_products_total");?>
</strong>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['products_total']->value, ENT_QUOTES, 'UTF-8');?>
</td></tr>
                <tr><td><strong><?php echo $_smarty_tpl->__("ds_bridge_products_create");?>
</strong>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['products_created']->value, ENT_QUOTES, 'UTF-8');?>
</td></tr>
                <tr><td><strong><?php echo $_smarty_tpl->__("ds_bridge_products_update");?>
</strong>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['products_updated']->value, ENT_QUOTES, 'UTF-8');?>
</td></tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("ds_bridge_products_updates_description"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>false,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}
