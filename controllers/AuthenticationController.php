<?php 

namespace Controllers;

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


}
?>