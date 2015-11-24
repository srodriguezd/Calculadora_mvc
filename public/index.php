<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 13/10/15
 * Time: 16:40
 */

chdir(dirname(__DIR__)); //chdir:cambio de directorio
//dirname: Dada una cadena que contiene la ruta a un fichero o directorio,
// esta función devolverá la ruta del directorio padre que está a
// levels niveles del directorio actual.

require 'application/controllers/IndexController.php';
require 'application/controllers/CalculadoraController.php';

if (!isset($_GET['controller']))
//isset:Determina si una variable está definida y no es NULL
{
    $controllerName = 'controllers\\IndexController';
    $accion         = 'indexAccion';
}
else
{
    $controllerName     = 'controllers\\' . ucfirst($_GET['controller']) . 'Controller';
    //ucfirst:  Convierte el primer caracter de una cadena a mayúsculas
    $accion             = $_GET['accion'] . 'Accion';
}
$controller = new $controllerName();
$controller->$accion();