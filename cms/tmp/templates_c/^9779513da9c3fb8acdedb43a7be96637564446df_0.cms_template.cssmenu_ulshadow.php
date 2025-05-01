<?php
/* Smarty version 4.5.2, created on 2025-05-01 20:30:58
  from 'cms_template:cssmenu_ulshadow' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6813bde29e66b0_82614121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9779513da9c3fb8acdedb43a7be96637564446df' => 
    array (
      0 => 'cms_template:cssmenu_ulshadow',
      1 => '1746124247',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6813bde29e66b0_82614121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'render_menu' => 
  array (
    'compiled_filepath' => 'D:\\Instalki\\XAMPP\\htdocs\\cms\\tmp\\templates_c\\^9779513da9c3fb8acdedb43a7be96637564446df_0.cms_template.cssmenu_ulshadow.php',
    'uid' => '9779513da9c3fb8acdedb43a7be96637564446df',
    'call_name' => 'smarty_template_function_render_menu_20716531916813bde29ada03_62025116',
  ),
));
?>


<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
<nav id="menuwrapper">
  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_menu', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'level'=>0), true);?>

</nav>
<?php }
}
/* smarty_template_function_render_menu_20716531916813bde29ada03_62025116 */
if (!function_exists('smarty_template_function_render_menu_20716531916813bde29ada03_62025116')) {
function smarty_template_function_render_menu_20716531916813bde29ada03_62025116(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<ul<?php if ($_smarty_tpl->tpl_vars['level']->value == 0) {?> class="nav-main"<?php } else { ?> class="nav-sub"<?php }?>>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('liclass', 'nav-item');?>
    <?php $_smarty_tpl->_assignInScope('aclass', 'nav-link');?>

    <?php if ($_smarty_tpl->tpl_vars['node']->value->current) {?>
      <?php $_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' menuactive'));?>
      <?php $_smarty_tpl->_assignInScope('aclass', ($_smarty_tpl->tpl_vars['aclass']->value).(' menuactive'));?>
    <?php } elseif ($_smarty_tpl->tpl_vars['node']->value->parent) {?>
      <?php $_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' parent'));?>
      <?php $_smarty_tpl->_assignInScope('aclass', ($_smarty_tpl->tpl_vars['aclass']->value).(' parent'));?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {?>
      <?php $_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' menuparent'));?>
      <?php $_smarty_tpl->_assignInScope('aclass', ($_smarty_tpl->tpl_vars['aclass']->value).(' menuparent'));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['node']->value->type == 'sectionheader') {?>
      <li class="<?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
 sectionheader"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></li>
    <?php } elseif ($_smarty_tpl->tpl_vars['node']->value->type == 'separator') {?>
      <li class="<?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
 separator"><hr /></li>
    <?php } else { ?>
      <li class="<?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
">
        <a class="<?php echo $_smarty_tpl->tpl_vars['aclass']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value->target != '') {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>>
          <span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span>
        </a>
        <?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {?>
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_menu', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

        <?php }?>
      </li>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php
}}
/*/ smarty_template_function_render_menu_20716531916813bde29ada03_62025116 */
}
