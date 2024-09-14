<?php
$servername = "localhost";
$username = "root"; // Cambia esto a tu usuario de MySQL
$password = ""; // Cambia esto a tu contraseña de MySQL
$dbname = "clinica_veterinaria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'agregar_paciente') {
        agregarPaciente($conn);
    } elseif (isset($_POST['action']) && $_POST['action'] === 'buscar_paciente') {
        buscarPaciente($conn);
    } elseif (isset($_POST['action']) && $_POST['action'] === 'agregar_historial') {
        agregarHistorial($conn);
    }
}

function agregarPaciente($conn) {
    $nombre = $_POST['nombre'];
    $especie = $_POST['especie'];
    $raza = $_POST['raza'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $propietario_nombre = $_POST['propietario_nombre'];
    $propietario_telefono = $_POST['propietario_telefono'];
    $propietario_direccion = $_POST['propietario_direccion'];
    $propietario_correo = $_POST['propietario_correo'];

    $sql = "INSERT INTO pacientes (nombre, especie, raza, edad, sexo, propietario_nombre, propietario_telefono, propietario_direccion, propietario_correo)
            VALUES ('$nombre', '$especie', '$raza', $edad, '$sexo', '$propietario_nombre', '$propietario_telefono', '$propietario_direccion', '$propietario_correo')";

    if ($conn->query($sql) === TRUE) {
        echo "Paciente agregado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function buscarPaciente($conn) {
    $nombre = $_POST['nombre'];
    $sql = "SELECT * FROM pacientes WHERE nombre LIKE '%$nombre%'";
    $result = $conn->query($sql);

    $pacientes = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pacientes[] = $row;
        }
    }
    echo json_encode($pacientes);
}

function agregarHistorial($conn) {
    $paciente_id = $_POST['paciente_id'];
    $fecha = $_POST['fecha'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];

    $sql = "INSERT INTO historial_medico (paciente_id, fecha, diagnostico, tratamiento)
            VALUES ($paciente_id, '$fecha', '$diagnostico', '$tratamiento')";

    if ($conn->query($sql) === TRUE) {
        echo "Historial médico agregado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
