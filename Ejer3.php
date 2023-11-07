<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Taller Backend Ejercicio 3</title>
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
                <a class="nav-link disabled" aria-disabled="true">Ejercicio 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ejer4.php">Ejercicio 4</a>
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


        <form action="Respuesta_Ejer3.php" method="GET">
            <h2>Ejercicio #3:</h2>
            <p>Realizar un programa que pida el nombre, apellido y número de cédula del usuario y
                mediante el método GET capture los datos y lo envíe a otra página que muestro esos datos:</p>
            <div class="mb-6 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" name="nombre" class="form-control" id="" placeholder="Ingrese nombre" step="any" required>
                </div>
            </div>
            <br>
            <div class="mb-6 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-10">
                    <input type="text" name="apellido" class="form-control" id="" placeholder="Ingrese apellido" step="any" required>
                </div>
            </div>
            <br>
            <div class="mb-6 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Cedúla</label>
                <div class="col-sm-10">
                    <input type="number" name="cedula" class="form-control" id="" placeholder="Ingrese número de cédula" step="any" required>
                </div>
            </div>
            <br>

            <button type="submit" class="btn btn-primary" name="datos">Enviar</button>
        </form>

        <?php

        if (isset($_POST['operar'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $ope = $_POST['ope'];

            switch ($ope) {
                case '1':
                    $total = $n1 + $n2;
                    $ope2 = "suma";
                    break;
                case '2':
                    $total = $n1 - $n2;
                    $ope2 = "resta";
                case '3':
                    $total = $n1 * $n2;
                    $ope2 = "multiplicación";
                    break;
                case '4':
                    $total = $n1 / $n2;
                    $ope2 = "división";
                    break;
            }

            echo '<h3>La ' . $ope2 . ' entre el número ' . $n1 . ' y el múmero ' . $n2 . ' es igual a: ' . $total . '</h3>';
        }

        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>