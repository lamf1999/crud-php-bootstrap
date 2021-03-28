<?php 
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query= "delete from tarea where id = $id";
    $resultado= mysqli_query($conexionDB,$query);
    if(!$resultado){
        die("fallo");
    }
    $_SESSION['message']= 'tarea eliminada';
    header("Location: index.php");
}




?>