{*{assign var='admin_user_name' value=$auth.user_id|fn_ds_kikkaboo_bridge_admin_user_name}*}
{capture name="mainbox"}
    <div class="table-responsive-wrapper">
        <div id="content-send">
            <table style="width:100%;">
                <thead>
                <tr>
                    <th style="text-align: left;">{__("ds_bridge_products_updates_description")}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr><td><strong>{__("ds_bridge_products_total")}</strong>&nbsp;{$products_total}</td></tr>
                <tr><td><strong>{__("ds_bridge_products_create")}</strong>&nbsp;{$products_created}</td></tr>
                <tr><td><strong>{__("ds_bridge_products_update")}</strong>&nbsp;{$products_updated}</td></tr>
                </tbody>
            </table>
        </div>
    </div>
{/capture}
{include file="common/mainbox.tpl" title=__("ds_bridge_products_updates_description") content=$smarty.capture.mainbox select_languages=false buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar adv_buttons=$smarty.capture.adv_buttons}