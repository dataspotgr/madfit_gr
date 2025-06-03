<?php
/* Smarty version 4.3.0, created on 2025-06-02 12:55:59
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\ds_eldico_bridge\views\ds_eldico_bridge\features_active.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683d752f6e9d10_77675221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf0d6a18b3a286a89d4095524ca93b2aed3464f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\ds_eldico_bridge\\views\\ds_eldico_bridge\\features_active.tpl',
      1 => 1748858152,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_683d752f6e9d10_77675221 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('ds_bridge_features_status_description_instructions','ds_bridge_features_name','ds_bridge_features_status','ds_bridge_features_status_description'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php $_smarty_tpl->_assignInScope('features_status', fn_ds_eldico_bridge_get_feature_status());?>
    <div class="table-responsive-wrapper">
        <div id="content-send">
            <form action="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
" method="POST" name="update_posts_form">
                <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"/>
                <table style="width:100%;">
                    <thead>
                    <tr>
                        <td colspan="2"><?php echo $_smarty_tpl->__("ds_bridge_features_status_description_instructions");?>
</td>
                    </tr>
                    <tr>
                        <th style="text-align: left;"><?php echo $_smarty_tpl->__("ds_bridge_features_name");?>
</th>
                        <th style="text-align: left;"><?php echo $_smarty_tpl->__("ds_bridge_features_status");?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['features_status']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features_status']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                            <tr>
                                <td>
                                    <input type="hidden" name="feature_status[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8');?>
" />
                                    <input type="text" name="feature_status[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['eldc_feature_name'], ENT_QUOTES, 'UTF-8');?>
" readonly/>
                                </td>
                                <td>
                                    <select name="feature_status[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
][]" id="feature_status">
                                        <option value="none">- Επιλογή κατάστασης -</option>
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['eldc_feature_status'] == 1) {?> selected="selected" <?php }?>>
                                            Ενεργό
                                        </option>
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['v']->value['eldc_feature_status'] == 0) {?> selected="selected" <?php }?>>
                                            Ανενεργό
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons_insert');?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"action",'but_target_form'=>"update_posts_form",'but_meta'=>"cm-submit"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("ds_bridge_features_status_description"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>false,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}
