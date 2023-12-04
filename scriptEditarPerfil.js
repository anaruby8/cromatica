// Obtén el modal
var modal = document.getElementById("modalConfirmacion");
// Obtén el botón que abre el modal
var botonGuardar = document.querySelector("button[type='submit']");
// Obtén el elemento <span> que cierra el modal
var span = document.getElementsByClassName("close")[0];
// Cuando el usuario haga clic en el botón, abre el modal
botonGuardar.onclick = function(event) {
    event.preventDefault(); // Previene el envío del formulario
    modal.style.display = "block";
}
// Cuando el usuario haga clic en <span> (x), cierra el modal
span.onclick = function() {
    modal.style.display = "none";
}
// Cuando el usuario haga clic fuera del modal, cierra el modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Función para validar el formulario
function validarFormulario() {
        var nombre = document.getElementById('nombre').value;
        var apellidos = document.getElementById('apellidos').value;
        var nombreVisible = document.getElementById('nombre-visible').value;
        var correo = document.getElementById('correo').value;
        var mensajeError = document.getElementById('mensajeError');

        if (nombre === '' || apellidos === '' || nombreVisible === '' || correo === '') {
            mensajeError.textContent = 'Por favor, completa todos los campos obligatorios.';
            return false;
        }

        mensajeError.textContent = '';
        return true;
    }

    // Modificar la función onclick del botón Guardar
    botonGuardar.onclick = function(event) {
        event.preventDefault(); // Previene el envío del formulario

        // Validar el formulario antes de mostrar el modal
        if (validarFormulario()) {
            modal.style.display = "block";
        }
    };