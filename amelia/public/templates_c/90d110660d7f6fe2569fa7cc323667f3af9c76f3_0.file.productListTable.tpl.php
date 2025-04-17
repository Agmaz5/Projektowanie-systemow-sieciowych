<?php
/* Smarty version 4.3.4, created on 2025-04-16 22:06:55
  from 'D:\Instalki\XAMPP\htdocs\amelia\app\views\productListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68000ddfe382d0_70394527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90d110660d7f6fe2569fa7cc323667f3af9c76f3' => 
    array (
      0 => 'D:\\Instalki\\XAMPP\\htdocs\\amelia\\app\\views\\productListTable.tpl',
      1 => 1744833930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68000ddfe382d0_70394527 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="pure-table pure-table-bordered">

<div style="
    display: flex; 
    flex-wrap: wrap; 
    gap: 20px; 
    justify-content: center; 
    align-items: stretch;
    max-width: 1200px;
    margin: 0 auto;
">
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

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
                    <h3 style="margin: 0 0 10px; color: #333;"><?php echo $_smarty_tpl->tpl_vars['product']->value['productName'];?>
</h3>
                    <p style="margin: 5px 0; color: #666;"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
                    <p style="margin: 5px 0; font-weight: bold;">Price: <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 USD</p>
                    <p style="margin: 5px 0; color: #888;">Stock: <?php echo $_smarty_tpl->tpl_vars['product']->value['stock'];?>
</p>

                    <!-- Add to Cart -->
                    <div style="margin-top: auto; text-align: center;">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addToCart" method="post" style="margin: 0;">
                            <input type="hidden" name="productId" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['idProduct'];?>
" />
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
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

    

    

</tbody>
</table><?php }
}
