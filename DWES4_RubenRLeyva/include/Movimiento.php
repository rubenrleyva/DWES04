<?php

/* 
 * Módulo: Desarrollo Web Entorno Servidor
 * Tarea 04: Forrare Bank
 * Author: Rubén Ángel Rodriguez Leyva
 */

/**
 * Description of Movimiento
 *
 * @author RubenRL
 */
class Movimiento {
    
    // Atributos de la clase movimiento.
    protected $codigoMov; // Para el código del movimiento
    protected $loginUsu; // Para el login del usuario
    protected $fecha; // Para la fecha del movimiento
    protected $concepto; // Para el concepto del movimiento
    protected $cantidad; // Para la cantidad del movimiento

    /**
     * Método GETTER que devuelve el código del movimiento.
     * @return type
     */
    public function getCodigoMov(){
        return $this->codigoMov;
    }
    
    /**
     * Método GETTER que devuelve el login del usuario/cliente asociado al movimiento
     * @return type
     */
    public function getLoginUsu(){
        return $this->loginUsu;
    }
    
    /**
     * Método GETTER que devuelve la del movimiento.
     * @return type
     */
    public function getFecha(){
        return $this->fecha;
    }
    
    /**
     * Método GETTER que devuelve el concepto del movimiento.
     * @return type
     */
    public function getConcepto(){
        return $this->concepto;
    }
    
    /**
     * Método GETTER que devuelve la cantidad del movimiento.
     * @return type
     */
    public function getCantidad(){
        return $this->cantidad;
    }
    
    
    /**
     * Método SETTER que establece el código del movimiento.
     * @param type $codigoMov El código del movimiento
     */
    public function setcodigoMov($codigoMov){
        if($codigoMov != null && $codigoMov > 0){
            $this->codigoMov = $codigoMov;
        }
    }
    
    /**
     * Método SETTER que establece el login de usuario/cliente del movimiento.
     * @param type $loginUsu El login del usuario/cliente del movimiento
     */
    public function setLoginUsu($loginUsu){
        if($loginUsu != null){
            $this->loginUsu = $loginUsu;
        }
    }
    
    /**
     * Método SETTER que establece la fecha del movimiento.
     * @param type $fecha La fecha del movimiento
     */
    public function setFecha($fecha){
        if($fecha != null){
            $this->fecha = $fecha;
        }
    }
    
    /**
     * Método SETTER que establece la fecha del movimiento.
     * @param type $concepto El concepto del movimiento
     */
    public function setConcepto($concepto){
        if($concepto != null){
            $this->concepto = $concepto;
        }
    }
    
    /**
     * Método SETTER que establece la cantidad del movimiento.
     * @param type $cantidad La cantidad del movimiento
     */
    public function setCantidad($cantidad){
        if($cantidad != null){
            $this->cantidad = $cantidad;
        }
    }
    
    /**
     * Método constructor con parámetros
     * 
     * @param type $row El array de movimientos.
     */
    public function __construct($row) {
        $this->setcodigoMov($row['codigoMov']);
        $this->setLoginUsu($row['loginUsu']);
        $this->setFecha($row['fecha']);
        $this->setConcepto($row['concepto']);
        $this->setCantidad($row['cantidad']);
    }
}
