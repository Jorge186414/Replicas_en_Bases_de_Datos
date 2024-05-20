<?php
    session_start();
    // Incluimos las credenciales del servidor de MySQL
    include('conexiones/conexion_local.php');

    // Si existe la variable de correo ejecuta todo esto
    if (isset($_POST['tareaN'])) {
        // Obtenemos los datos del formulario
        $idUsuario = $_SESSION['iduser'];
        $tarea = $_POST['tareaN'];
        $descripcion = $_POST['tareaD'];
        // Mandamos llamar al procedimiento almacenado
        $consulta = "CALL agregar_tarea($idUsuario, '$tarea', '$descripcion')";
        // Ejecutamos la consulta
        $ejecutarConsulta = mysqli_query($conexion, $consulta);

        if ($ejecutarConsulta) {
            header("location:tareas.php");
        }
    }
?>