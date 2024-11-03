<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"]; // Agrega el punto y coma al final de esta línea
    $sql = $conexion->query("DELETE FROM vehiculos WHERE id=$id");
    
    if ($sql) {
        echo 'Vehículo eliminado correctamente';
    } else {
        echo 'Error al eliminar';
    }
}

?>