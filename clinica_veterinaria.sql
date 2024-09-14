CREATE DATABASE clinica_veterinaria;

USE clinica_veterinaria;

CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    especie VARCHAR(255),
    raza VARCHAR(255),
    edad INT,
    sexo VARCHAR(10),
    propietario_nombre VARCHAR(255),
    propietario_telefono VARCHAR(255),
    propietario_direccion VARCHAR(255),
    propietario_correo VARCHAR(255)
);

CREATE TABLE historial_medico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paciente_id INT,
    fecha DATE,
    diagnostico TEXT,
    tratamiento TEXT,
    FOREIGN KEY (paciente_id) REFERENCES pacientes(id)
);
