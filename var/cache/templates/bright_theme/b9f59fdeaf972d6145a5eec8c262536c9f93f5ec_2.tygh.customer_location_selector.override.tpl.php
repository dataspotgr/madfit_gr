<?php
/* Smarty version 4.3.0, created on 2025-03-26 02:43:09
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\store_locator\hooks\geo_maps\customer_location_selector.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3cc2d841116_61049576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9f59fdeaf972d6145a5eec8c262536c9f93f5ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\store_locator\\hooks\\geo_maps\\customer_location_selector.override.tpl',
      1 => 1742455423,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e3cc2d841116_61049576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['locations']->value) {?>
    <ul class="ty-store-locator__geolocation__locations">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'country', false, 'country_id');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country_id']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
            <li class="ty-store-locator__geolocation__location__country">
                <h3 class="ty-store-locator__geolocation__location__country__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
                <ul class="ty-store-locator__geolocation__location__states">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country']->value['states'], 'state', false, 'state_id');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state_id']->value => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                        <li class="ty-store-locator__geolocation__location__state">
                            <h4 class="ty-store-locator__geolocation__location__state__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
                            <ul class="ty-store-locator__geolocation__location__cities">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['state']->value['cities'], 'city');
$_smarty_tpl->tpl_vars['city']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->do_else = false;
?>
                                    <li class="ty-store-locator__geolocation__location__city">
                                        <a href="#"
                                           data-ca-store-locator-location-element="city"
                                           data-ca-store-locator-location-city="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
                                           class="cm-dialog-closer"
                                        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/geo_maps/customer_location_selector.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/hooks/geo_maps/customer_location_selector.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['locations']->value) {?>
    <ul class="ty-store-locator__geolocation__locations">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'country', false, 'country_id');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country_id']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
            <li class="ty-store-locator__geolocation__location__country">
                <h3 class="ty-store-locator__geolocation__location__country__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
                <ul class="ty-store-locator__geolocation__location__states">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country']->value['states'], 'state', false, 'state_id');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state_id']->value => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                        <li class="ty-store-locator__geolocation__location__state">
                            <h4 class="ty-store-locator__geolocation__location__state__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
                            <ul class="ty-store-locator__geolocation__location__cities">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['state']->value['cities'], 'city');
$_smarty_tpl->tpl_vars['city']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->do_else = false;
?>
                                    <li class="ty-store-locator__geolocation__location__city">
                                        <a href="#"
                                           data-ca-store-locator-location-element="city"
                                           data-ca-store-locator-location-city="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-state-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-store-locator-location-country-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
                                           class="cm-dialog-closer"
                                        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
}
