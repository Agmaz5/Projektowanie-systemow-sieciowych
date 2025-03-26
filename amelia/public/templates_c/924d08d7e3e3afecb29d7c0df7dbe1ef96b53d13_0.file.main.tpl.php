<?php
/* Smarty version 4.3.4, created on 2024-12-06 21:26:55
  from 'D:\Instalki\XAMPP\htdocs\amelia\app\views\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67535e0fcfb6f0_63631716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '924d08d7e3e3afecb29d7c0df7dbe1ef96b53d13' => 
    array (
      0 => 'D:\\Instalki\\XAMPP\\htdocs\\amelia\\app\\views\\main.tpl',
      1 => 1733516815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67535e0fcfb6f0_63631716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Twój sklep z rękodziełem i unikalnymi przedmiotami' ?? null : $tmp);?>
">
        <title>CraftsyPlace &ndash; Miejsce dla miłośników rękodzieła</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="http://localhost/amelia/css/style.css">
    </head>

    <body>

        <div class="pure-menu pure-menu-horizontal">
            <a href="#" class="pure-menu-heading"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "CraftsyPlace" ?? null : $tmp);?>
</a>
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Strona Główna</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sprzedawaj</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Kupuj</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Regulamin</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Kontakt</a></li>
            </ul>
        </div>

        <div class="banner">
            <h1 class="banner-head">
                <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Witaj w CraftsyPlace!" ?? null : $tmp);?>

            </h1>
        </div>

        <div class="l-content">
            <div class="pricing-tables pure-g">
                <div class="pure-u-1 pure-u-md-1-3">
                    <div class="pricing-table pricing-table-free">
                        <div class="pricing-table-header">
                            <h2>Szydełkowanie</h2>
                            <span class="pricing-table-price">
                                Od 50 zł <span>przykładowa cena</span>
                            </span>
                        </div>

                        <ul class="pricing-table-list">
                            <li>Unikalne wzory</li>
                            <li>Wykonane ręcznie</li>
                            <li>Rękodzieło na zamówienie</li>
                        </ul>

                        <a href="#app_content" class="button-choose pure-button">Zobacz kolekcję</a>
                    </div>
                </div>

                <div class="pure-u-1 pure-u-md-1-3">
                    <div class="pricing-table pricing-table-biz pricing-table-selected">
                        <div class="pricing-table-header">
                            <h2>Rzeźby</h2>
                            <span class="pricing-table-price">
                                Od 500 zł <span>przykładowa cena</span>
                            </span>
                        </div>

                        <ul class="pricing-table-list">
                            <li>Ręcznie rzeźbione</li>
                            <li>Indywidualny design</li>
                            <li>Wyjątkowe projekty</li>
                        </ul>

                        <a href="#app_content" class="button-choose pure-button">Zobacz ofertę</a>
                    </div>
                </div>

                <div class="pure-u-1 pure-u-md-1-3">
                    <div class="pricing-table pricing-table-enterprise">
                        <div class="pricing-table-header">
                            <h2>Obrazy</h2>
                            <span class="pricing-table-price">
                                Od 100 zł <span>przykładowa cena</span>
                            </span>
                        </div>

                        <ul class="pricing-table-list">
                            <li>Unikalne projekty</li>
                            <li>Naturalne materiały</li>
                            <li>Bogate detale</li>
                        </ul>

                        <a href="#app_content" class="button-choose pure-button">Zobacz kolekcję</a>
                    </div>
                </div>
                
                
                
                
                
                
                
            </div> <!-- end pricing-tables -->

            <div class="splash-container">
                <div class="splash">
                    <div class="information pure-g">
                        <div class="pure-u-1 pure-u-md-1-2">
                            <div class="l-box">
                                <h3 class="information-head">Jak działa CraftsyPlace?</h3>
                                <p>
                                    CraftsyPlace to platforma, na której znajdziesz unikalne rękodzieło, stworzone przez artystów z całego świata. Możesz odkrywać, kupować i zamawiać ręcznie robione przedmioty, które są tworzone z pasją i zaangażowaniem.
                                </p>
                            </div>
                        </div>

                        <div class="pure-u-1 pure-u-md-1-2">
                            <div class="l-box">
                                <h3 class="information-head">Dlaczego warto kupować rękodzieło?</h3>
                                <p>
                                    Produkty ręcznie robione to unikalne przedmioty, których nie znajdziesz w żadnym sklepie. Są one tworzone z pasją, dbałością o szczegóły i przy użyciu wysokiej jakości materiałów. Kupując rękodzieło, wspierasz również małych artystów i ich kreatywność.
                                </p>
                            </div>
                        </div>

                        <div class="pure-u-1 pure-u-md-1-2">
                            <div class="l-box">
                                <h3 class="information-head">Rękodzieło na zamówienie</h3>
                                <p>
                                    Jeśli masz specyficzne wymagania, możesz złożyć zamówienie na przedmiot stworzony specjalnie dla Ciebie. Nasi artyści z przyjemnością wykonają produkt, który będzie idealnie odpowiadał Twoim potrzebom.
                                </p>
                            </div>
                        </div>

                        <div class="pure-u-1 pure-u-md-1-2">
                            <div class="l-box">
                                <h3 class="information-head">Zacznij zakupy</h3>
                                <p>
                                    Odkryj szeroką gamę rękodzieła, przeglądaj kategorie i znajdź coś, co Cię zainspiruje. Nasza platforma jest łatwa w obsłudze, a zakupy są szybkie i bezpieczne.
                                </p>
                            </div>
                        </div>
                    </div> <!-- end information -->
                </div> <!-- end l-content -->
            </div>
        </div>

        <div class="content-wrapper">
            <div id="app_content" class="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210043914267535e0fcfa8a3_22975737', 'content');
?>

            </div>

            <div class="footer l-box">
                <p>
                    <a href="#">Odwiedź CraftsyPlace</a> i odkryj unikalne przedmioty ręcznie robione przez artystów z całego świata.
                </p>
            </div>
        </div>

    </body>
</html>
<?php }
/* {block 'content'} */
class Block_210043914267535e0fcfa8a3_22975737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_210043914267535e0fcfa8a3_22975737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'content'} */
}
