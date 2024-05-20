<?php
    # Datos del servidor local de MySQL
    $servidorP = "localhost";
    $usuarioP = "root";
    $contraseniaP = "1464";
    $base_de_datosP = "lista_de_tareas";

    # Datos del servidor remoto de MySQL
    $servidorS = "ip_remota";
    $usuarioS = "servidorRemoto";
    $contraseniaS = "1234";
    $base_de_datosS = "lista_de_tareas";

    # Intentar conectar al servidor local
    $conexion = @mysqli_connect($servidorP, $usuarioP, $contraseniaP, $base_de_datosP);

    if (!$conexion) {
        # Intentar conectar al servidor remoto
        $conexion = @mysqli_connect($servidorS, $usuarioS, $contraseniaS, $base_de_datosS);
        
        if ($conexion) {
            $_SESSION['host'] = $servidorS;
            echo "Conectado desde el servidor remoto: " . $_SESSION['host'];
        } else {
            echo "Error en la conexión remota: " . mysqli_connect_error();
        }
    } else {
        $_SESSION['host'] = $servidorP;
        echo "Conectado desde el servidor local: " . $_SESSION['host'];
    }
?>
