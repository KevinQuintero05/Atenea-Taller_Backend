<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Taller Backend Ejercicio 2</title>
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
                <a class="nav-link disabled" aria-disabled="true">Ejercicio 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ejer3.php">Ejercicio 3</a>
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


        <form action="Ejer2.php" method="POST">
            <h2>Ejercicio #2:</h2>
            <p>Solicitar al usuario la edad y al dar enviar el sistema muestre:</p>
            <p> a. Si la edad es menos a 18 = “No es mayor de edad”</p>
            <p> b. Si la edad es igual o mayor = “Es mayor de edad”</p>
            <div class="mb-6 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Edad</label>
                <div class="col-sm-10">
                    <input type="number" name="edad" class="form-control" id="" placeholder="Digite su edad" step="any" required>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="calcular">calcular</button>
            <?php

            if (isset($_POST['calcular'])) {
                $edad = $_POST['edad'];

                if ($edad >= 18 && $edad <= 100) {
                    echo '<h3> es mayor de edad </h3>';
                }
                if ($edad > 100) {
                    echo '<h3> Valor incorrecto</h3>';
                }
                if ($edad < 18 && $edad > 0) {
                    echo '<h3> Es menor de edad</h3>';
                }
                if ($edad <= 0) {
                    echo '<h3> No ha nacido</h3>';
                }
            }

            ?>
            <br>
        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>