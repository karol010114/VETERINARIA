<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Pacientes Veterinarios</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body>
    <h1>Gestión de Pacientes Veterinarios</h1>
    
    <!-- Sección para agregar pacientes -->
    <div class="form-container">
        <h2>Agregar Paciente</h2>
        <form id="form-agregar-paciente">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="especie" placeholder="Especie">
            <input type="text" name="raza" placeholder="Raza">
            <input type="number" name="edad" placeholder="Edad">
            <input type="text" name="sexo" placeholder="Sexo">
            <input type="text" name="propietario_nombre" placeholder="Nombre del Propietario" required>
            <input type="text" name="propietario_telefono" placeholder="Teléfono del Propietario">
            <input type="text" name="propietario_direccion" placeholder="Dirección del Propietario">
            <input type="email" name="propietario_correo" placeholder="Correo del Propietario">
            <button type="submit">Agregar Paciente</button>
        </form>
    </div>

    <!-- Sección para buscar pacientes -->
    <div class="search-container">
        <h2>Buscar Paciente</h2>
        <input type="text" id="buscar-nombre" placeholder="Buscar por Nombre">
        <button id="btn-buscar">Buscar</button>
        <div id="resultados-pacientes"></div>
    </div>

    <!-- Sección para ver historial médico -->
    <div class="historial-container">
        <h2>Historial Médico</h2>
        <div id="resultados-historial"></div>
    </div>
</body>
</html>
