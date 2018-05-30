<?php

/* 
 * Módulo: Desarrollo Web Entorno Servidor
 * Tarea 04: Forrare Bank
 * Author: Rubén Ángel Rodriguez Leyva
 */

// Comenzamos o recuperamos la sesión
session_start();

// Destruimos la sesión
session_destroy();

// Redireccionamos hacia el index.
header('Location: index.php');
