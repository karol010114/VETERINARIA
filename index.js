
const btnNuevaDescripcion = document.getElementById('btndescripcion');
const notas = document.getElementById('notas');

#Eventoparaagregarnuevasnotascuandoehaceclicenelotón
btnNuevaDescripcion.addEventListener('click', () => {
    // Crear un nuevo contenedor para la nota
    const nuevaNota = document.createElement('div');
    nuevaNota.style.marginTop = "10px";  // Espacio entre notas
    nuevaNota.style.border = "1px solid #ccc";
    nuevaNota.style.padding = "10px";
    nuevaNota.style.borderRadius = "5px";
    nuevaNota.style.backgroundColor = "#f9f9f9";

    // Crear el área de texto para la nueva nota
    const textArea = document.createElement('textarea');
    textArea.placeholder = 'Escribe la descripción de esta visita';
    textArea.style.width = '100%';  // Ocupa todo el ancho del contenedor
    textArea.style.height = '100px';  // Altura predeterminada

    // Crear el campo de fecha para la visita del cliente
    const fechaVisitaLabel = document.createElement('label');
    fechaVisitaLabel.textContent = 'Fecha de visita: ';
    const fechaVisita = document.createElement('input');
    fechaVisita.type = 'date';
    fechaVisita.required = true;

    // Botón para guardar la nota
    const btnGuardar = document.createElement('button');
    btnGuardar.textContent = 'Guardar';
    btnGuardar.type = 'button';  // El botón no envía el formulario

    // Botón para eliminar la nota
    const btnEliminar = document.createElement('button');
    btnEliminar.textContent = 'Eliminar nota';
    btnEliminar.type = 'button';  // El botón no envía el formulario

    // Evento para el botón de guardar
    btnGuardar.addEventListener('click', () => {
        if (textArea.value.trim() && fechaVisita.value) {
            // Si hay texto y fecha, la nota se guarda
            textArea.disabled = true;  // Deshabilita el campo de texto una vez guardado
            fechaVisita.disabled = true;  // Deshabilita la selección de fecha
            btnGuardar.disabled = true;  // Deshabilita el botón de guardar
            btnGuardar.textContent = 'Guardado';
        } else {
            alert('Por favor, escribe una descripción y selecciona una fecha antes de guardar.');
        }
    });

    // Evento para eliminar la nota
    btnEliminar.addEventListener('click', () => {
        notas.removeChild(nuevaNota);  // Elimina la nota del contenedor
    });

    // Agregar el área de texto, la fecha y los botones al contenedor de la nueva nota
    nuevaNota.appendChild(textArea);
    nuevaNota.appendChild(fechaVisitaLabel);
    nuevaNota.appendChild(fechaVisita);
    nuevaNota.appendChild(btnGuardar);
    nuevaNota.appendChild(btnEliminar);

    // Agregar la nueva nota al contenedor de notas
    notas.appendChild(nuevaNota);
});
