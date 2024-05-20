<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registro de Tareas</title>
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="resources/logo_tesji.png" alt="logo">
                Tarea para:
                <?php
                if (isset($_SESSION['user'])) { ?>
                    <?php echo $_SESSION['user'] ?>
                    <?php echo $_SESSION['userape1'] ?>
                    <?php echo $_SESSION['userape2'] ?>
                <?php } else ?>
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Nueva Tarea
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="ingresar_tarea.php" method="post">
                        <div>
                            <label for="tareaN" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la
                                Tarea</label>
                            <input type="tareaN" name="tareaN" id="tareaN" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Examen" required="">
                        </div>
                        <div>
                            <label for="tareaD" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion de la
                                Tarea</label>
                            <input type="tareaD" name="tareaD" id="tareaD" placeholder="Realizar examen mañana" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>

                        <button type="submit" class="w-full text-dark bg-[#60a5fa] hover:bg-[#1d4ed8] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>