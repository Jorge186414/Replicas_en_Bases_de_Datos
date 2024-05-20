<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lista de Tareas</title>
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-top px-6 py-8 pt-6 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="resources/logo_tesji.png" alt="logo">
                Bienvenido
                <?php
                if (isset($_SESSION['user'])) { ?>
                    <?php echo $_SESSION['user'] ?>
                    <?php echo $_SESSION['userape1'] ?>
                    <?php echo $_SESSION['userape2'] ?>
                <?php } else ?>
            </a>

            <div class="relative overflow-x-auto">
                <?php
                include "conexiones/conexion_local.php";
                $idusuario = $_SESSION['iduser'];
                $sql = "CALL seleccion_tareas('$idusuario')";
                $ejecutarConsulta = mysqli_query($conexion, $sql);
                ?>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-40 py-4">
                                Nombre de la Tarea
                            </th>
                            <th scope="col" class="px-40 py-4">
                                Descripcion de la Tarea
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($registroTareas = mysqli_fetch_assoc($ejecutarConsulta)) { ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?php echo $registroTareas['nombretarea'] ?>
                                </th>
                                <td class="px-40 py-4">
                                    <?php echo $registroTareas['descripciontarea'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <div class="ml-80 mr-80">
                    <a href="registro_tarea.php" class="mt-10 block w-full text-white bg-[#60a5fa] hover:bg-[#1d4ed8] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Registrar Tarea</a>
                </div>
                <div class="ml-80 mr-80">
                    <p class="text-sky-400/100 mt-8">Conectado desde: <?php echo $_SESSION['host']?></p>
                    <a href="logout.php" class="mt-10 block w-full text-white bg-[#60a5fa] hover:bg-[#1d4ed8] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Cerrar sesión</a>
                </div>
            </div>


        </div>
    </section>

</body>

</html>