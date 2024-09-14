$(document).ready(function() {
    $('#form-agregar-paciente').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'functions.php',
            data: $(this).serialize() + '&action=agregar_paciente',
            success: function(response) {
                alert(response);
            }
        });
    });

    $('#btn-buscar').on('click', function() {
        var nombre = $('#buscar-nombre').val();
        $.ajax({
            type: 'POST',
            url: 'functions.php',
            data: { nombre: nombre, action: 'buscar_paciente' },
            success: function(response) {
                var pacientes = JSON.parse(response);
                $('#resultados-pacientes').empty();
                pacientes.forEach(function(paciente) {
                    $('#resultados-pacientes').append('<div>' + paciente.nombre + ' - ' + paciente.especie + '</div>');
                });
            }
        });
    }); 
});
 