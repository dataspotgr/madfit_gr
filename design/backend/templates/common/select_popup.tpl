{$notify_customer_status = true}
{$notify_department_status = true}
{$notify_vendor_status = true}
{$_update_controller = $update_controller|default:"tools"}
{$custom_href = $custom_href|default:false}
{$status = $status|default:""}
{$text_class = ""}
{$status_long_length = 10}
{if $items_status}
    {$items_status_text = $items_status.$status|default:$default_status_text}
    {$is_items_status_text_long = $items_status_text|count_characters:true > $status_long_length}
    {$text_class = ($is_items_status_text_long) ? "status--long" : ""}
{/if}
{if $type}
    {$type_class = $type|replace:"_":"-"}
{/if}

{if !$non_editable}
    {$has_permission = fn_check_permissions($_update_controller, "update_status", "admin", "POST", ["table" => $table])}
    {if !$has_permission}
        {$non_editable = true}
    {/if}
{/if}

{if $non_editable || $display == "text"}
    <span class="view-status view-status-{$status|lower} {$text_class} {if $type_class}view-status--type view-status--type-{$type_class}{/if}" {if $items_status && $is_items_status_text_long}title="{$items_status_text}"{/if}>{strip}
        {if $items_status}
            {$items_status_text}
        {else}
            {if $status == "A"}
                {__("active")}
            {elseif $status == "H"}
                {__("hidden")}
            {elseif $status == "D"}
                {__("disabled")}
            {elseif $status == "P"}
                {__("pending")}
            {elseif $status == "N"}
                {__("new")}
            {/if}
        {/if}
    {/strip}</span>
{else}
{assign var="prefix" value=$prefix|default:"select"}
{assign var="btn_meta" value=$btn_meta|default:"btn btn-link"}
{assign var="popup_additional_class" value=$popup_additional_class}
<div class="cm-popup-box {if !$hide_for_vendor}dropdown{/if} {$popup_additional_class}">
    {if !$hide_for_vendor}
        <a href="#" {if $id}id="sw_{$prefix}_{$id}_wrap"{/if} class="{if $btn_meta}{$btn_meta}{/if} {$text_class} status-dropdown status-dropdown-{$status|lower} {if $type_class}status-dropdown--type status-dropdown--type-{$type_class}{/if} btn dropdown-toggle{if $id} cm-combination{/if} {if $text_wrap}dropdown-toggle--text-wrap{/if}" {if $items_status && $is_items_status_text_long}title="{$items_status_text}"{/if} data-toggle="dropdown">{strip}
    {/if}
        {if $items_status}
            {$items_status_text}
        {else}
            {if $status == "A"}
                {__("active")}
            {elseif $status == "D"}
                {__("disabled")}
            {elseif $status == "H"}
                {__("hidden")}
            {elseif $status == "P"}
                {__("pending")}
            {elseif $status == "N"}
                {__("new")}
            {/if}
        {/if}
    {if !$hide_for_vendor}
        <span class="caret status-caret"></span>
        {/strip}</a>
    {/if}
    {if $id && !$hide_for_vendor}
        {if $table && $object_id_name}{capture name="_extra"}&table={$table}&id_name={$object_id_name}{/capture}{/if}
            <ul class="dropdown-menu">
            {if !$items_status}
                {assign var="items_status" value=$status|fn_get_default_statuses:$hidden}
                {assign var="extra_params" value="&table=`$table`&id_name=`$object_id_name`"}
            {else}
                {assign var="extra_params" value="`$smarty.capture._extra``$extra`"}
            {/if}
            {if $st_return_url}
                {$return_url = $st_return_url|escape:url}
                {$extra_params = "`$extra_params`&redirect_url=`$return_url`"}
            {/if}
            {if $items_status}
                {foreach from=$items_status item="val" key="st"}
                {$st = $st|default:""}
                <li {if $status == $st}class="disabled"{/if}>
                    <a
                        class="{if $text_wrap}dropdown--text-wrap{/if} {if $confirm}cm-confirm {/if}status-link status-link-{$st|lower} {if $type_class}status-link--type status-link--type-{$type_class}{/if} {if $status == $st}active{else}cm-ajax cm-post{if $ajax_full_render} cm-ajax-full-render{/if}{/if} {if $status_meta}{$status_meta}{/if}"
                        {if $status_target_id} data-ca-target-id="{$status_target_id}"{/if}
                        {if $custom_href}
                            href="{$custom_href}"
                        {else}
                            href="{"`$_update_controller`.update_status?id=`$id`&status=`$st``$extra_params``$dynamic_object`"|fn_url}"
                        {/if}
                        onclick="return fn_check_object_status(this, '{$st|lower}', '{if $statuses}{$statuses[$st].params.color|default:''}{/if}');"
                        {if $st_result_ids}data-ca-target-id="{$st_result_ids}"{/if}
                        data-ca-event="ce.update_object_status_callback"
                        {if $val|count_characters:true > $status_long_length}data-ca-select-popup-is-long-status="true"{/if}
                        title="{if $custom_title}{$custom_title}{else}{$val}{/if}"
                    >{$val}</a>
                </li>
                {/foreach}
            {/if}
            {capture name="list_items"}
                {include file="common/notify_checkboxes.tpl" }

            {/capture}

            {if $smarty.capture.list_items|trim}
                {$smarty.capture.list_items nofilter}
            {/if}
        </ul>
        {if !$smarty.capture.avail_box}
        {script src="js/tygh/select_popup.js"}
        {capture name="avail_box"}Y{/capture}
        {/if}
    {/if}
</div>
{/if}
