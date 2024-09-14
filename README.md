# Sistema de Registro de Clientes - Veterinaria 🐾

Este proyecto tiene como objetivo desarrollar un sistema de registro de clientes para una veterinaria, proporcionando una interfaz web amigable para gestionar la información de los clientes y sus mascotas. La aplicación permite registrar, modificar, consultar y eliminar datos, tanto de los clientes como de sus mascotas, utilizando una base de datos SQL para el almacenamiento de información.

## Tabla de Contenidos

- [Características](#características)
- [Tecnologías Utilizadas](#tecnologías-utilizadas)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Instalación y Configuración](#instalación-y-configuración)
- [Uso](#uso)
- [Autores](#autores)

## Características

- **Registro de clientes:** Alta, modificación, consulta y eliminación de clientes.
- **Gestión de mascotas:** Registrar múltiples mascotas por cliente, con su respectiva información (nombre, especie, raza, edad, historial médico).
- **Interfaz amigable:** Diseño intuitivo y adaptado para un fácil uso por el personal de la veterinaria.
- **Seguridad básica:** Validación de entradas y protección contra SQL Injection.
- **Base de datos relacional:** Uso de SQL para gestionar la información.
- **Back-end con PHP:** Interacción entre la base de datos y el cliente a través de PHP.
- **Frontend interactivo:** Usando HTML, CSS y JavaScript para crear una interfaz de usuario atractiva y funcional.

## Tecnologías Utilizadas

- **Frontend:**
  - HTML5
  - CSS3
  - JavaScript

- **Backend:**
  - PHP

- **Base de datos:**
  - MySQL / MariaDB (SQL)

## Estructura del Proyecto

```bash
📂 veterinaria-clientes/
│
├── 📁 public/                # Archivos públicos accesibles desde la web
│   ├── 📁 css/               # Estilos CSS
│   ├── 📁 js/                # Scripts JavaScript
│   └── 📄 index.html         # Página principal del registro
│
├── 📁 src/                   # Código fuente del lado del servidor
│   ├── 📄 conexion.php       # Conexión a la base de datos
│   ├── 📄 registro.php       # Lógica del registro de clientes
│   └── 📄 mascotas.php       # Gestión de mascotas
│
├── 📁 db/                    # Archivos relacionados con la base de datos
│   └── 📄 esquema.sql        # Script de creación de la base de datos
│
├── 📄 README.md              # Documentación del proyecto
└── 📄 .gitignore             # Archivos a ignorar en Git
