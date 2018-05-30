<?php

/* 
 * Módulo: Desarrollo Web Entorno Servidor
 * Tarea 04: Forrare Bank
 * Author: Rubén Ángel Rodriguez Leyva
 */

include_once 'Movimiento.php';

/**
 * Clase encargada del uso de la Base de Datos.
 *
 * @author RubenRL
 */
class BD {
     
    
    /**
     * Método público encargado de crear la conexión a la base de datos.
     * 
     * @return \PDO
     */
	 
    public function accesoBD(){
        
        $localhost = "localhost"; // El localhost
        $nombreBD = "banca_electronica"; // Nombre de la DB
        $usuario = "dwes"; // Nombre del usuario de ls BD
        $clave = "dwes"; // Clave del usuarion de la BD
        
        try{
        
            // Creamos e instanciamos el objeto de la conexión
            $conexion = new PDO('mysql:host='.$localhost.'; dbname='.$nombreBD, $usuario, $clave);
            
            // Le pasamos algunos atributos
            $conexion->exec("set names utf-8");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conexion; // Devolvemos la conexión.
            
        // en caso de que se produzca una excepción la controlamos.    
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
    
    /**
     * Método encargado de ejecutar la consulta por medio de prepare.
     * 
     * @param type $sql La consulta
     * @return type Prepare
     */
    protected static function ejecutaConsultaPrepare($sql) {
        
        $resultado = null;
        
        try{
            // Creamos la conexión
            $dwes = self::accesoBD();
            
            // si la misma es true hacemos el prepare.
            if (isset($dwes)){
                $resultado = $dwes->prepare($sql);
            }
            
        // en caso de excepción la capturamos.
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
        
        return $resultado; // Devolvemos la consulta prepare.
    }
    
    
    /**
     * Método encargado de verificar si existe el cliente.
     * 
     * @param type $login El login del usuario
     * @param type $contrasena La contraseña del usuario
     * @return type Array
     */
    public static function verificaCliente($login, $contrasena){
        
        // Creamos la consulta SELECT
        $sql = "SELECT login, nombre, password FROM usuarios ";
        $sql .= "WHERE login='$login';";
        
        try{
            
            // Llamamos a prepare
            $resultado = self::ejecutaConsultaPrepare($sql);
            
            // Ejecutamos la consulta.
            $resultado->execute();
            
            // Si hay resultados
            if(isset($resultado)) {
                
                // Se añade un elemento por cada cliente/usuario encontrado
                $fila = $resultado->fetch();

                // Verificamos el password.
                if(password_verify($contrasena, $fila['password'])){
                    return $fila; // Devolvemos los datos
                }else{
                    
                    return $fila = null; // Devolvemos null
                }
            }
            
        // en caso de excepción la capturamos    
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
    
    /**
     * Método encargado de obtener los movimientos.
     * 
     * @param type $loginUsu El login del usuario
     * @return \Movimiento Los movimientos como array
     */
    public static function obtieneMovimientos($loginUsu){
        
        // Creamos la consulta SELECT
        $sql = "SELECT codigoMov, loginUsu, fecha, concepto, cantidad FROM movimientos";
        $sql .= " WHERE loginUsu='".$loginUsu."' ORDER BY fecha;";
        
        try{
            
            // Llamamos a prepare
            $resultado = self::ejecutaConsultaPrepare($sql);
            
            // Ejecutamos la consulta
            $resultado->execute();
            
            // Creamos un array para los movimientos del cliente/usuario
            $movimientos = array();

            // Si encontramos movimientos del usuario
            if($resultado){
                
                // Se añade un elemento por cada movimiento obtenido
                $row = $resultado->fetch();
                
                // Mientras existan movimientos
                while($row != null){
                    
                    // Creamos un array de movimientos pasandole los datos de cada movimiento
                    $movimientos[] = new Movimiento($row);
                    $row = $resultado->fetch();
                }
            }
        
        // encaso de excepción la capturamos    
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
        
        // Devolvemos el array de movimientos.
        return $movimientos;
    }
    
    
    /**
     * Método encargado de introducir movimientos en la base de datos.
     * 
     * @param type $codigoMov El código de movimiento
     * @param type $loginUsu El login del usuario
     * @param type $fecha La fecha del movimiento
     * @param type $concepto El concepto del movimiento
     * @param type $cantidad La cantidad am ingresar
     * 
     * @return type booleano
     */
    public static function introduceMovimiento($codigoMov, $loginUsu, $fecha, $concepto, $cantidad){
        
        // Creamos la consulta INSERT INTO
        $sql = 'INSERT INTO movimientos (codigoMov, loginUsu, fecha, concepto, cantidad) '
            . 'VALUES (:codigoMov, :loginUsu, :fecha, :concepto, :cantidad)';       
        
        try{
            
            // Llamamos a prepare
            $resultado = self::ejecutaConsultaPrepare($sql);
        
            // Le pasamos los datos a insertar
            $resultado->bindParam(":codigoMov", $codigoMov); // Para el código de movimiento
            $resultado->bindParam(':loginUsu', $loginUsu); // Para el login del usuario
            $resultado->bindParam(':fecha', $fecha); // Para la fecha del movimiento
            $resultado->bindParam(':concepto', $concepto); // Para el concepto
            $resultado->bindParam(':cantidad', $cantidad); // Para la cantidad

            // Ejecutamos la consulta   
            $resultado->execute();
            
            // En caso de que se haya ejecutado bien
            if($resultado){
                return $movimientos = true; // Retornamos true
                
            // en caso contrario     
            }else{
                return $movimientos = false; // Retornamos false
            }
        
        // en caso de que se produzca una excepción la capturamos    
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
    
    
    
    /**
     * Método encargado de borrar los movimientos.
     * 
     * @param type $codigoMov El código del movimiento
     * @return type Boolean
     */
    public static function borrarMovimiento($codigoMov){
        
        // Creamos la consulta DELETE FROM
        $sql = 'DELETE FROM movimientos WHERE codigoMov LIKE :codigoMov';       
        
        try{
            
            // Llamamos a prepare
            $resultado = self::ejecutaConsultaPrepare($sql);
        
            // Le pasamos el código del movimiento a borrar
            $resultado->bindParam(":codigoMov", $codigoMov);       

            // Ejecutamos la consulta
            $resultado->execute();

            $movimientos = false;

            // En caso de que se haya ejecutado bien
            if($resultado){
                return $movimientos = true; // Retornamos true
                
            // en caso contrario     
            }else{
                return $movimientos = false; // Retornamos false
            }
            
        // en caso de que se haya producido una excepción la capturamos    
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}
