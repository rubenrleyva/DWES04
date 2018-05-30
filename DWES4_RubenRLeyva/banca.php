<?php

/* 
 * Módulo: Desarrollo Web Entorno Servidor
 * Tarea 04: Forrare Bank
 * Author: Rubén Ángel Rodriguez Leyva
 */

require_once('include/BD.php');
require_once('include/Usuario.php');

// Cargamos la librería de Smarty
require_once('include/SmartySetup.php');

// Iniciamos la plantilla
$smarty = new SmartySetup;

// Recuperamos la sesión
session_start();

// Iniciamos la variable movimientos como un array
$movimientos = array();

// Comprobamos si hay sessión iniciada
if(isset($_SESSION['usuario'])){
    
    // Recuperamos los valores de la sessión
    $user = $_SESSION['usuario'];
    
    // Iniciamos la variable errores vacía.
    $errores = "";
    
    // Recuperamos el color de fondo del cliente.
    $colorFondo = $user->getColor();
   
// en caso contrario     
}else{
    
    // Redirigimos a la página inicial
    header("Location: index.php");
    
    // Avisamos de que se necesita introducir un usuario
    $smarty->assign('error','Usuario no logeado.');
}

// Le asignamos el nombre
$smarty->assign('nombre', $user->getNombre());

// Se le asigna la hora de sesión
$smarty->assign('hora', date("H:i", $_SESSION['hora']));

// Se le asigna el color
$smarty->assign('color', $colorFondo);

// Se le asigna el color
$smarty->assign('esta', true);

// Mostramos la plantilla
$smarty->display('banca.tpl');