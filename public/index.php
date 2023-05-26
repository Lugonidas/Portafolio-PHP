<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\DashboardController;
use Controllers\PortafolioController;
use Controllers\APIController;
use Controllers\LoginController;
use MVC\Router;

$router = new Router();

//Zona Pública
$router->get("/", [PortafolioController::class, "index"]);
$router->get("/sobre-mi", [PortafolioController::class, "sobreMi"]);
$router->get("/portafolio", [PortafolioController::class, "portafolio"]);
$router->get("/servicios", [PortafolioController::class, "servicios"]);
$router->get("/contacto",[PortafolioController::class, "contacto"]);
$router->post("/contacto", [PortafolioController::class, "contacto"]);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();