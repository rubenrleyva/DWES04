<?php

/* 
 * Clase SmartySetup para ahorrar y optimizar código. Hereda de la clase Smarty e introduce todos los datos de configuración de directorios y caché en este único fichero
 * 
 * Las Mejoras han sido ideas de Felipe Rodríguez y de Antonio Valverde Balbuena
 *
 */

 //Requerimos la clase Smarty
    require_once('libs/Smarty.class.php');

    //Clase SmartySetup que hereda de la clase Smarty
    class SmartySetup extends Smarty{
  
        //Constructor de la clase
        public function __construct(){
      
            //Llamamos al constructor de Smarty
            parent::__construct();
            //Usamos los setters que tiene la clase Smarty 
            //Creo que los nombres de los setters son bastante explícitos, así que no repararé en explicar "quién es quién"
            //Cambiar las rutas por las que convenga 
            parent::setTemplateDir('smarty/templates/');
            parent::setCompileDir('smarty/templates_c/');
            parent::setConfigDir('smarty/configs/');
            parent::setCacheDir('smarty/cache/');
            //Y pongo el caching a false porque si no, no funciona
            $this->caching = false;
        }
    }
    

