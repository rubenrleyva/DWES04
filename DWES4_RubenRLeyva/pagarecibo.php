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
    if(isset($_REQUEST['pagar'])){
        
        // Iniciamos las varibles que serán utilizadas
        $ultimoMovimiento = 0; // Para saber el último movimiento
        $errores = 0; // Para contar los errores.
        $error = ""; // Para imprimir los errores.
                
        // Obtenemos los movimientos que hay
        $movimientos = BD::obtieneMovimientos($user->getLogin());
                
        // Sacamos el movimientos más alto mediante bucle foreach
        foreach ($movimientos as $indice => $movimiento){
             if($movimiento->getCodigoMov() > $ultimoMovimiento){
                $ultimoMovimiento = $movimiento->getCodigoMov();
            }
        }
           
        // Recogemos los distintos datos
        $concepto = $_REQUEST['concepto']; // Para el concepto del ingreso
        $cantidad = $_REQUEST['cantidad']; // Para la cantidad a ingresar
        $fecha = $_REQUEST['fecha']; // Para la fecha de ingreso    
              
        // Si el concepto se encuentra vacío creamos un error
        if($concepto == null || count_chars($concepto) < 1){
            $error .= "Error: El concepto se encuentra vacío.<br>";
            $errores++;
        }
             
        // Si la cantidad esta vacía o es menor de 1 creamos un error
        if($cantidad == null || $cantidad < 1){
            $error .= "Error: La cantidad debe ser un número mayor de cero.<br>";
            $errores++;
        }
          
        // Si la fecha se encuentra vacía creamos un error
        if($fecha == null){
            $error .= "Error: La fecha se encuentra vacía.<br>";
            $errores++;
        }
        
        // Si el número de errores es mayor de cero.
        if($errores > 0){
             
            // Le pasamos a la plantilla dichos errores.
            $smarty->assign('pagarRecibo', $error);
            $smarty->assign('concepto', $concepto);
            $smarty->assign('cantidad', $cantidad);
        
        // en caso contrario             
        }else{
                                      
            // Creamos un objeto movimiento nuevo.
            $movimiento = new Movimiento($ultimoMovimiento + 1, $user->getLogin(), $fecha, $concepto, -1 * $cantidad);
                
            // Introducimos un movimiento nuevo en la base de datos
            if(BD::introduceMovimiento($ultimoMovimiento + 1, $user->getLogin(), $fecha, $concepto, -1 * $cantidad)){
                
                // Redireccionamos hacia últimos movimientos para que se muestren
                header('Location: ultimosmovimientos.php');
            }
        }   
    }

// en caso de que no se encuentre creada la sesión    
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
$smarty->display('pagarrecibo.tpl');

