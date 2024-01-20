<?php

include("conexion.php");
$con=conectar();
#Capturar los datos con get por medio del id para despues eliminar
$id_usuario=$_GET['id'];

$sql="DELETE FROM tbl_users WHERE id_usuario='$id_usuario'";
$query=mysqli_query($con,$sql);
#Si todo sale bien me actualizará datos en la misma ventana
    if($query){
        header("Location: Administradores.php");
    }
?>