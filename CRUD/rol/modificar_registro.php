<?php
    include "../DB/conexion.php";
    $id=$_GET["id"];
    //echo $id;

    $sql=$conexion->query("select * from persona where idpersona=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar registro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modifricar Registro de personas</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
            include "../controlador/modificar_registro.php";
            while($datos=$sql->fetch_object()) { ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control"  name="nombre" value="<?=$datos->nombre?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">apellido</label>
                    <input type="text" class="form-control"  name="apellido" value="<?=$datos->apellido?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">numero de documento</label>
                    <input type="text" class="form-control"  name="cc" value="<?=$datos->cc?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">fechaNacimiento</label>
                    <input type="date" class="form-control"  name="fechaNacimiento" value="<?=$datos->fechaNacimiento?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">correo electronico</label>
                    <input type="email" class="form-control"  name="correo" value="<?=$datos->correo?>">
                </div>
        <?php }
        ?>
            

            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Actualizar</button>
    </form>
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    

</body>
</html>
