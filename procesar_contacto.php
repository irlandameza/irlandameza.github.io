<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simular el envío del formulario
    // Aquí puedes agregar el código para enviar el correo si lo necesitas

    // Redirigir a la misma página para borrar los datos del formulario
    header("Location: contacto.html");
    exit();
}
?>
