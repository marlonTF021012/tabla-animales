<?php
    include "../conexion.php";
    $conexion=conexion();
    $nombre =$_POST['nombre'];
    $comida =$_POST['comida'];
    $region =$_POST['region'];
    $sql = "INSERT INTO t_animales (nombre, comida, region) VALUES ('$nombre', '$comida', '$region')";
    $resultado = mysqli_query ($conexion, $sql);

    if($resultado){
        header('location:../index.php ');
        }else{
        echo "error";
        }
?>