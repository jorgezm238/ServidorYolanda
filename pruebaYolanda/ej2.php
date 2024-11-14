<?php
session_start();

// Generar un número binario de 4 dígitos y calcular su valor decimal
$binario = str_pad(decbin(rand(0, 15)), 4, '0', STR_PAD_LEFT);
$decimal = bindec($binario);
$_SESSION['numero_decimal'] = $decimal;  // Guardar el valor decimal en la sesión

// Representación gráfica de las cartas según el número binario
function mostrarCartas($binario) {
    $cartas = '';
    for ($i = 0; $i < 4; $i++) {
        $cartas .= ($binario[$i] == '1') ? "<img src='carta.png' alt='Carta' width='50'>" : "<div style='width:50px;height:75px;background:black;display:inline-block;'></div>";
    }
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
