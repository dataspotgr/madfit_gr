<?php
/* Smarty version 4.3.0, created on 2025-04-30 12:22:32
  from 'C:\xampp\htdocs\madfit_gr\design\themes\responsive\templates\addons\ds_boxnow\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6811ebd8452921_86024016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d9595d4268d90b98a2091aaa47070b0350642f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\responsive\\templates\\addons\\ds_boxnow\\hooks\\index\\scripts.post.tpl',
      1 => 1746004884,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6811ebd8452921_86024016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'checkout' && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == 'checkout') {
echo '<script'; ?>
 type="text/javascript">
            var _bn_map_widget_config = {
                type: "popup",
                autoselect: false,
                autoclose: true,
                partnerId: 123,
                parentElement: "#boxnowmap",
                afterSelect: function (selected) { 
                    document.getElementById("litecheckout_s_locker_zip").value = selected.boxnowLockerPostalCode;
                    document.getElementById("litecheckout_s_locker_address").value = selected.boxnowLockerAddressLine1;
                    document.getElementById("litecheckout_s_locker_id").value = selected.boxnowLockerId;
                    updateBoxNowInfo();
                }
            };
    
function updateBoxNowInfo() {
        var lockerId = $("#litecheckout_s_locker_id").val();
        var lockerAddress = $("#litecheckout_s_locker_address").val();
        var lockerZip = $("#litecheckout_s_locker_zip").val();

        if (lockerId && lockerAddress && lockerZip) {
            // Updated to use string concatenation
            var infoHtml = "<div class='boxnow-info'>" +
                               "<p>Locker ID: " + lockerId + "</p>" +
                               "<p>Διεύθυνση: " + lockerAddress + ", " + lockerZip + "</p>" +
                               "<p></p>" +
                           "</div>";

            // Check if .boxnow-info already exists, update instead of re-adding
            if ($(".boxnow-info").length) {
                $(".boxnow-info").html(infoHtml);
            } else {
                $(".boxnow-map-widget-button").before(infoHtml);
            }
        }
}

function loadBoxNowWidget() {
    if (typeof window.BoxNowMapWidget !== "undefined") {
        window.BoxNowMapWidget.init(_bn_map_widget_config);
    } else {
        var e = document.createElement("script");
        e.src = "https://widget-cdn.boxnow.gr/map-widget/client/v5.js";
        e.async = true;
        e.defer = true;
        e.onload = function () {
            window.BoxNowMapWidget.init(_bn_map_widget_config);
        };
        document.head.appendChild(e);
    }
}

// Run on page load
loadBoxNowWidget();
updateBoxNowInfo();

// Reinitialize after AJAX
$(document).ajaxComplete(function () {
    loadBoxNowWidget();
    updateBoxNowInfo();
});

<?php echo '</script'; ?>
>
     
<?php }?> <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ds_boxnow/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ds_boxnow/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'checkout' && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == 'checkout') {
echo '<script'; ?>
 type="text/javascript">
            var _bn_map_widget_config = {
                type: "popup",
                autoselect: false,
                autoclose: true,
                partnerId: 123,
                parentElement: "#boxnowmap",
                afterSelect: function (selected) { 
                    document.getElementById("litecheckout_s_locker_zip").value = selected.boxnowLockerPostalCode;
                    document.getElementById("litecheckout_s_locker_address").value = selected.boxnowLockerAddressLine1;
                    document.getElementById("litecheckout_s_locker_id").value = selected.boxnowLockerId;
                    updateBoxNowInfo();
                }
            };
    
function updateBoxNowInfo() {
        var lockerId = $("#litecheckout_s_locker_id").val();
        var lockerAddress = $("#litecheckout_s_locker_address").val();
        var lockerZip = $("#litecheckout_s_locker_zip").val();

        if (lockerId && lockerAddress && lockerZip) {
            // Updated to use string concatenation
            var infoHtml = "<div class='boxnow-info'>" +
                               "<p>Locker ID: " + lockerId + "</p>" +
                               "<p>Διεύθυνση: " + lockerAddress + ", " + lockerZip + "</p>" +
                               "<p></p>" +
                           "</div>";

            // Check if .boxnow-info already exists, update instead of re-adding
            if ($(".boxnow-info").length) {
                $(".boxnow-info").html(infoHtml);
            } else {
                $(".boxnow-map-widget-button").before(infoHtml);
            }
        }
}

function loadBoxNowWidget() {
    if (typeof window.BoxNowMapWidget !== "undefined") {
        window.BoxNowMapWidget.init(_bn_map_widget_config);
    } else {
        var e = document.createElement("script");
        e.src = "https://widget-cdn.boxnow.gr/map-widget/client/v5.js";
        e.async = true;
        e.defer = true;
        e.onload = function () {
            window.BoxNowMapWidget.init(_bn_map_widget_config);
        };
        document.head.appendChild(e);
    }
}

// Run on page load
loadBoxNowWidget();
updateBoxNowInfo();

// Reinitialize after AJAX
$(document).ajaxComplete(function () {
    loadBoxNowWidget();
    updateBoxNowInfo();
});

<?php echo '</script'; ?>
>
     
<?php }?> <?php }
}
}
