<?php 
    if (!empty($_POST["btnregistrar"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cc"]) and !empty($_POST["fechaNacimiento"]) and !empty($_POST["correo"])) {
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $cc=$_POST["cc"];
            $fechaNacimiento=$_POST["fechaNacimiento"];
            $correo=$_POST["correo"];

            $sql=$conexion->query(" update persona set nombre='$nombre', apellido='$apellido', cc=$cc, fechaNacimiento='$fechaNacimiento', correo='$correo' where idpersona=$id "); 
            if ($sql==1) {
                header("location:./admin.php");
            } else {
                echo '<div class="alert alert-danger ">Error</div>';
            }
            
        }else{
            echo '<div class="alert alert-warning ">Hay un campo vacio</div>';
        }
    }

?>