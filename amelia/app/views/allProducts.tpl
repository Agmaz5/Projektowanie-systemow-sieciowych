{extends file="layout.tpl"}

{block name="content"}
    
<h3 style="text-align: center;">All Product List</h3>


<br>

<div style="display: flex; justify-content: center; align-items: center; gap: 0px; margin-bottom: 20px;">

    <div style="display: inline-block;">
        <form action="{$conf->action_url}displayAll" method="post" style="display: inline;">
            <input type="submit" name="" value="Filter" style="padding: 5px 10px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;" />
            <input type="text" name="price" value="{$priceP}" placeholder="Enter min price" style="padding: 5px; margin-right: 5px;"/>
            <input type="text" name="name" value="{$nameF}" placeholder="Enter name" style="padding: 5px; margin-right: 5px;"/>      
            <input type="hidden" name="page" value="1" />

        </form>
    </div>
    
            
    <div style="display: inline-block;">
        <form action="{$conf->action_url}displayAll" method="post" style="display: inline;">
            <input type="hidden" name="price" value="" />
            <input type="hidden" name="name" value="" />
            <input type="submit" name="" value="Reset Filters"  style="padding: 5px 10px; background: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;" />
            <input type="hidden" name="page" value="1" />
        </form>
    </div>
</div>


<br><br>

<div style="
    display: flex; 
    flex-wrap: wrap; 
    gap: 20px; 
    justify-content: center; 
    align-items: stretch;
    max-width: 1200px;
    margin: 0 auto;
">
    
    {foreach $products as $product}

                <div class="product" style="
                    border: 1px solid #ddd; 
                    border-radius: 8px; 
                    padding: 15px; 
                    width: 300px; 
                    background: #f9f9f9; 
                    box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
                    position: relative; 
                    display: flex; 
                    flex-direction: column; 
                    justify-content: space-between; 
                    min-height: 250px;
                ">
                    <h3 style="margin: 0 0 10px; color: #333;">{$product.productName}</h3>
                    <p style="margin: 5px 0; color: #666;">{$product.description}</p>
                    <p style="margin: 5px 0; font-weight: bold;">Price: {$product.price} USD</p>
                    <p style="margin: 5px 0; color: #888;">Stock: {$product.stock}</p>

                    <!-- Add to Cart -->
                    <div style="margin-top: auto; text-align: center;">
                        <form action="{$conf->action_url}addToCart" method="post" style="margin: 0;">
                            <input type="hidden" name="productId" value="{$product.idProduct}" />
                            <input name="quantity" value="1" style="width: 50px; text-align: center;"/>
                            <input type="submit" name="addtocart" value="Add To Cart" style="
                                padding: 8px 15px; 
                                border: none; 
                                border-radius: 5px; 
                                background: #4CAF50; 
                                color: white; 
                                cursor: pointer;
                                margin-top: 10px;
                            " />
                        </form>
                    </div>
                </div>
    {/foreach}

    

    
</div>

<br><br>
<br><br>
<div style="text-align: center;">
    
        <form action="{$conf->action_url}displayAll" method="post" style="display: inline;">
            <input type="hidden" name="page" value="1" />
            <input type="hidden" name="price" value="{$priceP}" />
            <input type="hidden" name="name" value="{$nameF}" />
            <input type="submit" value="<<" style="padding: 8px 12px; margin-right: 10px;" />
        </form>    
    
    
    {if $page > 1}
        <form action="{$conf->action_url}displayAll" method="post" style="display: inline;">
            <input type="hidden" name="page" value="{$page - 1}" />
            <input type="hidden" name="price" value="{$priceP}" />
            <input type="hidden" name="name" value="{$nameF}" />
            <input type="submit" value="< Previous" style="padding: 8px 12px; margin-right: 10px;" />
        </form>
    {/if}

    <span style="font-weight: bold;">Page {$page}</span>

    {if $hasNextPage}
        <form action="{$conf->action_url}displayAll" method="post" style="display: inline;">
            <input type="hidden" name="page" value="{$page + 1}" />
            <input type="hidden" name="price" value="{$priceP}" />
            <input type="hidden" name="name" value="{$nameF}" />
            <input type="submit" value="Next >" style="padding: 8px 12px; margin-left: 10px;" />
        </form>
    {/if}
    
    
        <form action="{$conf->action_url}displayAll" method="post" style="display: inline;">
            <input type="hidden" name="page" value="{$totalPages}" />
            <input type="hidden" name="price" value="{$priceP}" />
            <input type="hidden" name="name" value="{$nameF}" />
            <input type="submit" value=">>" style="padding: 8px 12px; margin-left: 10px;" />
        </form>
    
    
</div>
<br><br>


<br><br>    


{/block}
