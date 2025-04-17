<?php
/* Smarty version 4.3.4, created on 2025-04-17 21:43:22
  from 'D:\Instalki\XAMPP\htdocs\amelia\app\views\allProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680159da850f10_15166614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff20d0992b5cad6991da4233ba7dba9083108d1' => 
    array (
      0 => 'D:\\Instalki\\XAMPP\\htdocs\\amelia\\app\\views\\allProducts.tpl',
      1 => 1744919002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ProductListTable.tpl' => 1,
  ),
),false)) {
function content_680159da850f10_15166614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1268954510680159da84cff0_12033284', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_1268954510680159da84cff0_12033284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1268954510680159da84cff0_12033284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3 style="text-align: center;">All Product List</h3>
<br>

<div id="table">
    <?php $_smarty_tpl->_subTemplateRender("file:ProductListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php
}
}
/* {/block "content"} */
}
