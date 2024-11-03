<?php
include "modelo/conexion.php";

if (isset($_POST['patente']) && isset($_POST['tipo']) && isset($_POST['modelo']) && isset($_POST['anno']) && isset($_POST['kilometraje_actual']) && isset($_POST['estado']) && isset($_POST['fecha_ingreso'])) {
    
    $patente = $_POST['patente'];
    $tipo = $_POST['tipo'];
    $modelo = $_POST['modelo'];
    $anno = $_POST['anno'];
    $kilometraje_actual = $_POST['kilometraje_actual'];
    $estado = $_POST['estado'];
    $fecha_ingreso = $_POST['fecha_ingreso'];

    $sql = $conexion->query("INSERT INTO vehiculos (patente, tipo, modelo, anno, kilometraje_actual, estado, fecha_ingreso) VALUES('$patente', '$tipo', '$modelo', $anno, $kilometraje_actual, '$estado', '$fecha_ingreso')");

    if ($sql) {
        echo '<div calss="alert-success">Vehiculo registrado correctamente</div>';
    } else {
        echo '<div calss="alert-danger">Error al registrar el vehiculo</div>';
    }
} else {
    echo '<div calss="alert-warning"> Faltan campos que completar </div>';
}
?>