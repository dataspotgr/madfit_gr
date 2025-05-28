<?php
/* Smarty version 4.3.0, created on 2025-05-28 14:48:48
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\debugger\components\config_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6836f820391929_34121843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eea1b89b6b077ba8a8365818c177d98db7cc670c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\debugger\\components\\config_tab.tpl',
      1 => 1743766598,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6836f820391929_34121843 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="deb-tab-content" id="DebugToolbarTabConfigContent">
    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabConfigConfig">Config</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigSettings">Settings</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigRuntime">Runtime</a></li>
        </ul>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigConfig">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Config</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_foreach_recursive($_smarty_tpl->tpl_vars['config']->value,"."), 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value) == 'boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars((string) strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </div>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigSettings">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Settings</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_foreach_recursive($_smarty_tpl->tpl_vars['settings']->value,"."), 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value) == 'boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars((string) strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </div>
    </div>
    
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigRuntime">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Runtime</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_foreach_recursive($_smarty_tpl->tpl_vars['data']->value['runtime'],"."), 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value) == 'boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'object' || $_smarty_tpl->tpl_vars['value']->value === 'object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value) == 'resource' || $_smarty_tpl->tpl_vars['value']->value === 'resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars((string) strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        </div>
    </div>
<!--DebugToolbarTabConfigContent--></div><?php }
}
