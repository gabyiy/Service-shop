<?php 

namespace Controllers;

use Model\User;
use MVC\Router;

class AuthenticationController{


public static function mainPage(Router $router){

$router->render("mainPage",[


]);
}


public static  function login(Router $router){


    $router->render("auth/login",[



    ]);

}

public static function register(Router $router){
 
    $alerts=[];
    $user = new User();

    if($_SERVER["REQUEST_METHOD"]="POST"){
        $user->sincronizar($_POST);

        $alerts = $user->validate();
        if(!$alerts){
header("Location: /");
        }
    }
    $router->render("/auth/register",[

        "alerts"=>$alerts
    ]);
   
}

}
