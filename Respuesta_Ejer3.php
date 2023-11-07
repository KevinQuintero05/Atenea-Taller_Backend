<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 3 Respuesta</title>
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
    <div class="card mb-3 " id="card_e3" >
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h4>datos del sujeto:</h4>
                    <?php
                    if (isset($_GET['datos'])) {
                        $nombre = $_GET['nombre'];
                        $apellido = $_GET['apellido'];
                        $cedula = $_GET['cedula'];

                        echo
                        '<h5>Nombre: ' . $nombre . '</h5>';
                        echo
                        '<h5>apellido: ' . $apellido . '</h5>';
                        echo
                        '<h5>cedula: ' . $cedula . '</h5>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>