{capture name="mainbox"}
    {$features_status = fn_ds_eldico_bridge_get_feature_status()}
    <div class="table-responsive-wrapper">
        <div id="content-send">
            <form action="{$config.current_url|fn_url}" method="POST" name="update_posts_form">
                <input type="hidden" name="redirect_url" value="{$config.current_url}"/>
                <table style="width:100%;">
                    <thead>
                    <tr>
                        <td colspan="2">{__("ds_bridge_features_status_description_instructions")}</td>
                    </tr>
                    <tr>
                        <th style="text-align: left;">{__("ds_bridge_features_name")}</th>
                        <th style="text-align: left;">{__("ds_bridge_features_status")}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {if $features_status}
                        {foreach from=$features_status key=k item=v}
                            <tr>
                                <td>
                                    <input type="hidden" name="feature_status[{$k}][]" value="{$v.id}" />
                                    <input type="text" name="feature_status[{$k}][]" value="{$v.eldc_feature_name}" readonly/>
                                </td>
                                <td>
                                    <select name="feature_status[{$k}][]" id="feature_status">
                                        <option value="none">- Επιλογή κατάστασης -</option>
                                        <option value="1" {if $v.eldc_feature_status eq 1} selected="selected" {/if}>
                                            Ενεργό
                                        </option>
                                        <option value="0" {if $v.eldc_feature_status eq 0} selected="selected" {/if}>
                                            Ανενεργό
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        {/foreach}
                    {/if}
                    </tbody>
                </table>
            </form>
        </div>
    </div>
{/capture}

{capture name="buttons"}
    {$smarty.capture.buttons_insert nofilter}
    {include file="buttons/save.tpl" but_role="action" but_target_form="update_posts_form" but_meta="cm-submit"}
{/capture}

{include file="common/mainbox.tpl" title=__("ds_bridge_features_status_description") content=$smarty.capture.mainbox select_languages=false buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar adv_buttons=$smarty.capture.adv_buttons}