<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinaria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST); // Agregado para depuración
    $propietario= $_POST["propietario"] ?? '';
    $direccion = $_POST["direccion"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $paciente = $_POST["paciente"] ?? '';
    $fechaNacimiento = $_POST["fechaNacimiento"] ?? '';
    $dni = $_POST["dni"] ?? '';
    $especie = $_POST["especie"] ?? '';
    $raza = $_POST["raza"] ?? '';
    $sexo = $_POST["sexo"] ?? '';
    $color = $_POST["color"] ?? '';
    $fechaSeguimientoInicio = $_POST["fechaSeguimientoInicio"] ?? '';
    $fechaSeguimientoFin = $_POST["fechaSeguimientoFin"] ?? '';
    $descripcion = $_POST["descripcion"] ?? '';
    // Consulta SQL para insertar datos
    $sql = "INSERT INTO clientes (propietario, direccion, telefono, paciente, fechaNacimiento, dni, especie, raza, sexo, color, fechaSeguimientoInicio, fechaSeguimientoFin, descripcion)
    VALUES ('$propietario', '$direccion', '$telefono', '$paciente', '$fechaNacimiento', '$dni', '$especie', '$raza', '$sexo', '$color', '$fechaSeguimientoInicio', '$fechaSeguimientoFin', '$descripcion')";
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo cliente registrado exitosamente.";
    } else {
        echo "Error al registrar el cliente: " . $conn->error;
    }
}

$conn->close();
?>
