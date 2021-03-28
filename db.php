<?php
session_start();

$user="root";
$password="";
$servidor="localhost";
$baseDatos="crud";

$conexionDB = mysqli_connect($servidor,$user,$password,$baseDatos);


if($conexionDB==false){
    echo "base de datos incorrecta"; 
}
?>