<?php
/* Smarty version 4.5.2, created on 2025-05-01 20:29:48
  from 'cms_stylesheet:Navigation Styles' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6813bd9c9fb3e3_19198619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12a9ef6dc7f94df43b8bc475efd8007b94196b64' => 
    array (
      0 => 'cms_stylesheet:Navigation Styles',
      1 => '1746124180',
      2 => 'cms_stylesheet',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6813bd9c9fb3e3_19198619 (Smarty_Internal_Template $_smarty_tpl) {
?>/* cmsms stylesheet: Navigation Styles modified: czwartek, 1 maja 2025 20:29:40 */
/* ========== MENU STYLING ========== */

#menuwrapper {
  background: #f8f8f8;
  padding: 0;
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
}

.nav-main {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
  background: #ffffff;
  border-bottom: 2px solid #e0e0e0;
}

.nav-main > .nav-item {
  position: relative;
}

.nav-link {
  display: block;
  padding: 12px 18px;
  text-decoration: none;
  color: #333;
  transition: background 0.3s ease;
}

.nav-link:hover,
.nav-link.menuactive {
  background-color: #f0d1e3;
  color: #000;
}

.nav-item.menuparent > .nav-link::after {
  content: " ▼";
  font-size: 0.7em;
  color: #999;
}

/* Submenu */
.nav-sub {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background: #fff;
  list-style: none;
  padding: 0;
  margin: 0;
  min-width: 180px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  z-index: 100;
}

.nav-sub .nav-item {
  border-bottom: 1px solid #eee;
}

.nav-sub .nav-link {
  padding: 10px 14px;
  white-space: nowrap;
}

.nav-item:hover > .nav-sub {
  display: block;
}

/* Mobile (optional) */
@media screen and (max-width: 768px) {
  .nav-main {
    flex-direction: column;
  }

  .nav-sub {
    position: static;
    box-shadow: none;
  }

  .nav-item:hover > .nav-sub {
    display: block;
  }
}
<?php }
}
