<?php
/* Smarty version 4.3.4, created on 2025-02-01 22:26:28
  from 'D:\Instalki\XAMPP\htdocs\amelia\app\views\registerShow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679e9184147131_89526607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2126478000b2dfde7f624665d38265d30007f3f' => 
    array (
      0 => 'D:\\Instalki\\XAMPP\\htdocs\\amelia\\app\\views\\registerShow.tpl',
      1 => 1738445182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679e9184147131_89526607 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
        <div style="background-color: #ffffff; padding: 20px 30px; border-radius: 12px; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1); text-align: center; max-width: 400px;">
            <h1 style="font-size: 24px; margin-bottom: 10px; color: #333;">Registration ERROR</h1>
            <p style="font-size: 16px; color: #666;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
        </div>  
    <?php }?>    
<?php }?>    

<div style="display: flex; justify-content: center; align-items: center; height: 100vh; padding: 20px;">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" method="post" style="width: 100%; max-width: 600px; background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            
            
            <div style="margin-bottom: 15px;">
                <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px;">User Name</label>
                <input type="text" id="username" name="username" value="" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"/>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label for="price" style="display: block; font-weight: bold; margin-bottom: 5px;">email</label>
                <input type="text" id="email" name="email" value="" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"/>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label for="stock" style="display: block; font-weight: bold; margin-bottom: 5px;">password</label>
                <input type="text" id="password" name="password" value="" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"/>
            </div>
            

            <div style="margin-bottom: 15px;">
                <label for="stock" style="display: block; font-weight: bold; margin-bottom: 5px;">repeat password</label>
                <input type="text" id="password2" name="password2" value="" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"/>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label for="description" style="display: block; font-weight: bold; margin-bottom: 5px;">deliveryAddress</label>
                <textarea id="deliveryAddress" name="deliveryAddress" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; height: 150px;"></textarea>
            </div>            
            
            <div style="text-align: center;">
                <input type="submit" name="Register" value="Register" style="padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;"/>
            </div>
        </form>
    </div><?php }
}
