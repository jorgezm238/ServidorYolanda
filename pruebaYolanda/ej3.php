<?php
session_start();

if (!isset($_SESSION['numero_secreto'])) {
   $_SESSION['numero_secreto'] = rand(1, 100);
   $_SESSION['intentos'] = 0;
}

$mensaje = "";
if (isset($_POST['numero'])) {
   $numero_jugador = (int)$_POST['numero'];
   $_SESSION['intentos']++;

   if ($numero_jugador > $_SESSION['numero_secreto']) {
       $mensaje = "Tu número es: $numero_jugador. Mi número es MENOR.";
   } elseif ($numero_jugador < $_SESSION['numero_secreto']) {
       $mensaje = "Tu número es: $numero_jugador. Mi número es MAYOR.";
   } else {

       $mensaje = "ENHORABUENA, HAS ACERTADO, Has necesitado {$_SESSION['intentos']} intentos.";

       session_unset();
       session_destroy();
   }
} else {
   $mensaje = "Introduce un número entre 1 y 100 para comenzar a jugar.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Juego del Número Secreto</title>
</head>
<body>
<h1>Juego del Número Secreto</h1>
<p><?php echo $mensaje; ?></p>
<form method="post" action="">
<label for="numero">Adivina mi número:</label>
<input type="number" name="numero" id="numero" min="1" max="100" required>
<button type="submit">Enviar</button>
</form>
<?php if (isset($_SESSION['numero_secreto']) && isset($_SESSION['intentos'])): ?>
<p>Intentos: <?php echo $_SESSION['intentos']; ?></p>
<?php endif; ?>
</body>
</html>