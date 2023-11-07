<?php
include 'db/conexion.php';

$query = mysqli_query($conexion, "SELECT * FROM usuarios")
?>
<!DOCTYPE html>

<head>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.4/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.4/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.4/js/responsive.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Taller Backend Ejercicio 5</title>
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
                <a class="nav-link" href="Ejer4.php">Ejercicio 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Ejercicio 5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./CRUD/login.php">CRUD</a>
            </li>
        </ul>
    </header>
    <div class="container">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($datos = mysqli_fetch_array($query)) {
                    $id = $datos['id'];
                    $nombre = $datos['nombre'];
                    $apellido = $datos['apellido'];
                    $cedula = $datos['cedula'];

                    echo '
                <tr data-url="FQS7i2z1CoA">
                  
                    <td>' . $id . '</td>
                    <td>' . $nombre . '</td>
                    <td>' . $apellido . '</td>
                    <td>' . $cedula . '</td>
                </tr>
                ';
                }

                ?>
            </tbody>
        </table>
    </div>

</body>
<script src="js/script.js"></script>

</html>