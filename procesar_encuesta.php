<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = $_POST['respuesta'];
    if ($respuesta == 'no') {
        header("Location: sugerencias.html");
        exit();
    } else {
        echo "<script>alert('¡Gracias por tu respuesta!'); window.location.href = 'index.html';</script>";
    }
}
?>
