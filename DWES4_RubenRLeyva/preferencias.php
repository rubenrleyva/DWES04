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
   
    // Si pulsa sobre alguna de las opciones
    if(isset($_REQUEST['eleccion'])){

        // le pasamos a la variable elección el nombre del botón pulsado.
        $eleccion = $_REQUEST['eleccion'];
        
        // Creamos un switch con las opciones
        switch($eleccion){
            
            // En caso de pulsar sobre guardar
            case "Guardar":
                
                //Obtenemos los datos enviados por POST y los volcamos a variables
                $colorFondo = $_REQUEST['color'];
                
                // Obtenemos el login del usuario
                $usuario = $user->getLogin();
                
                // Le pasamos el valor del fondo
                $user->setColor($colorFondo);
                
                // Creamos la cookie
                setcookie("color[$usuario]", $colorFondo, time() + 365 * 24 * 60 * 60);
                
                break;
            
            // En caso de pulsar sobre eliminar
            case "Eliminar":
                
                // Obtenemos el login del usuario
                $usuario = $user->getLogin();
                
                // Eliminamos la cookie
                setcookie("color[$usuario]", time(), time()-3600);
                
                // Le asignamos el color banco
                $colorFondo = "#FFFFFF";
                
                // Y se lo pasamos al objeto usuario
                $user->setColor($colorFondo);
                
                break;

            default :
                break;
        }
        
    }
    
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

// Mostramos la plantilla
$smarty->display('preferencias.tpl');