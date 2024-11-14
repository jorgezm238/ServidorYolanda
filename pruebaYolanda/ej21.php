<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $respuesta_usuario = intval($_POST['respuesta']);
    $numero_decimal = $_SESSION['numero_decimal'];

    if ($respuesta_usuario === $numero_decimal) {
        echo "<h2>Respuesta acertada, el número es $numero_decimal</h2>";
    } else {
        echo "<h2>Has fallado, vuelve a jugar</h2>";
    }
}
?>
<a href="ejercicio2.php">VOLVER A JUGAR</a>
