<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\PersonSearchForm;

class ProductListCtrl {
    

public function __construct() {
    $this->form = new PersonSearchForm();
    $this->form->price = 0;
    $this->form->page = 1;
    $this->form->name = "";
}




public function getProducts($limit = 2, $offset = 0, $minPrice = null, $name = null) {
    $db = App::getDB();

    $where = ["isAvailable" => 1];

    if (!empty($minPrice)) {
        $where["price[>=]"] = $minPrice;
    }

    if (!empty($name)) {
        $where["productName"] = $name;
    }


    $where["stock[>]"] = 0;

    $where["LIMIT"] = [$offset, $limit];

    return $db->select("products", "*", $where);
}




    public function action_productDelete() {

        $idProduct = $_POST["productId"]; 
        $db = App::getDB();
        $db->update('products', ['isAvailable' => 0], ['idProduct' => $idProduct]);
            App::getRouter()->forwardTo('myProductList');

    }
    
public function action_displayAll() {
    $smarty = App::getSmarty();

    
    $minproductPrice = $_POST['price'] ?? null;
    $nameFilter = $_POST['name'] ?? null;
    $page = max(1, (int)($_POST['page'] ?? 1));

    $limit = 2;
    $offset = ($page - 1) * $limit;

    
    if (isset($_SESSION['user_id'])) {
        $smarty->assign("us", $_SESSION['username']);
        $smarty->assign("id", $_SESSION['user_id']);
        $smarty->assign("idRole", $_SESSION['idRole']);
    }

    
    $products = $this->getProducts($limit, $offset, $minproductPrice, $nameFilter);

    $countWhere = ['isAvailable' => 1, 'stock[>]' => 0];
    if (!empty($minproductPrice)) $countWhere["price[>=]"] = $minproductPrice;
    if (!empty($nameFilter)) $countWhere["productName"] = $nameFilter;

    $allAvailableProducts = App::getDB()->count("products", $countWhere);
    $hasNextPage = ($offset + $limit) < $allAvailableProducts;
    $totalPages = (int)ceil($allAvailableProducts / $limit);

    
    $smarty->assign('products', $products);
    $smarty->assign('priceP', $minproductPrice);
    $smarty->assign('nameF', $nameFilter);
    $smarty->assign('page', $page);
    $smarty->assign('hasNextPage', $hasNextPage);
    $smarty->assign('totalPages', $totalPages);

    $smarty->display('allProducts.tpl');
}

        
        
      
  

public function action_myProductList() {
    $smarty = App::getSmarty();
    $app_url = App::getConf()->app_url; 
    $smarty->assign('app_url', $app_url); 

    if (!isset($_SESSION['user_id'])) {
        echo "Użytkownik nie jest zalogowany.";
        return;
    }


    $userDB = $_SESSION['username'];
    $idDB = $_SESSION['user_id'];
    $roleidDB = $_SESSION['idRole'];

    $smarty->assign("us", $userDB);
    $smarty->assign("id", $idDB);
    $smarty->assign("idRole", $roleidDB);

    $page = isset($_POST['page']) ? max(1, (int)$_POST['page']) : 1;
    $limit = 3;
    $offset = ($page - 1) * $limit;

    $products = $this->getProducts($limit, $offset, $idDB);

    $totalUserProducts = App::getDB()->count("products", [
        "isAvailable" => 1,
        "idCreator" => $idDB
    ]);

    $hasNextPage = ($offset + $limit) < $totalUserProducts;
    $totalPages = (int)ceil($totalUserProducts / $limit);

    $smarty->assign('products', $products);
    $smarty->assign('page', $page);
    $smarty->assign('hasNextPage', $hasNextPage);
    $smarty->assign('totalPages', $totalPages);

    $smarty->display('productList.tpl');
}

    
public function action_addProduct() {
  
    $db = App::getDB();

    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];
    

    
   


    
    $idCreator = $_SESSION['user_id'] ?? 1;  
    $category = 'Uncategorized';  
    $isAvailable = 1;  


    try {
       
        $db->insert('products', [
            'idCreator'   => $idCreator,
            'productName' => $name,
            'description' => $description,
            'price'       => $price,
            'stock'       => $stock,
            'category'    => $category,
            'isAvailable' => $isAvailable,

        ]);

        if ($db->id()) {
           
            App::getRouter()->redirectTo('displayAll');
        } else {
            throw new \Exception("Failed to add product.");
        }

    } catch (\Exception $e) {
        App::getMessages()->addMessage(new \core\Message("Error: " . $e->getMessage(), \core\Message::ERROR));
        App::getRouter()->forwardTo('newShow');
    }
}

   
    
    
    public function action_newShow() {
        $smarty = App::getSmarty();
        
        
                    if (isset($_SESSION['user_id'])) {
            $userDB = $_SESSION['username'];
            $idDB = $_SESSION['user_id'];
            $roleidDB = $_SESSION['idRole'];
                    

                $smarty->assign("us", $userDB);
                $smarty->assign("id", $idDB);
                $smarty->assign("idRole", $roleidDB);
                    }
        $smarty->display("newProduct.tpl");
    }
    

public function action_productListPart() {
    $smarty = App::getSmarty();

    
    $this->form->price = $this->getFromRequest('price');
    $this->form->page = $this->getFromRequest('page');
    $this->form->name = $this->getFromRequest('name');

    $minproductPrice = !empty($this->form->price) ? $this->form->price : null;
    $page = max(1, (int)$this->form->page);
    $nameFilter = !empty($this->form->name) ? $this->form->name : null;

    
    
    $limit = 2;
    $offset = ($page - 1) * $limit;

    
    if (isset($_SESSION['user_id'])) {
        $smarty->assign("us", $_SESSION['username']);
        $smarty->assign("id", $_SESSION['user_id']);
        $smarty->assign("idRole", $_SESSION['idRole']);
    }


    $products = $this->getProducts($limit, $offset, $minproductPrice, $nameFilter);

    $countWhere = ['isAvailable' => 1, 'stock[>]' => 0];
    if (!empty($minproductPrice)) $countWhere["price[>=]"] = $minproductPrice;
    if (!empty($nameFilter)) $countWhere["productName"] = $nameFilter;

    $allAvailableProducts = App::getDB()->count("products", $countWhere);
    $hasNextPage = ($offset + $limit) < $allAvailableProducts;
    $totalPages = (int)ceil($allAvailableProducts / $limit);


    $smarty->assign('products', $products);
    $smarty->assign('priceP', $minproductPrice);
    $smarty->assign('nameF', $nameFilter);
    $smarty->assign('page', $page);
    $smarty->assign('hasNextPage', $hasNextPage);
    $smarty->assign('totalPages', $totalPages);
    $smarty->assign('searchForm', $this->form); // Jeśli potrzebne w AJAX

    $smarty->display('ProductListTable.tpl');
}





    
    public static function getFromRequest($param_name, $required = false, $required_message = null, $index = null) {
        return self::getFrom($_REQUEST, $param_name, $required, $required_message, $index);
    }
    
        private static function getFrom(&$source, &$idx, &$required, &$required_message, &$index) {
        if ($required && !isset($source[$idx]))
            App::getMessages()->addMessage(new Message($required_message, Message::ERROR), $index);
        if (isset($source[$idx]))
            return $source[$idx];
        return null;
    }
}


