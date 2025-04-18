{script src="js/tygh/exceptions.js"}

<div class="ty-product-bigpicture">
    {hook name="products:view_main_info"}
        {if $product}
            {assign var="obj_id" value=$product.product_id}
            {include file="common/product_data.tpl" product=$product but_role="big" but_text=__("add_to_cart") product_labels_mini=true product_labels_static=true product_labels_rounded=true}

            <div class="ty-product-bigpicture__left">
                <div class="ty-product-bigpicture__left-wrapper">
                 

                    {hook name="products:image_wrap"}
                        {if !$no_images}
                            <div class="ty-product-bigpicture__img {if $product.image_pairs|@count < 1} ty-product-bigpicture__no-thumbs{/if} cm-reload-{$product.product_id} {if $settings.Appearance.thumbnails_gallery == "Y"}ty-product-bigpicture__as-gallery{else}ty-product-bigpicture__as-thumbs{/if}" data-ca-previewer="true" id="product_images_{$product.product_id}_update">
                                {include file="views/products/components/product_images.tpl" product=$product show_detailed_link="Y" thumbnails_size=55 }
                            <!--product_images_{$product.product_id}_update--></div>
                        {/if}
                    {/hook}
                </div>
            </div>


            <div class="ty-product-bigpicture__right">

            {hook name="products:main_info_title"}
                {if !$hide_title}
                    <h1 class="ty-product-block-title" {live_edit name="product:product:{$product.product_id}"}><bdi>{$product.product nofilter}</bdi></h1>
                {/if}
            {/hook}

                   <div class="ty-product-block__sku">
                        {assign var="sku" value="sku_`$obj_id`"}
                        {$smarty.capture.$sku nofilter}
                    </div>

                {hook name="products:brand"}
                    {hook name="products:brand_bigpicture"}
                        <div class="ty-product-bigpicture__brand">
                            {include file="views/products/components/product_features_short_list.tpl" features=$product.header_features feature_image=true}
                        </div>
                    {/hook}
                {/hook}


                {assign var="form_open" value="form_open_`$obj_id`"}
                {$smarty.capture.$form_open nofilter}

                {assign var="old_price" value="old_price_`$obj_id`"}
                {assign var="price" value="price_`$obj_id`"}
                {assign var="clean_price" value="clean_price_`$obj_id`"}
                {assign var="list_discount" value="list_discount_`$obj_id`"}
                {assign var="discount_label" value="discount_label_`$obj_id`"}

                <div class="{if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}prices-container {/if}price-wrap">
                    {if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}
                        <div class="ty-product-bigpicture__prices">
                            {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}
                    {/if}

                    {hook name="products:main_price"}
                        {if $smarty.capture.$price|trim}
                            <div class="ty-product-block__price-actual">
                                {$smarty.capture.$price nofilter}
                            </div>
                        {/if}
                    {/hook}

                    {if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}
                            <div class="ty-product-block__price-old">
                                {$smarty.capture.$clean_price nofilter}
                                {$smarty.capture.$list_discount nofilter}

                                {assign var="product_labels" value="product_labels_`$obj_prefix``$obj_id`"}
                                {$smarty.capture.$product_labels nofilter}
                            </div>
                        </div>
                    {/if}
                </div>

                <div class="ty-product-bigpicture__sidebar-bottom">

                    {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                    <div class="ty-product-block__option">
                        {assign var="product_options" value="product_options_`$obj_id`"}
                        {$smarty.capture.$product_options nofilter}
                    </div>
                    {if $capture_options_vs_qty}{/capture}{/if}

                    {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                   {*
                    <div class="ty-product-block__advanced-option clearfix">
                        {assign var="advanced_options" value="advanced_options_`$obj_id`"}
                        {$smarty.capture.$advanced_options nofilter}
                    </div>
                    *}
                    {if $capture_options_vs_qty}{/capture}{/if}

                 

                    {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                    <div class="ty-product-block__field-group">
                        {assign var="product_amount" value="product_amount_`$obj_id`"}
                        {$smarty.capture.$product_amount nofilter}

                        {assign var="qty" value="qty_`$obj_id`"}
                        {$smarty.capture.$qty nofilter}

                        {assign var="min_qty" value="min_qty_`$obj_id`"}
                        {$smarty.capture.$min_qty nofilter}
                    </div>
                    {if $capture_options_vs_qty}{/capture}{/if}

                    {assign var="product_edp" value="product_edp_`$obj_id`"}
                    {$smarty.capture.$product_edp nofilter}

                    {hook name="products:promo_text"}
                    {if $product.promo_text}
                    <div class="ty-product-block__note">
                        {$product.promo_text nofilter}
                    </div>
                    {/if}
                    {/hook}

                    {if $show_descr}
                    {assign var="prod_descr" value="prod_descr_`$obj_id`"}
                        <h3 class="ty-product-block__description-title">{__("description")}</h3>
                        <div class="ty-product-block__description">{$smarty.capture.$prod_descr nofilter}</div>
                    {/if}

                    {if $capture_buttons}{capture name="buttons"}{/if}
                    <div class="ty-product-block__button">
                        {if $show_details_button}
                            {include file="buttons/button.tpl" but_href="products.view?product_id=`$product.product_id`" but_text=__("view_details") but_role="submit"}
                        {/if}

                        {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                        {$smarty.capture.$add_to_cart nofilter}

                        {assign var="list_buttons" value="list_buttons_`$obj_id`"}
                        {$smarty.capture.$list_buttons nofilter}
                    </div>
                    {if $capture_buttons}{/capture}{/if}
                </div>

                {hook name="products:product_form_close_tag"}
                    {$form_close="form_close_`$obj_id`"}
                    {$smarty.capture.$form_close nofilter}
                {/hook}

                {hook name="products:product_detail_bottom"}
                {/hook}

                {if $show_product_tabs}
                {include file="views/tabs/components/product_popup_tabs.tpl"}
                {$smarty.capture.popupsbox_content nofilter}
                {/if}

                {if $smarty.capture.hide_form_changed == "Y"}
                    {assign var="hide_form" value=$smarty.capture.orig_val_hide_form}
                {/if}

                 <div class="ds-custom-blocks">
                    <div class="ds-tabs-wrapper">
                        {if $show_product_tabs}
                            {hook name="products:product_tabs"}
                                {include file="views/tabs/components/product_tabs.tpl"}
                                {if $blocks.$tabs_block_id.properties.wrapper}
                                    {include file=$blocks.$tabs_block_id.properties.wrapper content=$smarty.capture.tabsbox_content title=$blocks.$tabs_block_id.description}
                                {else}
                                    {$smarty.capture.tabsbox_content nofilter}
                                {/if}
                            {/hook}
                        {/if}
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        {/if}

    {/hook}

  
</div>

{capture name="mainbox_title"}{assign var="details_page" value=true}{/capture}