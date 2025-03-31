<?php
/* Smarty version 4.3.4, created on 2025-03-31 18:52:00
  from 'D:\Instalki\XAMPP\htdocs\amelia\app\views\productList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67eac830ca6984_28214532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a5f663f4ad2073ad64a2c75012a4456ef8e38c0' => 
    array (
      0 => 'D:\\Instalki\\XAMPP\\htdocs\\amelia\\app\\views\\productList.tpl',
      1 => 1743439914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67eac830ca6984_28214532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178955648767eac830c76375_70791932', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_178955648767eac830c76375_70791932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_178955648767eac830c76375_70791932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Add New Product Button -->
<div style="text-align: center;">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
newShow" method="post" style="margin: 0; display: inline-block;">
        <input type="submit" name="edition" value="Add New Product" class="button-choose pure-button" />
    </form>
</div>

<br><br><br>

<!-- Products Grid -->
<div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['product']->value['idCreator']) {?>
            <div class="product" style="
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 15px;
                width: 300px;
                background: #f9f9f9;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            ">
                <h3 style="margin: 0 0 10px; color: #333;"><?php echo $_smarty_tpl->tpl_vars['product']->value['productName'];?>
</h3>
                <p style="margin: 5px 0; color: #666;"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
                <p style="margin: 5px 0; font-weight: bold;">Price: <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 USD</p>
                <p style="margin: 5px 0; color: #888;">Stock: <?php echo $_smarty_tpl->tpl_vars['product']->value['stock'];?>
</p>

                <!-- Action Buttons -->
                <div style="display: flex; gap: 10px; margin-top: 15px;">
                    <!-- Edit Button -->
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productEdit" method="post" style="margin: 0;">
                        <input type="hidden" name="productId" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['idProduct'];?>
" />
                        <input type="submit" name="edition" value="Edit" style="
                            padding: 8px 15px;
                            border: none;
                            border-radius: 5px;
                            background: #4CAF50;
                            color: white;
                            cursor: pointer;
                        " />
                    </form>

                    <!-- Delete Button -->
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productDelete" method="post" style="margin: 0;">
                        <input type="hidden" name="productId" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['idProduct'];?>
" />
                        <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this product?');" style="
                            padding: 8px 15px;
                            border: none;
                            border-radius: 5px;
                            background: #f44336;
                            color: white;
                            cursor: pointer;
                        " />
                    </form>
                </div>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<br><br>

<!-- Pagination -->
<div style="text-align: center; margin-bottom: 40px;">
    <!-- First Page -->
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
myProductList" method="post" style="display: inline;">
        <input type="hidden" name="page" value="1" />
        <input type="submit" value="<<" style="padding: 8px 12px; margin-right: 10px;" />
    </form>

    <!-- Previous -->
    <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
myProductList" method="post" style="display: inline;">
            <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" />
            <input type="submit" value="< Previous" style="padding: 8px 12px; margin-right: 10px;" />
        </form>
    <?php }?>

    <!-- Current Page -->
    <span style="font-weight: bold;">Page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['totalPages']->value;?>
</span>

    <!-- Next -->
    <?php if ($_smarty_tpl->tpl_vars['hasNextPage']->value) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
myProductList" method="post" style="display: inline;">
            <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" />
            <input type="submit" value="Next >" style="padding: 8px 12px; margin-left: 10px;" />
        </form>
    <?php }?>

    <!-- Last Page -->
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
myProductList" method="post" style="display: inline;">
        <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['totalPages']->value;?>
" />
        <input type="submit" value=">>" style="padding: 8px 12px; margin-left: 10px;" />
    </form>
</div>

<?php
}
}
/* {/block "content"} */
}
