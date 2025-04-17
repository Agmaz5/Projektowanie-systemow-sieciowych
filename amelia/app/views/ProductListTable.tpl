
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_url}productListPart','table'); return false;">
    <fieldset style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap; margin-bottom: 20px;">
        <input type="text" name="price" value="{$priceP|default:''}" placeholder="Min price" />
        <input type="text" name="name" value="{$nameF|default:''}" placeholder="Product name" />
        <input type="hidden" name="page" id="form-page" value="{$page|default:1}" />

        <button type="submit" class="pure-button pure-button-primary" style="height: 40px; min-width: 70px;">Filter</button>


</form>
        
        
        
<form action="{$conf->action_url}displayAll" method="post" class="pure-form" style="text-align: center;">
    <input type="hidden" name="price" value="" />
    <input type="hidden" name="name" value="" />
    <input type="hidden" name="page" value="1" />
    <button type="submit"
            class="pure-button"
            style="background: #f44336; color: white; height: 40px; min-width: 70px;">
        Reset
    </button>
        </fieldset>

</form>        
        
   
    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; max-width: 1200px; margin: auto;">
        {foreach $products as $product}
            <div class="product" style="border: 1px solid #ddd; border-radius: 8px; padding: 15px; width: 300px; background: #f9f9f9; box-shadow: 0 4px 8px rgba(0,0,0,0.1); display: flex; flex-direction: column; justify-content: space-between; min-height: 250px;">
                <h3 style="margin-bottom: 10px;">{$product.productName}</h3>
                <p>{$product.description}</p>
                <p><strong>Price:</strong> {$product.price} USD</p>
                <p><strong>Stock:</strong> {$product.stock}</p>

                <form action="{$conf->action_url}addToCart" method="post" style="text-align: center; margin-top: auto;">
                    <input type="hidden" name="productId" value="{$product.idProduct}" />
                    <input name="quantity" value="1" style="width: 50px;" />
                    <input type="submit" value="Add To Cart" class="pure-button pure-button-primary" style="margin-top: 10px;" />
                </form>
            </div>
        {/foreach}
    </div>

   
    <div style="text-align: center; margin-top: 20px;">
        <button type="button" onclick="changePage(1)">&laquo;</button>

        {if $page > 1}
            <button type="button" onclick="changePage({$page - 1})">&lt; Previous</button>
        {/if}

        <span style="margin: 0 10px; font-weight: bold;">Page {$page} / {$totalPages}</span>

        {if $hasNextPage}
            <button type="button" onclick="changePage({$page + 1})">Next &gt;</button>
        {/if}

        <button type="button" onclick="changePage({$totalPages})">&raquo;</button>
    </div>
