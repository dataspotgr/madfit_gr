{*{assign var='admin_user_name' value=$auth.user_id|fn_ds_eldico_bridge_admin_user_name}*}
{capture name="mainbox"}
    <div class="table-responsive-wrapper">
        <div id="content-send">
            <table style="width:100%;">
                <thead>
                <tr>
                    <th>{__('ds_eldico_bridge_logs_aa')}</th>
                    <th>{__('ds_eldico_bridge_logs_product_id')}</th>
                    <th>{__('ds_eldico_bridge_logs_product_id')}</th>
                    <th>{__('ds_eldico_bridge_logs_created_at')}</th>
                </tr>
                </thead>
                <tbody>
                {foreach from=$logs_records item="log_record_item"}
                    <tr style="text-align:center;">
                        <td>{$log_record_item['id']}</td>
                        <td>{$log_record_item['logs_product']}</td>
                        <td>{$log_record_item['logs_error']}</td>
                        <td>{$log_record_item['logs_created_at']}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
            <table style="margin-top:4%;">
                <tr>
                    <td style="text-align: left;">{__("ds_eldico_bridge_logs_description")}</td>
                </tr>
            </table>
        </div>
    </div>
{/capture}
{include file="common/mainbox.tpl" title=__("ds_eldico_bridge_logs") content=$smarty.capture.mainbox select_languages=false buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar adv_buttons=$smarty.capture.adv_buttons}