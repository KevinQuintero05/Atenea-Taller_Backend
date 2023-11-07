<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP y Mysql</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <script>
        function eliminar() {
            var respuesta = confirm("Esta seguro de Eliminar el registro?");
            return respuesta;
        }
    </script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lista de Personas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../login.php">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    include "../DB/conexion.php";
    include "../controlador/eliminar_persona.php";
    ?>
    <div class="container-fluid row">

        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de personas</h3>
            <?php
            include "../DB/conexion.php";
            include "../controlador/registro_persona.php";

            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">numero de documento</label>
                <input type="text" class="form-control" name="cc">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">fechaNacimiento</label>
                <input type="date" class="form-control" name="fechaNacimiento">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo electronico</label>
                <input type="email" class="form-control" name="correo">
            </div>


            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Numero de identidad</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../DB/conexion.php";
                    $sql = $conexion->query(" select * from persona");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->idpersona ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellido ?></td>
                            <td><?= $datos->cc ?></td>
                            <td><?= $datos->fechaNacimiento ?></td>
                            <td><?= $datos->correo ?></td>
                            <td>
                                <a href="modificar_registro.php?id=<?= $datos->idpersona ?>" class="btn btn-small btn-warning"><i class="bi bi-pencil-square"></i> </a>
                                <a onclick="return eliminar()" href="admin.php?id=<?= $datos->idpersona ?>" class="btn btn-small btn-danger"><i class="bi bi-trash-fill"></i> </a>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>