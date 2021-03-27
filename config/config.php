<?php 
/*

En este archivo se importa todo los archivos necesarios para
el uso adecuado de la aplicacion

NOTA: no modificar si no entiende el uso de los mismos

*/
/*
    DIRECCIO DE LA RUTA
*/

$Name_Proyect = 'Nico';
$url = './';
$dominio = 'http://localhost/FRAMEWORK/estructura/';
date_default_timezone_set('America/Guayaquil');
// constantes cache
const CSS = "./routes/css.php";
const JS = "./routes/javascript.php";
require_once($url.'config/cache/cache.php');
//require_once($url.'config/conexion/configDB.php');
// CARAGAMOS CONFIGURACION DE RUTAS
include($url.'config/components/component.php');
include($url.'config/rutas.php');
include($url.'config/auth/session.php');
include($url.'config/funciones.php');

 

