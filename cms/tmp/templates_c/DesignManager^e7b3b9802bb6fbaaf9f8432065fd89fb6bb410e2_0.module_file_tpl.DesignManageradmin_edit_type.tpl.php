<?php
/* Smarty version 4.5.2, created on 2025-05-01 19:31:18
  from 'module_file_tpl:DesignManager;admin_edit_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6813afe62f3826_87036002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7b3b9802bb6fbaaf9f8432065fd89fb6bb410e2' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_edit_type.tpl',
      1 => 1746043954,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6813afe62f3826_87036002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\lib\\plugins\\function.form_start.php','function'=>'smarty_function_form_start',),1=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\admin\\plugins\\function.cms_help.php','function'=>'smarty_function_cms_help',),2=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\lib\\plugins\\modifier.localedate_format.php','function'=>'smarty_modifier_localedate_format',),3=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\admin\\plugins\\function.tab_header.php','function'=>'smarty_function_tab_header',),4=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\admin\\plugins\\function.tab_start.php','function'=>'smarty_function_tab_start',),5=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\lib\\plugins\\function.cms_textarea.php','function'=>'smarty_function_cms_textarea',),6=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\admin\\plugins\\function.tab_end.php','function'=>'smarty_function_tab_end',),7=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\lib\\plugins\\function.form_end.php','function'=>'smarty_function_form_end',),));
?>
<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_type');?>
:</h3>

<?php echo smarty_function_form_start(array(),$_smarty_tpl);?>

<fieldset>
  <div class="pagecontainer" style="width: 49%; float: left;">    <div class="pageoverflow">
      <p class="pagetext"></p>
      <p class="pageinput">
        <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
        <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
"/>
      </p>
    </div>

    <div class="pageoverflow">
      <p class="pagetext"><label for="originator"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_originator');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_type_originator','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_originator')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['type']->value->get_originator(TRUE);?>
</p>
    </div>

    <div class="pageoverflow">
      <p class="pagetext"><label for="name"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_type_name','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['type']->value->get_name();?>
</p>
    </div>

    <div class="pageoverflow">
      <p class="pagetext"><label for="descname"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_descriptive_name');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_type_descriptive_name','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_descriptive_name')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['type']->value->get_langified_display_value();?>
</p>
    </div>

  </div>
    <div style="width: 45%; float: right;">
    <div class="pageoverflow">
      <p class="pagetext"><label for="hasdflt"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_has_dflt');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_has_dflt','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_has_dflt')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><?php if ($_smarty_tpl->tpl_vars['type']->value->get_dflt_flag()) {
echo $_smarty_tpl->tpl_vars['mod']->value->Lang('yes');
} else {
echo $_smarty_tpl->tpl_vars['mod']->value->Lang('no');
}?></p>
    </div>

    <div class="pageoverflow">
      <p class="pagetext"><label for="rcb"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_requires_content_blocks');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_type_reqcontentblocks','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_requires_content_blocks')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><?php if ($_smarty_tpl->tpl_vars['type']->value->get_content_block_flag()) {
echo $_smarty_tpl->tpl_vars['mod']->value->Lang('yes');
} else {
echo $_smarty_tpl->tpl_vars['mod']->value->Lang('no');
}?></p>
    </div>

    <div class="pageoverflow">
      <p class="pagetext"><label for="created"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_created');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_type_createdate','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_created')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><?php echo smarty_modifier_localedate_format($_smarty_tpl->tpl_vars['type']->value->get_create_date(),'%x %X');?>
</p>
    </div>
    <div class="pageoverflow">
      <p class="pagetext"><label for="modified"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_modified');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_type_modifieddate','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_modified')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><?php echo smarty_modifier_localedate_format($_smarty_tpl->tpl_vars['type']->value->get_modified_date(),'%x %X');?>
</p>
    </div>
  </div>  <div style="clear: both;"></div>
</fieldset>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value->get_id();?>
"/>

<?php if ($_smarty_tpl->tpl_vars['type']->value->get_content_callback() != '') {
echo smarty_function_tab_header(array('name'=>'content','label'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_proto_template')),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_tab_header(array('name'=>'description','label'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_description')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['type']->value->get_content_callback() != '') {
echo smarty_function_tab_start(array('name'=>'content'),$_smarty_tpl);?>

<div class="pageoverflow">
  <p class="pagetext">
    <label for="type_dflt_contents"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_proto_template');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_proto_template','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_proto_template')),$_smarty_tpl);?>

  </p>
  <p class="pageinput">
    <?php echo smarty_function_cms_textarea(array('id'=>'type_dflt_contents','prefix'=>$_smarty_tpl->tpl_vars['actionid']->value,'name'=>'dflt_contents','value'=>$_smarty_tpl->tpl_vars['type']->value->get_dflt_contents(),'type'=>'smarty','rows'=>20,'cols'=>80),$_smarty_tpl);?>

  </p>

  <div class="pagecontainer">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
reset" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('reset_factory');?>
" onclick="return confirm('<?php echo strtr((string)$_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_reset_type'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
')"/>
  </div>
</div>
<?php }?>

<?php echo smarty_function_tab_start(array('name'=>'description'),$_smarty_tpl);?>

<div class="pageoverflow">
  <p class="pagetext"><label for="type_description"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_description');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_type_description','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_description')),$_smarty_tpl);?>

  <p class="pageinput">
    <textarea id="type_description" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
description" rows="5" cols="80"><?php echo $_smarty_tpl->tpl_vars['type']->value->get_description();?>
</textarea>
  </p>
</div>
<?php echo smarty_function_tab_end(array(),$_smarty_tpl);?>


<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

<?php }
}
