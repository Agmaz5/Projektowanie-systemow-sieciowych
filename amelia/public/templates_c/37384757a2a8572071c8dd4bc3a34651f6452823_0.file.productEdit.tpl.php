<?php
/* Smarty version 4.3.4, created on 2025-02-01 21:15:02
  from 'D:\Instalki\XAMPP\htdocs\amelia\app\views\productEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679e80c644dab9_25086161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37384757a2a8572071c8dd4bc3a34651f6452823' => 
    array (
      0 => 'D:\\Instalki\\XAMPP\\htdocs\\amelia\\app\\views\\productEdit.tpl',
      1 => 1737666102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679e80c644dab9_25086161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1652126428679e80c643e984_22428413', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_1652126428679e80c643e984_22428413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1652126428679e80c643e984_22428413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; padding: 20px;">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productSave" method="post" style="width: 100%; max-width: 600px; background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['idProduct'];?>
">
            
            <div style="margin-bottom: 15px;">
                <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px;">Product Name</label>
                <input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['productName'];?>
" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"/>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label for="price" style="display: block; font-weight: bold; margin-bottom: 5px;">Price</label>
                <input type="text" id="price" name="price" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"/>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label for="stock" style="display: block; font-weight: bold; margin-bottom: 5px;">Stock</label>
                <input type="text" id="stock" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['stock'];?>
" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"/>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label for="description" style="display: block; font-weight: bold; margin-bottom: 5px;">Description</label>
                <textarea id="description" name="description" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; height: 150px;"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</textarea>
            </div>
            
            <div style="text-align: center;">
                <input type="submit" name="save" value="Save" required style="padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;"/>
            </div>
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
