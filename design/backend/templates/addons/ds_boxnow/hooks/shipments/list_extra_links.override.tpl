{hook name="shipments:list_extra_links"}
    <li>{btn type="list" text=__("view") href="shipments.details?shipment_id=`$shipment.shipment_id`"}</li>
    <li>{btn type="list" text=__("print_slip") class="cm-new-window" href="shipments.packing_slip?shipment_ids[]=`$shipment.shipment_id`"}</li>
    {if fn_ds_boxnow_boxnow_carrier($shipment.shipment_id)  === "boxnow"}
        {assign var="label_url" value=fn_url("ds_boxnow.get_label?shipment_id=`$shipment.shipment_id`", "A")}
        {assign var="cancel_url" value=fn_url("ds_boxnow.cancel_shipment?shipment_id=`$shipment.shipment_id`", "A")}
        <li>
            <a href="{$label_url}" target="_blank">{__("boxnow_print_label")}</a>
        </li>
    
        <li>
            <a href="{$cancel_url}" class="cm-confirm" data-ca-confirm-text="{__("text_are_you_sure_to_cancel_boxnow")}">
                {__("boxnow_cancel_shipment")}
            </a>
        </li>
    {/if}
    <li class="divider"></li>
    <li>{btn type="list" text=__("delete") class="cm-confirm" href="shipments.delete?shipment_ids[]=`$shipment.shipment_id`&redirect_url=`$return_current_url`" method="POST"}</li>
{/hook}