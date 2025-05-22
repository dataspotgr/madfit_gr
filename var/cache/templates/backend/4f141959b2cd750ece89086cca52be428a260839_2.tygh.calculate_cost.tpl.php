<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:22:58
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\shippings\calculate_cost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ebf2b73fd3_87009886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f141959b2cd750ece89086cca52be428a260839' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\shippings\\calculate_cost.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/subheader.tpl' => 2,
  ),
),false)) {
function content_6811ebf2b73fd3_87009886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('calculated_rate','rate_area','NA','delivery_time','NA','cost','error','recalculate_rates','weight','rates_calculated_info','recipient','country','select_country','state','select_state','city','zip_postal_code','address','sender','country','select_country','state','select_state','city','zip_postal_code','address'));
echo smarty_function_script(array('src'=>"js/tygh/backend/shippings.js"),$_smarty_tpl);?>

<div class="row-fluid">
    <div class="span6 pull-right">
        <div class="well well-small" id="rates">
            <input type="hidden" name="result_ids" value="rates">
            <h3><?php echo $_smarty_tpl->__("calculated_rate");?>
</h3>
            <table class="table">
                <tr>
                    <td><p><?php echo $_smarty_tpl->__("rate_area");?>
:</p></td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_info']['destination_id'] && $_smarty_tpl->tpl_vars['shipping']->value['rate_info']['destination_name']) {?>
                            <a href="<?php echo htmlspecialchars((string) fn_url("destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['shipping']->value['rate_info']['destination_id'])), ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['rate_info']['destination_name'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("NA");?>

                        <?php }?>
                    </td>
                </tr>
                <tr>
                    <td><p><?php echo $_smarty_tpl->__("delivery_time");?>
:</p></td>
                    <td><p><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['rates']->value['service_delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("NA") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p></td>
                </tr>
                <tr>
                    <td><b><?php echo $_smarty_tpl->__("cost");?>
</b>:</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['rates']->value['price']) {?>
                            <b><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['rates']->value['price']), 0, false);
?></b>
                        <?php }?>
                    </td>
                </tr>
                <tr <?php if (!$_smarty_tpl->tpl_vars['rates']->value['error']) {?>class="hidden"<?php }?>>
                    <td class="error" colspan="2">
                        <b><?php echo $_smarty_tpl->__("error");?>
</b>
                        <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rates']->value['error'], ENT_QUOTES, 'UTF-8');?>
</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"action",'but_name'=>"dispatch[shippings.test]",'but_text'=>$_smarty_tpl->__("recalculate_rates"),'but_meta'=>"cm-submit cm-ajax cm-rates-calculate",'but_icon'=>"icon-refresh"), 0, false);
?>
                    </td>
                </tr>
            </table>
            <!--rates--></div>
        </div>
    <div class="span6">
        <div class="control-group">
            <label for="elm_weight_cost" class="control-label"><?php echo $_smarty_tpl->__("weight");?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
)</label>
            <div class="controls">
                <input id="elm_weight_cost" type="text" class="input-medium cm-rate-calculation" name="shipping_data[test_weight]" value="1" />
                <div>
                    <?php $_smarty_tpl->_assignInScope('weights', array(1,5,10,50,100));?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['weights']->value, 'weight');
$_smarty_tpl->tpl_vars['weight']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['weight']->value) {
$_smarty_tpl->tpl_vars['weight']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['weight']->value,'but_meta'=>"label cm-btn-weight",'but_role'=>"button-icon",'but_external_click_id'=>"elm_weight_cost",'but_id'=>"btn_weight_".((string)$_smarty_tpl->tpl_vars['weight']->value)), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <p class="muted description"><?php echo $_smarty_tpl->__("rates_calculated_info",array(1,"[price]"=>$_smarty_tpl->tpl_vars['app']->value["formatter"]->asPrice(100,$_smarty_tpl->tpl_vars['primary_currency']->value)));?>
</p>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:calculate_cost"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:calculate_cost"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("recipient"),'target'=>"#recipient_info"), 0, false);
?>
        <fieldset id="recipient_info" class="collapse-visible collapse in">
            <div id="container_field__company_country" class="control-group">
                <label for="field__company_country" class="control-label"><?php echo $_smarty_tpl->__("country");?>
