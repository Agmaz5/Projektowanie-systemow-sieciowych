<?php
/* Smarty version 4.5.2, created on 2025-05-16 21:59:54
  from 'module_db_tpl:Gallery;gallerytree' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6827993ac38c80_82452747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2d974138a8c03ec4ed25f50676747ef6adeea3b' => 
    array (
      0 => 'module_db_tpl:Gallery;gallerytree',
      1 => 1747425547,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827993ac38c80_82452747 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Carousel wrapper -->
<div
  id="carouselBasicExample"
  data-mdb-carousel-init
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->
  <div class="carousel-indicators">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'img', array (
  'index' => true,
  'first' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index'];
?>
      <button data-mdb-button-init
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index'] : null);?>
"
        class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['first'] : null)) {?>active<?php }?>"
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['first'] : null)) {?>aria-current="true"<?php }?>
        aria-label="Slide <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index'] : null)+1;?>
"
      ></button>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'img', array (
  'index' => true,
  'first' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index'];
?>
      <div class="carousel-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['first'] : null)) {?>active<?php }?>">
        <img
          src="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
"
          class="d-block w-100"
          alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['image']->value->titlename, ENT_QUOTES, 'UTF-8', true);?>
"
        />
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['image']->value->titlename, ENT_QUOTES, 'UTF-8', true);?>
</h5>
          <p><?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['image']->value->description ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</p>
        </div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  <!-- Inner -->

  <!-- Controls -->

</div>
<!-- Carousel wrapper --><?php }
}
