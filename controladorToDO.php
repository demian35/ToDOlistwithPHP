<?php

$server="localhost";//nombre del server
$usuario="root";//Usuario
$password="root";//contraseña
$baseDeDatos="basededatospracticapdo";//nombre de la base de datos en donde trabajaremos

//creamos la conexion 
$coneccion= new PDO("mysql:host=$server;dbname=$baseDeDatos",$usuario,$password);
$coneccion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//manejo de errores

//recepcion de datos
if($_POST){

}

if($_GET){

}

$sentencia=$coneccion->prepare("SELECT * FROM tareas");//consultamos lo que hay en la base de datos
$sentencia->execute();//ejecutamos la sentenica

$resultados=$sentencia->fetchAll();//regresamos los registros de la base de datos

?>