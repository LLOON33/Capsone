<?php
include "modelo/conexion.php";

// Verifica si todos los campos requeridos están presentes y no están vacíos
if (!empty($_POST['patente']) && !empty($_POST['tipo']) && !empty($_POST['modelo']) && !empty($_POST['anno']) && !empty($_POST['kilometraje_actual']) && !empty($_POST['estado']) && !empty($_POST['fecha_ingreso'])) {
    // Asume que $campo1, $campo2, $campo3... son los valores a insertar
    $patente = $_POST['patente'];
    $tipo = $_POST['tipo'];
    $modelo = $_POST['modelo'];
    $anno = $_POST['anno'];
    $kilometraje_actual = $_POST['kilometraje_actual'];
    $estado = $_POST['estado'];
    $fecha_ingreso = $_POST['fecha_ingreso'];

    $query = "INSERT INTO vehiculos (patente, tipo, modelo, anno, kilometraje_actual, estado, fecha_ingreso) VALUES('$patente', '$tipo', '$modelo', $anno, $kilometraje_actual, '$estado', '$fecha_ingreso')";

    if ($conexion->query($query) === TRUE) {
        echo "Vehículo agregado exitosamente.";
    } else {
        echo "Error al agregar el vehículo: " . $conexion->error;
    }
} else {
    echo "Por favor, completa todos los campos requeridos.";
}