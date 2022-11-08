<?php
    function conexion(){
        $servidor='localhost';
        $usuario='root';
        $password='';
        $base='animales';
        $puerto='3306';

        $conexion= mysqli_connect($servidor, $usuario, $password, $base, $puerto);
        return $conexion;
    }
?>

