<?php
    if (!empty($_GET["id"])) {
        $id=$_GET["id"];
        $sql=$conexion->query("delete from persona where idpersona=$id");
        if ($sql==1) {
            echo '<div class="alert alert-warning "><i class="bi bi-exclamation-triangle"></i> Registro eliminado</div>';
        } else {
            echo '<div class="alert alert-danger "><i class="bi bi-x-octagon"></i> Error al eliminar</div>';
        }
        
    }
?>