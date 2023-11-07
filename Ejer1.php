<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Taller Backend Ejercicio 1</title>
</head>

<body>
    <header>
        <div class="title">
            <h1>Taller Backend</h1>
        </div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Ejercicio 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Ejer2.php">Ejercicio 2</a>
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


    <form action="Ejer1.php" method="POST">
        <h2>Ejercicio #1:</h2>
        <p>Realice un programa que mediante un formulario, solicite 2 números y pregunte al usuario
            el tipo de operación que desee (SUMA, RESTA, MULTIPLICACIÓN Y DIVISIÓN) y muestre el
            resultado de la operación:</p>
        <div class="mb-6 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Número 1</label>
            <div class="col-sm-10">
                <input type="number" name="n1" class="form-control" id="" placeholder="Digite número 1" step="any" required>
            </div>
        </div>
        <br>
        <div class="mb-6 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Núemro 2</label>
            <div class="col-sm-10">
                <input type="number" name="n2" class="form-control" id="" placeholder="Digite número 2" step="any" required>
            </div>
        </div>
        <br>
        <label for="operacion">operación a realizar</label>
        <select class="form-control" name="ope" aria-label="Default select example" required>
            <option value="">Seleccione una operación</option>
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicadión</option>
            <option value="4">División</option>
        </select>
        <br>
        <button type="submit" class="btn btn-primary" name="operar" >Operar</button>

        <?php

        if (isset($_POST['operar'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $ope = $_POST['ope'];

            switch ($ope) {
                case '1':
                    $total = $n1 + $n2;
                    $ope2 = 'suma';
                    break;
                case '2':
                    $total = $n1 - $n2;
                    $ope2 = 'resta';
                    break;
                case '3':
                    $total = $n1 * $n2;
                    $ope2 = 'multiplicación';
                    break;
                case '4':
                    $total = $n1 / $n2;
                    $ope2 = 'división';
                    break;
            }

            echo '<h3>La ' . $ope2 . ' entre el número ' . $n1 . ' y el número ' . $n2 . ' es igual a = ' . $total . '</h3>';
        }

        ?>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>