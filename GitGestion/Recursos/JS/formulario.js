document.addEventListener("DOMContentLoaded", function () {
    const inputTelefono = document.getElementById('telefono');
    const inputPassword1 = document.getElementById('contrasena');
    const inputPassword2 = document.getElementById('rcontrasena');
    const form = document.getElementById('register');



    const validarTelefono = () => {
        inputTelefono.value = inputTelefono.value.replace(/\D/g, '');
    };
    
    const validarPassword2 = () => {
        if (inputPassword1.value !== inputPassword2.value) {
<<<<<<< HEAD
            // Contraseñas diferentes
            //console.log("Las contraseñas no coinciden");
            // Puedes realizar otras acciones, como mostrar un mensaje de error
            document.getElementById('msgUserExist').textContent = "Las contraseñas no coinciden";
        } else {
            // Contraseñas iguales
            //console.log("Las contraseñas coinciden");
            // Puedes realizar otras acciones, como limpiar el mensaje de error
=======
            document.getElementById('msgUserExist').textContent = "Las contraseñas no coinciden";
        } else {
>>>>>>> 7bccb22fe85db5a9fdecb77b4ed894dc799ed8b8
            document.getElementById('msgUserExist').textContent = "";
        }
    };

    inputTelefono.addEventListener('input', validarTelefono);
    inputPassword1.addEventListener('keyup', validarPassword2);
    inputPassword2.addEventListener('keyup', validarPassword2);
    inputPassword1.addEventListener('blur', validarPassword2);
    inputPassword2.addEventListener('blur', validarPassword2);

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        if (inputPassword1.value !== inputPassword2.value) {
<<<<<<< HEAD
            // Contraseñas diferentes, evita que se envíe el formulario
            //console.log("Las contraseñas no coinciden");
            document.getElementById('msgUserExist').textContent = "Las contraseñas no coinciden";
        } else {
            // Contraseñas iguales, puedes enviar el formulario
            //console.log("Las contraseñas coinciden");
=======
            document.getElementById('msgUserExist').textContent = "Las contraseñas no coinciden";
        } else {
>>>>>>> 7bccb22fe85db5a9fdecb77b4ed894dc799ed8b8
            document.getElementById('msgUserExist').textContent = "";
            form.submit();
        }
    });
});
