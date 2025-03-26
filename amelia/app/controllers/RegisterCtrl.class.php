<?php


namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class RegisterCtrl {

 

    public function action_registerShow () {
            $smarty = App::getSmarty();
        
        
            if (isset($_SESSION['user_id'])) {
                
            $userDB = $_SESSION['username'];
            $idDB = $_SESSION['user_id'];
            $roleidDB = $_SESSION['idRole'];
           
                    

                $smarty->assign("us", $userDB);
                $smarty->assign("id", $idDB);
                $smarty->assign("idRole", $roleidDB);

                    }
        $smarty->display("registerShow.tpl");

    }
    
public function action_register() {
 
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        

        $isVerified = 0;
        $idRole = 2;
        $deliveryAddress = $_POST['deliveryAddress'];
        
        
        if ($password == $password2){
            
                $password = password_hash($password, PASSWORD_DEFAULT);

        if (empty($username) || empty($email) || empty($password)) {
            echo "Error: All fields are required.";
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Error: Invalid email format.";
            return;
        }


      
        $db = App::getDB();

        try {
       
            $db->insert("users", [
                "username" => $username,
                "email" => $email,
                "password" => $password,
                "isVerified" => $isVerified,
                "idRole" => $idRole,
                "deliveryAddress" => $deliveryAddress
            ]);

            if ($db->id()) {
                
                $smarty = App::getSmarty();

                $smarty->assign("error", "") ;

                App::getRouter()->forwardTo('loginDisplay');

                exit();
            } else {
                    App::getRouter()->forwardTo('displayAll');

            }
        } catch (Exception $e) {
            echo "Database error: " . $e->getMessage();
        }
        }
        else {
        $smarty = App::getSmarty();
        
                $smarty->assign("error", "Oops! Your passwords don’t match. Try again.") ;

        $smarty->display("registerShow.tpl");
        }
    }
    
    
}