</label>
                <div class="controls">
                    <select id="field__recipient_country" class="cm-country cm-rate-calculation cm-location-recipient" name="recipient[country]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value === $_smarty_tpl->tpl_vars['recipient']->value['country']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div id="container_field__company_state" class="control-group">
                <label for="field__company_state" class="control-label"><?php echo $_smarty_tpl->__("state");?>
</label>
                <div class="controls">
                    <select class="cm-state cm-rate-calculation cm-location-recipient" name="recipient[state]" id="field__recipient_state">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['recipient']->value['country']], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['code'] === $_smarty_tpl->tpl_vars['recipient']->value['state']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input type="text" id="field__recipient_state_d" name="recipient[state]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['recipient']->value['state'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state cm-location-recipient hidden" />
                </div>
            </div>
            <div id="container_field__company_city" class="control-group">
                <label for="field__company_city" class="control-label"><?php echo $_smarty_tpl->__("city");?>
</label>
                <div class="controls">
                    <input type="text" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['recipient']->value['city'], ENT_QUOTES, 'UTF-8');?>
" name="recipient[city]" id="field__company_city" class="cm-rate-calculation"/>
                </div>
            </div>
            <div id="container_field__company_zipcode" class="control-group">
                <label for="field__company_zipcode" class="control-label"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                <div class="controls">
                    <input type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['recipient']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" name="recipient[zipcode]" id="field__company_zipcode" class="cm-rate-calculation"/>
                </div>
            </div>
            <div id="container_field__company_address" class="control-group">
                <label for="field__company_address" class="control-label"><?php echo $_smarty_tpl->__("address");?>
</label>
                <div class="controls">
                    <input type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['recipient']->value['address'], ENT_QUOTES, 'UTF-8');?>
" name="recipient[address]" id="field__company_address" class="cm-rate-calculation"/>
                </div>
            </div>
        </fieldset>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("sender"),'target'=>"#sender_info"), 0, true);
?>
        <fieldset id="sender_info" class="collapse-visible collapse in">
            <div id="container_field__company_country" class="control-group">
                <label for="field__sender_country" class="control-label"><?php echo $_smarty_tpl->__("country");?>
</label>
                <div class="controls">
                    <select id="field__sender_country" class="cm-country cm-rate-calculation cm-location-sender" name="sender[country]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value === $_smarty_tpl->tpl_vars['sender']->value['country']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div id="container_field__company_state" class="control-group">
                <label for="field__company_state" class="control-label"><?php echo $_smarty_tpl->__("state");?>
</label>
                <div class="controls">
                    <select class="cm-state cm-rate-calculation cm-location-sender" name="sender[state]" id="field__sender_state">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['sender']->value['country']], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['code'] === $_smarty_tpl->tpl_vars['sender']->value['state']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input type="text" id="field__sender_state_d" name="sender[state]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sender']->value['state'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state cm-location-sender hidden" />
                </div>
            </div>
            <div id="container_field__company_city" class="control-group">
                <label for="field__company_city" class="control-label"><?php echo $_smarty_tpl->__("city");?>
</label>
                <div class="controls">
                    <input type="text" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sender']->value['city'], ENT_QUOTES, 'UTF-8');?>
" name="sender[city]" id="field__company_city" class="cm-rate-calculation"/>
                </div>
            </div>
            <div id="container_field__company_zipcode" class="control-group">
                <label for="field__company_zipcode" class="control-label"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                <div class="controls">
                    <input type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sender']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" name="sender[zipcode]" id="field__company_zipcode" class="cm-rate-calculation"/>
                </div>
            </div>
            <div id="container_field__company_address" class="control-group">
                <label for="field__company_address" class="control-label"><?php echo $_smarty_tpl->__("address");?>
</label>
                <div class="controls">
                    <input type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sender']->value['address'], ENT_QUOTES, 'UTF-8');?>
" name="sender[address]" id="field__company_address" class="cm-rate-calculation"/>
                </div>
            </div>
        </fieldset>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:calculate_cost"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function (_, $) {
        $.ceEvent('one', 'ce.commoninit', function (context) {
            $.ceRebuildStates('init', {
                default_country: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
                states: <?php echo json_encode($_smarty_tpl->tpl_vars['states']->value);?>

            });
            $('.cm-country.cm-location-recipient').ceRebuildStates();
            $('.cm-country.cm-location-sender').ceRebuildStates();
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
