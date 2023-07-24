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
    
    print_r($_POST);
    $sentencia=$coneccion->prepare("INSERT INTO tareas(idtareas,tarea) VALUES(NULL, :tarea)");//preparamos la insercion
    $sentencia->bindParam(':tarea', $tarea);//recibimos los datos enviados del form
    $tarea=$_POST['tarea']; //variable a la que hace referencia :tarea
    $sentencia->execute();//ejecutamos la sentencia
    echo "Registro agregado"."<br>";
    header("Location:?");//redireccionamos para que no se ejecute la insercion al actualizar la pagina
}


$sentencia=$coneccion->prepare("SELECT * FROM tareas");//consultamos lo que hay en la base de datos
$sentencia->execute();//ejecutamos la sentenica

$resultados=$sentencia->fetchAll();//regresamos los registros de la base de datos

?>