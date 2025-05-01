<?php
/* Smarty version 4.5.2, created on 2025-05-01 19:32:28
  from 'D:\Instalki\XAMPP\htdocs\cms\admin\templates\systeminfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6813b02ca1dc50_41912810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4645d174ef6b8097800d3487311316b6dfc6c837' => 
    array (
      0 => 'D:\\Instalki\\XAMPP\\htdocs\\cms\\admin\\templates\\systeminfo.tpl',
      1 => 1746043950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6813b02ca1dc50_41912810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\Instalki\\XAMPP\\htdocs\\cms\\lib\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="pagecontainer">
<?php if (empty($_GET['cleanreport'])) {?>
	<p class="pageshowrows">
		<span class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary">
			<a href="<?php echo $_smarty_tpl->tpl_vars['systeminfo_cleanreport']->value;?>
">
				<span class="ui-button-icon-primary ui-icon ui-icon-circle-zoomin"></span>
				<span class="ui-button-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'copy_paste_forum'),$_smarty_tpl ) );?>
</span>
			</a>
		</span>
	</p>
<?php }?>
 
<div class="pageoverflow">
	<div class="information">
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'help_systeminformation'),$_smarty_tpl ) );?>
</p>
	</div>
<hr/>
<table class="pagetable" summary="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'cms_install_information'),$_smarty_tpl ) );?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'cms_install_information'),$_smarty_tpl ) );?>
</th>
       </tr>
    </thead>
	<tbody>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
  			<td width="45%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'cms_version'),$_smarty_tpl ) );?>
</td>
			<td width="5%"></td>
  			<td width="50%"><?php echo $_smarty_tpl->tpl_vars['cms_version']->value;?>
</td>
  		</tr>
	</tbody>
</table>
<br /><br />
<table class="pagetable" summary="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'installed_modules'),$_smarty_tpl ) );?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'installed_modules'),$_smarty_tpl ) );?>
</th>
       </tr>
    </thead>
	<tbody>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['installed_modules']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
  		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
    		<td width="45%"><?php echo $_smarty_tpl->tpl_vars['module']->value['module_name'];?>
</td>
			<td width="5%"></td>
    		<td width="50%"><?php echo $_smarty_tpl->tpl_vars['module']->value['version'];?>
</td>
  		</tr>
  		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<br /><br />

<table class="pagetable" summary="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'config_information'),$_smarty_tpl ) );?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'config_information'),$_smarty_tpl ) );?>
</th>
       </tr>
    </thead>
	<tbody>
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config_info']->value, 'tmp', false, 'view');
$_smarty_tpl->tpl_vars['tmp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value => $_smarty_tpl->tpl_vars['tmp']->value) {
$_smarty_tpl->tpl_vars['tmp']->do_else = false;
?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tmp']->value, 'test', false, 'key');
$_smarty_tpl->tpl_vars['test']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->do_else = false;
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
    		<td width="45%"><?php echo $_smarty_tpl->tpl_vars['test']->value->title;?>
</td>
			<td width="5%"><?php if ((isset($_smarty_tpl->tpl_vars['test']->value->res))) {?><img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo $_smarty_tpl->tpl_vars['test']->value->res;?>
.gif" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res_text ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" alt="<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res_text ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" /><?php }?></td>
			<td width="50%">
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->value))) {
echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->secondvalue))) {?>(<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->secondvalue ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
)<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->error_fragment))) {?><a class="external" rel="external" href="<?php echo $_smarty_tpl->tpl_vars['cms_install_help_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['test']->value->error_fragment;?>
"><img src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/system/info-external.gif" title="?" alt="?" /></a><?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->message))) {?><br /><?php echo $_smarty_tpl->tpl_vars['test']->value->message;
}?>
			</td>
		</tr>
  		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<br /><br />


<table class="pagetable" summary="<?php echo lang('performance_information');?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo lang('performance_information');?>
</th>
       </tr>
    </thead>
	<tbody>
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['performance_info']->value, 'tmp', false, 'view');
$_smarty_tpl->tpl_vars['tmp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value => $_smarty_tpl->tpl_vars['tmp']->value) {
$_smarty_tpl->tpl_vars['tmp']->do_else = false;
?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tmp']->value, 'test', false, 'key');
$_smarty_tpl->tpl_vars['test']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->do_else = false;
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
    		<td width="45%"><?php echo $_smarty_tpl->tpl_vars['test']->value->title;?>
</td>
			<td width="5%"><?php if ((isset($_smarty_tpl->tpl_vars['test']->value->res))) {?><img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo $_smarty_tpl->tpl_vars['test']->value->res;?>
.gif" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res_text ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" alt="<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res_text ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" /><?php }?></td>
			<td width="50%">
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->value))) {
echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->secondvalue))) {?>(<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->secondvalue ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>
)<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->error_fragment))) {?><a class="external" rel="external" href="<?php echo $_smarty_tpl->tpl_vars['cms_install_help_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['test']->value->error_fragment;?>
"><img src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/system/info-external.gif" title="?" alt="?" /></a><?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->message))) {?><br /><?php echo $_smarty_tpl->tpl_vars['test']->value->message;
}?>
			</td>
		</tr>
  		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<br /><br />

<table class="pagetable" summary="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'php_information'),$_smarty_tpl ) );?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'php_information'),$_smarty_tpl ) );?>
</th>
       </tr>
    </thead>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['php_information']->value, 'tmp', false, 'view');
$_smarty_tpl->tpl_vars['tmp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value => $_smarty_tpl->tpl_vars['tmp']->value) {
$_smarty_tpl->tpl_vars['tmp']->do_else = false;
?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tmp']->value, 'test', false, 'key');
$_smarty_tpl->tpl_vars['test']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->do_else = false;
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
    		<td width="45%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)</td>
			<td width="5%"><?php if ((isset($_smarty_tpl->tpl_vars['test']->value->res))) {?><img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo $_smarty_tpl->tpl_vars['test']->value->res;?>
.gif" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res_text ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" alt="<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res_text ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" /><?php }?></td>
			<td width="50%">
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->value)) && $_smarty_tpl->tpl_vars['test']->value->display_value != 0) {
echo $_smarty_tpl->tpl_vars['test']->value->value;
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->secondvalue))) {?>(<?php echo $_smarty_tpl->tpl_vars['test']->value->secondvalue;?>
)<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->error_fragment))) {?><a class="external" rel="external" href="<?php echo $_smarty_tpl->tpl_vars['cms_install_help_url']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['test']->value->error_fragment;?>
"><img src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/system/info-external.gif" title="?" alt="?" /></a><?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->message))) {
echo $_smarty_tpl->tpl_vars['test']->value->message;
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->opt))) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['test']->value->opt, 'opt', false, 'key');
$_smarty_tpl->tpl_vars['opt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->do_else = false;
?>
			<br /><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['opt']->value['message'];?>
 <img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo $_smarty_tpl->tpl_vars['opt']->value['res'];?>
.gif" alt="<?php echo (($tmp = $_smarty_tpl->tpl_vars['opt']->value['res_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['opt']->value['res_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
			</td>
		</tr>
  		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<br /><br />
<table class="pagetable" summary="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'server_information'),$_smarty_tpl ) );?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'server_information'),$_smarty_tpl ) );?>
</th>
       </tr>
    </thead>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_info']->value, 'tmp', false, 'view');
$_smarty_tpl->tpl_vars['tmp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value => $_smarty_tpl->tpl_vars['tmp']->value) {
$_smarty_tpl->tpl_vars['tmp']->do_else = false;
?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tmp']->value, 'test', false, 'key');
$_smarty_tpl->tpl_vars['test']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->do_else = false;
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
			<td width="45%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)</td>
			<td width="5%"><?php if ((isset($_smarty_tpl->tpl_vars['test']->value->res))) {?><img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res ?? null)===null||$tmp==='' ? "space" ?? null : $tmp);?>
.gif" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res_text ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" alt="<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res_text ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" /><?php }?></td>
			<td width="50%">
			<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->value))) {
echo mb_strtolower((string) $_smarty_tpl->tpl_vars['test']->value->value, 'UTF-8');
}?>
			<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->secondvalue))) {?>(<?php echo $_smarty_tpl->tpl_vars['test']->value->secondvalue;?>
)<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->message))) {?><br /><?php echo $_smarty_tpl->tpl_vars['test']->value->message;
}?>
			</td>
		</tr>
  		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<br /><br />
<table class="pagetable" summary="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'permission_information'),$_smarty_tpl ) );?>
">
    <thead>
       <tr>
         <th colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['si_lang'][0], array( array('a'=>'permission_information'),$_smarty_tpl ) );?>
</th>
       </tr>
    </thead>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permission_info']->value, 'tmp', false, 'view');
$_smarty_tpl->tpl_vars['tmp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value => $_smarty_tpl->tpl_vars['tmp']->value) {
$_smarty_tpl->tpl_vars['tmp']->do_else = false;
?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tmp']->value, 'test', false, 'key');
$_smarty_tpl->tpl_vars['test']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->do_else = false;
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
		<td width="45%"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
		<td width="5%"><?php if ((isset($_smarty_tpl->tpl_vars['test']->value->res))) {?><img class="systemicon" src="themes/<?php echo $_smarty_tpl->tpl_vars['themename']->value;?>
/images/icons/extra/<?php echo $_smarty_tpl->tpl_vars['test']->value->res;?>
.gif" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res_text ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" alt="<?php echo (($tmp = $_smarty_tpl->tpl_vars['test']->value->res_text ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" /><?php }?></td>
		<td width="50%">
		<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->value))) {
echo $_smarty_tpl->tpl_vars['test']->value->value;
}?>
		<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->secondvalue))) {?>(<?php echo $_smarty_tpl->tpl_vars['test']->value->secondvalue;?>
)<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['test']->value->message))) {?><br /><?php echo $_smarty_tpl->tpl_vars['test']->value->message;
}?>
		</td>
	</tr>
  		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<br />

	</div>
</div><?php }
}
