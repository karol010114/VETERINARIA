<?php
// Establecer conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "veterinaria");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if (isset($_POST['busqueda'])) {
    $busqueda = $_POST['busqueda'];
    
    // Consulta para seleccionar el paciente por ID
   // $sql = "SELECT * FROM clientes WHERE id = ?";
    //$stmt = $conexion->prepare($sql);
    //$stmt->bind_param("i", $busqueda); 
   // $stmt->execute();-->
    //$result = $stmt->get_result();

    $sql = "SELECT * FROM clientes WHERE id = ? OR propietario LIKE ?";
    $stmt = $conexion->prepare($sql);
    $busqueda_nombre = "%$busqueda%";
    $stmt->bind_param("is", $busqueda, $busqueda_nombre);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Crear una tabla para mostrar los resultados
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Propietario</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>DNI</th>
                <th>Paciente</th>
                <th>Fecha de Nacimiento</th>
                <th>Especie</th>
                <th>Raza</th>
                <th>Sexo</th>
                <th>Color</th>
                <th>Fecha de Seguimiento Inicio</th>
                <th>Fecha de Seguimiento Fin</th>
                <th>Descripcion</th>
              </tr>";
    
        // Mostrar los datos de cada fila
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['propietario']}</td>
                    <td>{$row['direccion']}</td>
                    <td>{$row['telefono']}</td>
                    <td>{$row['dni']}</td>
                    <td>{$row['paciente']}</td>
                    <td>{$row['fechaNacimiento']}</td>
                    <td>{$row['especie']}</td>
                    <td>{$row['raza']}</td>
                    <td>{$row['sexo']}</td>
                    <td>{$row['color']}</td>
                    <td>{$row['fechaSeguimientoInicio']}</td>
                    <td>{$row['fechaSeguimientoFin']}</td>
                    <td>{$row['descripcion']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {   
        echo "<p style='color: red;'>No se encontraron resultados para el ID: $busqueda.</p>";
    }

    $stmt->close();
    
}
$conexion->close();
?>
