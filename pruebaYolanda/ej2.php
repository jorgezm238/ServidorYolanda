<?php
session_start();


$binario = str_pad(decbin(rand(0, 15)));
$decimal = bindec($binario);
$_SESSION['numero_decimal'] = $decimal;  


function mostrarCartas($binario) {
    $cartas = '';
    for ($i = 0; $i < 4; $i++) {
        
    return $cartas;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina el número en decimal</title>
</head>
<body>
    <h1>Adivina el número en decimal</h1>
    <p>El número en BINARIO: <?php echo $binario; ?></p>
    <div>
        <?php echo mostrarCartas($binario); ?>
    </div>
    <form action="ej21.php" method="POST">
        <label for="respuesta">Número decimal:</label>
        <input type="number" name="respuesta" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
