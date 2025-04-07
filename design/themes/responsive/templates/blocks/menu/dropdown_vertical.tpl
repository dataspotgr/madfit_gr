{** block-description:dropdown_vertical **}

<div class="ty-menu ty-menu-vertical ty-menu-vertical__dropdown">
    <ul id="vmenu_{$block.block_id}" class="ty-menu__items cm-responsive-menu{if $block.properties.right_to_left_orientation =="Y"} rtl{/if}">
        <li class="ty-menu__item ds-burger-menu-wrapper ty-menu__menu-btn visible-phone cm-responsive-menu-toggle-main">
            <a class="ty-menu__item-link">
                <span class="ds-products-text hidden-phone">Προϊόντα</span>
                <span class="ds-burger-menu">
                    <img  src="/madfit_gr/images/design_images/menu.png">
                </span>
            </a>
        </li>
        {include file="blocks/sidebox_dropdown.tpl" items=$items separated=true submenu=false name="item" item_id="param_id" childs="subitems"}
    </ul>
</div>
