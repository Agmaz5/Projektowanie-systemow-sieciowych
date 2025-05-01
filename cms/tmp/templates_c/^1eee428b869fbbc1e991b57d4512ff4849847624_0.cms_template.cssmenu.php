<?php
/* Smarty version 4.5.2, created on 2025-05-01 20:21:54
  from 'cms_template:cssmenu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6813bbc2ef9b79_57441331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eee428b869fbbc1e991b57d4512ff4849847624' => 
    array (
      0 => 'cms_template:cssmenu',
      1 => '1746123703',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6813bbc2ef9b79_57441331 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['depth']->value))) {
$_smarty_tpl->_assignInScope('depth', 0);
}
if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?><div id="menuwrapper"><ul id="primary-nav"><?php } else { ?><ul class="unli"><?php }
$_smarty_tpl->_assignInScope('depth', $_smarty_tpl->tpl_vars['depth']->value+1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node', true);
$_smarty_tpl->tpl_vars['node']->iteration = 0;
$_smarty_tpl->tpl_vars['node']->index = -1;
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
$_smarty_tpl->tpl_vars['node']->iteration++;
$_smarty_tpl->tpl_vars['node']->index++;
$_smarty_tpl->tpl_vars['node']->first = !$_smarty_tpl->tpl_vars['node']->index;
$_smarty_tpl->tpl_vars['node']->last = $_smarty_tpl->tpl_vars['node']->iteration === $_smarty_tpl->tpl_vars['node']->total;
$__foreach_node_0_saved = $_smarty_tpl->tpl_vars['node'];
$_smarty_tpl->_assignInScope('liclass', array());
$_smarty_tpl->_assignInScope('aclass', array());
if ($_smarty_tpl->tpl_vars['node']->first && $_smarty_tpl->tpl_vars['node']->total > 1) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['liclass']) ? $_smarty_tpl->tpl_vars['liclass']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'first_child';
$_smarty_tpl->_assignInScope('liclass', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['node']->last && $_smarty_tpl->tpl_vars['node']->total > 1) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['liclass']) ? $_smarty_tpl->tpl_vars['liclass']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'last_child';
$_smarty_tpl->_assignInScope('liclass', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['node']->value->current) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['liclass']) ? $_smarty_tpl->tpl_vars['liclass']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'menuactive';
$_smarty_tpl->_assignInScope('liclass', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['aclass']) ? $_smarty_tpl->tpl_vars['aclass']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'menuactive';
$_smarty_tpl->_assignInScope('aclass', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['node']->value->has_children) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['liclass']) ? $_smarty_tpl->tpl_vars['liclass']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'menuparent';
$_smarty_tpl->_assignInScope('liclass', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['aclass']) ? $_smarty_tpl->tpl_vars['aclass']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'menuparent';
$_smarty_tpl->_assignInScope('aclass', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['node']->value->parent) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['liclass']) ? $_smarty_tpl->tpl_vars['liclass']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'menuactive';
$_smarty_tpl->_assignInScope('liclass', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['aclass']) ? $_smarty_tpl->tpl_vars['aclass']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'menuactive';
$_smarty_tpl->_assignInScope('aclass', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['node']->value->type == 'sectionheader') {?><li class='<?php echo implode(' ',$_smarty_tpl->tpl_vars['liclass']->value);?>
'><a<?php if (count($_smarty_tpl->tpl_vars['aclass']->value) > 0) {?> class="<?php echo implode(' ',$_smarty_tpl->tpl_vars['aclass']->value);?>
"<?php }?>><span class="sectionheader"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a><?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {
$_smarty_tpl->_subTemplateRender(basename($_smarty_tpl->source->filepath), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nodes'=>$_smarty_tpl->tpl_vars['node']->value->children), 0, true);
}?></li><?php } elseif ($_smarty_tpl->tpl_vars['node']->value->type == 'separator') {?><li style="list-style-type: none;"><hr class="menu_separator"/></li><?php } else { ?><li class="<?php echo implode(' ',$_smarty_tpl->tpl_vars['liclass']->value);?>
"><a<?php if (count($_smarty_tpl->tpl_vars['aclass']->value) > 0) {?> class="<?php echo implode(' ',$_smarty_tpl->tpl_vars['aclass']->value);?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value->target != '') {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a><?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {
$_smarty_tpl->_subTemplateRender(basename($_smarty_tpl->source->filepath), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nodes'=>$_smarty_tpl->tpl_vars['node']->value->children), 0, true);
}?></li><?php }
$_smarty_tpl->tpl_vars['node'] = $__foreach_node_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('depth', $_smarty_tpl->tpl_vars['depth']->value-1);?></ul><?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?><div class="clearb"></div></div><?php }
}
}
