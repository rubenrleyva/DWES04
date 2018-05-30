<?php

/* 
 * Módulo: Desarrollo Web Entorno Servidor
 * Tarea 04: Forrare Bank
 * Author: Rubén Ángel Rodriguez Leyva
 */

require_once('include/BD.php');
require_once('include/Usuario.php');
require_once('include/Movimiento.php');

// Cargamos la librería de Smarty
require_once('include/SmartySetup.php');

// Iniciamos la plantilla
$smarty = new SmartySetup;

// Recuperamos la sesión
session_start();

// Iniciamos la variable movimientos como un array
$movimientos = array();

// Establecemos el color de fondo en blanco.
$colorFondo = "#FFFFFF";

// Variable encargada del mensaje de error
$error = "";

// Comprobamos si hay sessión iniciada
if(isset($_SESSION['usuario'])){
    
    // Recuperamos los valores de la sessión
    $user = $_SESSION['usuario'];
    
    // Recuperamos el color de fondo del cliente.
    $colorFondo = $user->getColor();
   
    // Si pulsa sobre ingresar
    if(isset($_REQUEST['ingresar'])){

        // Variable encargada del número del último movimiento
        $ultimoMovimiento = 0;
        
        // Variable encargada del número de errores
        $errores = 0;
         
        // Averiguamos los movimientos que hay
        $movimientos = BD::obtieneMovimientos($user->getLogin());
         
        // Sacamos cual es el último movimiento mediante un bucle foreach
        foreach ($movimientos as $indice => $movimiento){
            if($movimiento->getCodigoMov() > $ultimoMovimiento){
                $ultimoMovimiento = $movimiento->getCodigoMov();
            }
        }
                
        // Variable a utilizar
        $concepto = $_REQUEST['concepto']; // Para el concepto del ingreso
        $cantidad = $_REQUEST['cantidad']; // Para la cantidad a ingresar
        $fecha = $_REQUEST['fecha']; // Para la fecha de ingreso    
            
        // Si el concepto se encuentra vacío provocamos un error
        if($concepto == null || count_chars($concepto) < 1){
            $error .= "Error: El concepto se encuentra vacío.<br>";
            $errores++;
        }
        
        // Si la cantidad se encuentra vacía o menojr de 1 provocamos un error        
        if($cantidad == null || $cantidad < 1){
            $error .= "Error: La cantidad debe ser un número mayor de cero.<br>";
            $errores++;
        }
        
        // Si la fecha se encuentra vacía provocamos un error        
        if($fecha == null){
            $error .= "Error: La fecha se encuentra vacía.<br>";
            $errores++;
        }
        
        // Si el número de errores es mayor de cero
        if($errores > 0){
            
            // Le pasamos a la plantilla dichos errores.        
            $smarty->assign('ingresarDinero', $error);
            $smarty->assign('concepto', $concepto);
            $smarty->assign('cantidad', $cantidad);
        
        // en caso contrario
        }else{
            
            // Creamos un nuevo objeto movimiento
            $movimiento = new Movimiento($ultimoMovimiento + 1, $user->getLogin(), $fecha, $concepto, $cantidad);
           
            // Se lo pasamos a la base de datos
            if(BD::introduceMovimiento($ultimoMovimiento + 1, $user->getLogin(), $fecha, $concepto, $cantidad)){
                
                // Redireccionamos hacia últimos movimientos para que se muestren
                header('Location: ultimosmovimientos.php');
            }
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
$smarty->display('ingresardinero.tpl');

