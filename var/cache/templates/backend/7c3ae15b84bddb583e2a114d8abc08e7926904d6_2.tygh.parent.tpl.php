<?php
/* Smarty version 4.3.0, created on 2025-05-22 10:17:58
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\views\pages\components\context_menu\parent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682ecfa65a3fd7_70706828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3ae15b84bddb583e2a114d8abc08e7926904d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\views\\pages\\components\\context_menu\\parent.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/pages/components/parent_page_selector.tpl' => 1,
  ),
),false)) {
function content_682ecfa65a3fd7_70706828 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('parent','parent','reset','apply'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--parent dropleft-mod">
            <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--parent" data-toggle=".bulk-edit__content--parent">
                <?php echo $_smarty_tpl->__("parent");?>

                <span class="caret mobile-hide"></span>
            </span>

    <div class="bulk-edit--reset-dropdown-menu bulk-edit__content bulk-edit__content--parent">
        <div class="bulk-edit-inner bulk-edit-inner--parent">
            <div class="bulk-edit-inner__header">
                <span><?php echo $_smarty_tpl->__("parent");?>
</span>
            </div>
            <div class="bulk-edit-inner__body">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/parent_page_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_label'=>false,'bulkedit_changer'=>"data-ca-bulkedit-parent-changer"), 0, false);
?>
            </div>

            <div class="bulk-edit-inner__footer">
                <button class="btn bulk-edit-inner__btn bulkedit-parent-cancel"
                        role="button"
                        data-ca-bulkedit-mod-parent-cancel
                        data-ca-bulkedit-mod-parent-reset-changer="[data-ca-bulkedit-parent-changer]"
                ><?php echo $_smarty_tpl->__("reset");?>
</button>
                <button class="btn btn-primary bulk-edit-inner__btn bulkedit-parent-update"
                        role="button"
                        data-ca-bulkedit-mod-parent-update
                        data-ca-bulkedit-mod-values="<?php if (!$_smarty_tpl->tpl_vars['parent_pages']->value) {?>[name='page_data[parent_id]']<?php } else { ?>[data-ca-bulkedit-parent-changer]<?php }?>"
                        data-ca-bulkedit-mod-target-form="[name=pages_tree_form]"
                        data-ca-bulkedit-mod-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                        data-ca-bulkedit-mod-dispatch="pages.m_update_parent_page"
                ><?php echo $_smarty_tpl->__("apply");?>
</button>
            </div>
        </div>
    </div>

    <div class="bulk-edit--overlay"></div>
</li>
<?php }
}
