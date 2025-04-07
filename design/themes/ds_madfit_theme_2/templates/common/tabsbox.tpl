

{if !$active_tab}
    {assign var="active_tab" value=$smarty.request.selected_section}
{/if}

{if $navigation.tabs}

    {assign var="empty_tab_ids" value=$content|empty_tabs}
    {assign var="_tabs" value=false}
    {if $top_order_actions}{$top_order_actions nofilter}{/if}
    {script src="js/tygh/accordion.js"} {* Ensure accordion.js handles the accordion behavior *}
    <div class="ty-accordion cm-j-tabs{if $track} cm-track{/if} clearfix">
        <div class="ty-accordion__list">
            {foreach from=$navigation.tabs item=tab key=key name=tabs}
                {if ((!$tabs_section && !$tab.section) || ($tabs_section == $tab.section)) && !$key|in_array:$empty_tab_ids}
                    {if !$active_tab}
                        {assign var="active_tab" value=$key}
                    {/if}
                    {assign var="_tabs" value=true}
                    {if $disable_blocks}
                        {if $key neq "product_tab_99"} {* 99 = tab = Τρόποι πληρωμής *}
                            <div id="{$key}" class="ty-accordion__item{if $key == $active_tab} active{/if}">
                                <a href="javascript:void(0);" class="ty-accordion__header">{if $tab.title}{$tab.title}{/if}</a>
                                <div class="ty-accordion__content">
                                    {if $tab.href}
                                        <a href="{$tab.href|fn_url}">{if $tab.title}{$tab.title}{/if}</a>
                                    {/if}
                                </div>
                            </div>
                        {/if}
                    {else}
                        <div id="{$key}" class="ty-accordion__item{if $key == $active_tab} active{/if}">
                            <a href="javascript:void(0);" class="ty-accordion__header">{if $tab.title}{$tab.title}{/if}</a>
                            <div class="ty-accordion__content">
                                {if $tab.href}
                                    <a href="{$tab.href|fn_url}">{if $tab.title}{$tab.title}{/if}</a>
                                {/if}
                            </div>
                        </div>
                    {/if}
                {/if}
            {/foreach}
        </div>
    </div>

    {if $_tabs}
        <div class="cm-tabs-content ty-accordion__content clearfix" id="accordion_content">
            {*{if $disable_blocks neq 1}*}
                {$content nofilter}
            {*{/if}*}
        </div>
    {/if}

    {if $onclick}
        <script type="text/javascript">
            var hndl = {$ldelim}
                'accordion_{$tabs_section}': {$onclick}
            {$rdelim}
        </script>
    {/if}
{else}
    {$content nofilter}
{/if}

{if $disable_blocks eq 1}
    <script>
        $("#content_product_tab_99").hide();
    </script>
{/if}
