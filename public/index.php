<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AuthenticationController;
use MVC\Router;

$router = new Router();

$router->get("/",[AuthenticationController::class,"mainPage"]);

$router->get("/login",[AuthenticationController::class,"login"]);
$router->post("/login",[AuthenticationController::class,"login"]);

$router->get("/register",[AuthenticationController::class,"register"]);
$router->post("/registrer",[AuthenticationController::class,"register"]);






// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();