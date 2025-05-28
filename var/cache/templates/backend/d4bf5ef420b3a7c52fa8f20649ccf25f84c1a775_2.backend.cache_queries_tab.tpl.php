<?php
/* Smarty version 4.3.0, created on 2025-05-28 14:48:06
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\debugger\components\cache_queries_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6836f7f6e82459_68086815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4bf5ef420b3a7c52fa8f20649ccf25f84c1a775' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\debugger\\components\\cache_queries_tab.tpl',
      1 => 1743766598,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
    'backend:views/debugger/components/sorter.tpl' => 2,
  ),
),false)) {
function content_6836f7f6e82459_68086815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<div class="deb-tab-content" id="DebugToolbarTabCacheQueriesContent">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cache_queries_tabs", null, null);?>
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabCacheQueriesList">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cache_queries_list_table", null, null);?>
        <div class="table-wrapper">
            <table class="deb-table" id="DebugToolbarSubTabCacheQueriesListTable">
                <caption>Queries <small class="deb-font-gray">time: <?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['data']->value['totals']['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</small></caption>
                <tr>
                    <th style="width: 35px;"><?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"№",'field'=>"number",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'url'=>"debugger.cache_queries",'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabCacheQueriesContent"), 0, false);
?></th>
                    <th>Query</th>
                    <th style="width: 60px;"><?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Time",'field'=>"time",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'url'=>"debugger.cache_queries",'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabCacheQueriesContent"), 0, true);
?></th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['list'], 'query', false, 'key');
$_smarty_tpl->tpl_vars['query']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['query']->value) {
$_smarty_tpl->tpl_vars['query']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['query']->value['time'] > $_smarty_tpl->tpl_vars['long_query_time']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('color', "deb-light-red");?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['query']->value['time'] > $_smarty_tpl->tpl_vars['medium_query_time']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('color', "deb-light2-red");?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('color', false);?>
                    <?php }?>
                    <tr>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td class="sql <?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');
}?>"><pre><code><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['query']->value['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    </tr>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cache_queries_list_table');?>

    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabCacheQueriesList">Queries list</a></li>
        </ul>
    </div>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cache_queries_tabs');?>

    <!--DebugToolbarTabCacheQueriesContent--></div>
<?php }
}
