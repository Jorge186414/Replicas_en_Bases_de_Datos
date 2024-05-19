<?php
    # Datos del servidor local de MySQL
    $servidor = "localhost";
    $usuario = "jorge";
    $contrasenia = "luffy1464";
    $base_de_datos = "to_do_list";

    # Conexion al servidor de MysSQL
    $conexion = mysqli_connect($servidor, $usuario, $contrasenia, $base_de_datos);
    # Validacion de la conexion
    if(!$conexion){
        echo "Problemas al conectar con la base de datos";
    }else{
        echo "Conexion exitosa";
    }
?>