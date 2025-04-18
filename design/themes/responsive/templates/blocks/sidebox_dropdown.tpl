{hook name="blocks:sidebox_dropdown"}{strip}

{foreach $items as $item}
{hook name="blocks:sidebox_dropdown_element"}

    <li class="ty-menu__item cm-menu-item-responsive {if $item.$childs}dropdown-vertical__dir{/if}{if $item.active || $item|fn_check_is_active_menu_item:$block.type} ty-menu__item-active{/if} menu-level-{$level}{if $item.class} {$item.class}{/if}">
        {if $item.$childs}
            <div class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                {include_ext file="common/icon.tpl"
                    class="ty-icon-down-open ty-menu__icon-open"
                }
                {include_ext file="common/icon.tpl"
                    class="ty-icon-up-open ty-menu__icon-hide"
                }
            </div>
            <div class="ty-menu__item-arrow hidden-phone">
                {include_ext file="common/icon.tpl" class="ty-icon-right-open"}
                {include_ext file="common/icon.tpl" class="ty-icon-left-open"}
            </div>
        {/if}
        {assign var="item_url" value=$item|fn_form_dropdown_object_link:$block.type}
        <div class="ty-menu__submenu-item-header">
            <a{if $item_url} href="{$item_url}"{/if} {if $item.new_window}target="_blank"{/if} class="ty-menu__item-link">{$item.$name}</a>
        </div>

        {if $item.$childs}
            {hook name="blocks:sidebox_dropdown_childs"}
            <div class="ty-menu__submenu">
                <ul class="ty-menu__submenu-items cm-responsive-menu-submenu">
                    {include file="blocks/sidebox_dropdown.tpl" items=$item.$childs separated=true submenu=true iid=$item.$item_id level=$level+1}
                </ul>
            </div>
            {/hook}
        {/if}
    </li>
{/hook}

{/foreach}
{/strip}{/hook}
