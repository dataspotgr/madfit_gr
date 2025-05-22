<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:22:57
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\shippings\components\picker\rates\item_selection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ebf1d46290_71624183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29b10e851ef0b7b85ca5958d64bd73f683b3496d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\shippings\\components\\picker\\rates\\item_selection.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6811ebf1d46290_71624183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('shipping_time','shipping_rate','calculated_automatically','shipping_add_conditions','shipping_hide_conditions','tools','shipping_add_price_condition','shipping_remove_price_condition','shipping_add_weight_condition','shipping_remove_weight_condition','shipping_add_items_condition','shipping_remove_items_condition','shipping_remove_rate_area'));
?>
<div class="object-picker__shipping-rate-main ${data.additional_class}">
    <?php $_smarty_tpl->_assignInScope('destination_id', "$".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."data.destination_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value));?>

    <div class="shipping-rate" id="shipping_rate_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="shipping-rate__container">
            <div class="shipping-rate__main-content">
                <h4 class="shipping-rate__header">${data.destination}</h4>
                <div class="shipping-rate__delivery-time">
                    <label><?php echo $_smarty_tpl->__("shipping_time");?>
:</label>
                    <input type="text" 
                        class="input-small input-hidden"
                        name="shipping_data[rates][delivery_time][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
]" 
                        value="$<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
data.delivery_time<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
"
                        ${data.is_disabled ? 'readonly': ''}
                    />             
                </div>
                <div class="shipping-rate__base-rate">
                    <label><?php echo $_smarty_tpl->__("shipping_rate");?>
:</label>
                    <?php $_smarty_tpl->_assignInScope('can_specify_base_rate', $_smarty_tpl->tpl_vars['shipping']->value['rate_calculation'] == "M");?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:base_rate"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:base_rate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['can_specify_base_rate']->value) {?>
                            <input type="text"
                                name="shipping_data[rates][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
][base_rate]"
                                value="$<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
data.price<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
"
                                class="cm-numeric input-small input-hidden"
                                data-a-sign="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'] ?: '');?>
"
                                data-a-dec="."
                                data-a-sep=","
                                <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after'] == "Y") {?>data-p-sign="s"<?php }?>
                                ${data.is_disabled ? 'readonly' : ''}
                            />
                        <?php } else { ?>
                            <input type="hidden" name="shipping_data[rates][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
][base_rate]" ${data.is_disabled ? 'readonly' : ''}/>
                            <?php echo $_smarty_tpl->__("calculated_automatically");?>

                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:base_rate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <div class="shipping-rate__button-list" data-destination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-types-conditions="C,W,I" data-disabled="${data.is_disabled ? 'readonly' : ''}">
                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                            <a id="sw_add_cond_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combinations shipping-rate__empty-conditions-tool shipping-rate__add-conditions">
                                <?php echo $_smarty_tpl->__("shipping_add_conditions");?>

                                <span class="flex-inline top">
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_down",'class'=>"hidden",'data'=>array("data-ca-switch-id"=>"add_cond_".((string)$_smarty_tpl->tpl_vars['destination_id']->value))),$_smarty_tpl);?>

                                </span>
                                <span class="flex-inline top">
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_right",'data'=>array("data-ca-switch-id"=>"add_cond_".((string)$_smarty_tpl->tpl_vars['destination_id']->value))),$_smarty_tpl);?>

                                </span>
                            </a>
                        <?php }?>
                        <a class="shipping-rate__not-empty-conditions-tool shipping-rate__show-conditions hidden">
                            <span class="shipping-rate__range"></span>
                            <span class="flex-inline top">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_down"),$_smarty_tpl);?>

                            </span>
                        </a>
                        <a class="shipping-rate__not-empty-conditions-tool shipping-rate__hide-conditions hidden">
                            <span><?php echo $_smarty_tpl->__("shipping_hide_conditions");?>
</span>
                            <span class="flex-inline top">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_right"),$_smarty_tpl);?>

                            </span>
                        </a>
                    </div>
                </div>


                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <div class="shipping-rate__tools" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
                            <li class="shipping-rate-tools__add-table shipping-rate-area__tools-item" data-type="C" data-destination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a><?php echo $_smarty_tpl->__("shipping_add_price_condition");?>
</a>
                            </li>
                            <li class="shipping-rate-tools__remove-table hidden shipping-rate-area__tools-item" data-type="C" data-destination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a class="cm-confirm"><?php echo $_smarty_tpl->__("shipping_remove_price_condition");?>
</a>
                            </li>

                            <li class="shipping-rate-tools__add-table shipping-rate-area__tools-item" data-type="W" data-destination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a><?php echo $_smarty_tpl->__("shipping_add_weight_condition");?>
</a>
                            </li>
                            <li class="shipping-rate-tools__remove-table hidden shipping-rate-area__tools-item" data-type="W" data-destination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a class="cm-confirm"><?php echo $_smarty_tpl->__("shipping_remove_weight_condition");?>
</a>
                            </li>

                            <li class="shipping-rate-tools__add-table shipping-rate-area__tools-item" data-type="I" data-destination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a><?php echo $_smarty_tpl->__("shipping_add_items_condition");?>
</a>
                            </li>
                            <li class="shipping-rate-tools__remove-table hidden shipping-rate-area__tools-item" data-type="I" data-destination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a class="cm-confirm"><?php echo $_smarty_tpl->__("shipping_remove_items_condition");?>
</a>
                            </li>
                            <li class="divider shipping-rate-area__tools-item"></li>
                            <li><?php ob_start();
echo htmlspecialchars((string) fn_url("destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['destination_id']->value)), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>$_prefixVariable1,'text'=>$_smarty_tpl->__('shipping_edit_rate_area')), true);?>
</li>
                            <li class="rate-tools__remove-shipping-rate" data-destination-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a class="cm-object-picker-remove-object object-picker__shipping-rate-delete"><?php echo $_smarty_tpl->__("shipping_remove_rate_area");?>
</a>
                            </li>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <div class="hidden-tools" >
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items')), true);?>

                        </div>
                    </div>
                <?php }?>
            </div>

            <div class="shipping-rate__description">
                <label>${data.description}</label>
            </div> 
        </div>
        
        <div id="tables_rate_condition_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden tables-rate-condition table-responsive-wrapper">
        </div>               
    </div>
</div><?php }
}
