<?php

    // Incluimos las credenciales del servidor de MySQL
    include('conexiones/conexion_local.php');

    // Si existe la variable de correo ejecuta todo esto
    if (isset($_POST['txtEmail'])) {
        // Obtenemos los datos del formulario
        $user = $_POST['txtEmail'];
        $password = $_POST['txtContra'];
        // Mandamos llamar al procedimiento almacenado
        $consulta = "CALL inicio_sesion('$user', '$password')";
        // Ejecutamos la consulta
        $ejecutarConsulta = mysqli_query($conexion, $consulta);

        if ($ejecutarConsulta) {
            // Si existe el usuario entonces se crea la sesion
            session_start();
            $datosUsuario = mysqli_fetch_assoc($ejecutarConsulta);
            // Una vez iniciada la sesion creamos la variable de sesion
            $_SESSION['iduser'] = $datosUsuario['idusuario'];
            $_SESSION['user'] = $datosUsuario['nombreusuario'];
            $_SESSION['userape1'] = $datosUsuario['apellidopaterno'];
            $_SESSION['userape2'] = $datosUsuario['apellidomaterno'];
            $_SESSION['correo'] = $datosUsuario['correo'];
            $_SESSION['contrasenia'] = $datosUsuario['contrasenia'];
            header("location:tareas.php");
        }
    }
?>