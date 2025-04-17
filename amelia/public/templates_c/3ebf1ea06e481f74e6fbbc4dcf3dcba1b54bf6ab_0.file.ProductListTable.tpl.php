<?php
/* Smarty version 4.3.4, created on 2025-04-17 22:37:02
  from 'D:\Instalki\XAMPP\htdocs\amelia\app\views\ProductListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6801666eb4bde2_63461040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ebf1ea06e481f74e6fbbc4dcf3dcba1b54bf6ab' => 
    array (
      0 => 'D:\\Instalki\\XAMPP\\htdocs\\amelia\\app\\views\\ProductListTable.tpl',
      1 => 1744922139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6801666eb4bde2_63461040 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productListPart','table'); return false;">
    <fieldset style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap; margin-bottom: 20px;">
        <input type="text" name="price" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['priceP']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="Min price" />
        <input type="text" name="name" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['nameF']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="Product name" />
        <input type="hidden" name="page" id="form-page" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page']->value ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);?>
" />

        <button type="submit" class="pure-button pure-button-primary" style="height: 40px; min-width: 70px;">Filter</button>


</form>
        
        
        
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
displayAll" method="post" class="pure-form" style="text-align: center;">
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <div class="product" style="border: 1px solid #ddd; border-radius: 8px; padding: 15px; width: 300px; background: #f9f9f9; box-shadow: 0 4px 8px rgba(0,0,0,0.1); display: flex; flex-direction: column; justify-content: space-between; min-height: 250px;">
                <h3 style="margin-bottom: 10px;"><?php echo $_smarty_tpl->tpl_vars['product']->value['productName'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
                <p><strong>Price:</strong> <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 USD</p>
                <p><strong>Stock:</strong> <?php echo $_smarty_tpl->tpl_vars['product']->value['stock'];?>
</p>

                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addToCart" method="post" style="text-align: center; margin-top: auto;">
                    <input type="hidden" name="productId" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['idProduct'];?>
" />
                    <input name="quantity" value="1" style="width: 50px;" />
                    <input type="submit" value="Add To Cart" class="pure-button pure-button-primary" style="margin-top: 10px;" />
                </form>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

   
    <div style="text-align: center; margin-top: 20px;">
        <button type="button" onclick="changePage(1)">&laquo;</button>

        <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
            <button type="button" onclick="changePage(<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
)">&lt; Previous</button>
        <?php }?>

        <span style="margin: 0 10px; font-weight: bold;">Page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['totalPages']->value;?>
</span>

        <?php if ($_smarty_tpl->tpl_vars['hasNextPage']->value) {?>
            <button type="button" onclick="changePage(<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
)">Next &gt;</button>
        <?php }?>

        <button type="button" onclick="changePage(<?php echo $_smarty_tpl->tpl_vars['totalPages']->value;?>
)">&raquo;</button>
    </div>
<?php }
}
