<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Taller Backend Ejercicio 4</title>
</head>

<body>
    <header>
        <div class="title">
            <h1>Taller Backend</h1>
        </div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="Ejer1.php">Ejercicio 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ejer2.php">Ejercicio 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ejer3.php">Ejercicio 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Ejercicio 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ejer5.php">Ejercicio 5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./CRUD/login.php">CRUD</a>
            </li>
        </ul>
    </header>

    <body>


        <form action="Ejer4.php" method="POST">
            <h2>Ejercicio #4:</h2>
            <p>Solicitar al usuario la fecha de nacimiento y al dar enviar el sistema calcule y haga una
                comparación con la fecha actual y visualize :</p>
            <p>a. Si la edad es menor a 18 = “Su edad es” + edad + ” por tanto: No es mayor de edad”</p>
            <p>b. Si la edad es igual o mayor = “Su edad es” + edad + ” por tanto: Es mayor de edad”</p>
            <div class="mb-6 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                <div class="col-sm-10">
                    <input type="date" name="fecha" class="form-control" id="" step="any" required>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
            <br>
            <br>
            <?php

            if (isset($_POST['calcular'])) {
                $fecha_n = $_POST['fecha'];
                $fecha = new DateTime($_POST['fecha']);
                $fecha_actual_n = date('y-m-d');
                $fecha_actual = new DateTime(date('y-m-d'));
                $diff = $fecha->diff($fecha_actual);
                $año = $diff->y;
                $mes = $diff->m;
                $dia = $diff->d;

                echo 'Fecha de nacimiento =' . $fecha_n . '<br>';
                echo 'Fecha de actual =' . $fecha_actual_n . '<br>';
                echo 'Usted tiene: ' . $año . ' año(s), ' . $mes . ' meses, ' . $dia . ' dias';
            }
            ?>
        </form>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>