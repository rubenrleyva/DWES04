<?php

/* 
 * Módulo: Desarrollo Web Entorno Servidor
 * Tarea 04: Forrare Bank
 * Author: Rubén Ángel Rodriguez Leyva
 */

/**
 * Clase encargada de Usuario.
 *
 * @author RubenRL
 */
class Usuario {
    
    // Declaramos los diferentes atributos
    protected $login; // Para el login
    protected $nombre; // Para el nombre
    
    // Para el color, lo he incluido porque pienso que puede ser un atributo
    // aunque se guarde en las cookies también se podía guardar como parte 
    // de su objeto.
    protected $color; 


    /**
     * Constructor de la clase Usuario.
     * 
     * @param type $login
     * @param type $nombre
     * @param type $color
     */
    public function __construct($login = null, $nombre = null, $color = null) {
        $this->login = $login;
        $this->nombre = $nombre;
        $this->color = $color;
    }
    
    /**
     * Método mágico que confirma datos pendientes o realizar tareas similares de limpieza.
     * @return type
     */
    public function __sleep() {
        return array('login', 'nombre', 'color');
    }
    
    /**
     * Método GETTER encargado de devolver el login del usuario/cliente
     * @return type
     */
    public function getLogin(){
        return $this->login;
    }
    
    /**
     * Método GETTER encargado de devolver el nombre del usuario/cliente
     * @return type
     */
    public function getNombre(){
        return $this->nombre;
    }
    
    /**
     * Método GETTER encargado de devolver el color del usuario/cliente
     * @return type
     */
    public function getColor(){
        return $this->color;
    }
    
    /**
     * Método SETTER encargado de establecer el color de fondo del usuario/cliente
     * 
     * @param type $color El color de fondo
     */
    public function setColor($color){
        $this->color = $color;
    }  
}
