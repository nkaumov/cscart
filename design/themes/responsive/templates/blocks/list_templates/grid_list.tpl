{if $products}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    {script src="js/tygh/exceptions.js"}

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}

    {if !$no_sorting}
        {include file="views/products/components/sorting.tpl"}
    {/if}

    {if !$show_empty}
        {split data=$products size=$columns|default:"2" assign="splitted_products"}
    {else}
        {split data=$products size=$columns|default:"2" assign="splitted_products" skip_complete=true}
    {/if}

    {math equation="100 / x" x=$columns|default:"2" assign="cell_width"}
    {if $item_number == "Y"}
        {assign var="cur_number" value=1}
    {/if}

    {script src="js/tygh/product_image_gallery.js"}

    {if $settings.Appearance.enable_quick_view == 'Y'}
        {$quick_nav_ids = $products|fn_fields_from_multi_level:"product_id":"product_id"}
    {/if}

    <div class="custom-container">
        <div class="custom-products-header">
            <h2 class="custom-section-title">Распродажа</h2>
        </div>
        
        <div class="custom-grid-list">
        
        {strip}
            {foreach from=$splitted_products item="sproducts" name="sprod"}
                {foreach from=$sproducts item="product" name="sproducts"}
                    <div class="custom-grid-list__item">
                        {if $product}
                            <div class="custom-grid-list__image-container">
    {include file="views/products/components/product_icon.tpl" product=$product show_gallery=true}
</div>




                            <div class="custom-grid-list__item-name">
                                {$product.product}
                            </div>

                            <div class="custom-availability">В наличии</div>

                            <div class="custom-price">{$product.price} р</div>
                            <div class="custom-old-price">{$product.list_price} р</div>

                            <div class="custom-view-button">Просмотр</div>
                            <div class="custom-favorite-button" onclick="toggleFavorite(this)">
                                <i class="fas fa-heart"></i>
                            </div>
                        {/if}
                    </div>
                {/foreach}
            {/foreach}
        {/strip}
        </div>
    </div>

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}

    <script>
        function toggleFavorite(btn) {
            btn.classList.toggle('active');
        }
    </script>

{/if}

{capture name="mainbox_title"}{$title}{/capture}
