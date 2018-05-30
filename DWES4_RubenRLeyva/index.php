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

session_start();

// Comprobamos si existe algún usuario logeado
if(isset($_SESSION['usuario'])){
    header("Location: banca.php"); // en caso afirmativo redirigimos a banca.
}

// Establecemos el color de fondo en blanco.
$colorFondo = "#FFFFFF";

// Iniciamos las plantillas
$smarty = new SmartySetup;

// Comprobamos si ya se ha enviado el formulario
if (isset($_POST['enviar'])) {
    
    //Comprobamos que se ha rellenado el usuario y el password
    if (empty($_POST['login']) || empty($_POST['password'])) {
        
        // Si no están rellenos se mandaa la etiqueta de error del template la siguiente variable/frase
        $smarty->assign('error','Debes introducir un nombre de usuario y una contraseña');
      
    // En caso de si valores    
    } else {
        
        // Verificamos si existe el usuario
        $usuario = BD::verificaCliente($_POST['login'], $_POST['password']);
                
        // Comprobamos las credenciales con la base de datos
        if ($usuario) {
            
            // Recuperamos el login y el nombre del usuario
            $login = $usuario['login'];
            $nombreUsuario = $usuario['nombre'];
            
            // Comprobamos si la cookie encargada del colo no está vacía
            if(!empty($_COOKIE['color'])){
                
                // Recorremos la cookie
                foreach ($_COOKIE['color'] as $name => $value) {
        
                    // Comprobamos que el nombre se corresponde con el del usuario.
                    if($name == $login){
            
                        // Le pasamos el valor a la variable color.
                        $color = $value;
                    }
                }
            }
      
            // Creamos un usuario el cual se pasará a una variable de sesion
            $_SESSION['usuario'] = new Usuario($login, $nombreUsuario, $color);
            
            // Asignamos la hora de conexión
             $_SESSION['hora'] = time();
                
            //Redirigimos a la página de banca
            header("Location: banca.php"); 
            
            //Asignamos a la variable de error el campo vacio
            $smarty->assign('error','');
            
        // Si los credenciales no son correctos    
        } else {
            
            // Si las credenciales no son válidas, se vuelven a pedir, por lo que
            // se asigna a la etiqueta de error del template el mensaje
            $smarty->assign('error','Usuario o contraseña no válidos!');
        }
    }
//En caso que no se haya enviado el formulario, se deja la etiqueta vacia
} else {
    $smarty->assign('error','');
}

// Se le asigna el color
$smarty->assign('color', $colorFondo);

// Renderizamos la plantilla
$smarty->display('index.tpl');



