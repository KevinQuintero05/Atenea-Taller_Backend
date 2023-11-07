<?php
if(!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cc"]) and !empty($_POST["fechaNacimiento"]) and !empty($_POST["correo"]) ) {
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $cc=$_POST["cc"];
        $fechaNacimiento=$_POST["fechaNacimiento"];
        $correo=$_POST["correo"];

        $sql=$conexion->query("insert into persona(nombre,apellido,cc,fechaNacimiento,correo)values('$nombre',' $apellido','$cc','$fechaNacimiento','$correo') ");
        if ($sql==1) {
            echo '<div class="alert alert-success ">Registro exitoso</div>';
        } else {
            echo '<div class="alert alert-danger ">Registro No exitoso</div>';
        }

    }else {
        echo '<div class="alert alert-warning ">Hay un campo vacio</div>';
    }
    
}
?>