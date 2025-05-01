<?php
/* Smarty version 4.5.2, created on 2025-05-01 20:05:29
  from 'cms_template:14' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6813b7e93e7b38_32707413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba91d3539a9fdecb1ac7b80c4819c93c03e1bed' => 
    array (
      0 => 'cms_template:14',
      1 => '1746120343',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6813b7e93e7b38_32707413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),2=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
echo smarty_function_global_content(array('name'=>"szablon_top"),$_smarty_tpl);?>

<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
	</header>

	<nav id="menu">
		
	</nav>

	<section id="content">
		<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
		
	</section>
<?php echo smarty_function_global_content(array('name'=>"szablon_bottom"),$_smarty_tpl);
}
}
