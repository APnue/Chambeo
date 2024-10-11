document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('form').addEventListener('submit', function(event) {
        const contrasena = document.getElementById('contrasena').value;
        const confirmar_contrasena = document.getElementById('confirmar_contrasena').value;
        const email = document.getElementById('correo').value;

        if (contrasena !== confirmar_contrasena) {
            alert('Las contraseñas no coinciden.');
            event.preventDefault(); // Evitar el envío del formulario
            return;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Por favor, ingrese un correo válido.');
            event.preventDefault();
            return;
        }
        // Si todas las validaciones pasan, el formulario se enviará
    });
});
