<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los valores de los campos
    $valores = [
        $_POST['valor1'], $_POST['valor2'], $_POST['valor3'],
        $_POST['valor4'], $_POST['valor5'], $_POST['valor6']
    ];

    $resultado = [];  // Array para almacenar resultados en binario
    $valido = true;   // validar que todos los valores están entre 1 y 100

    foreach ($valores as $valor) {
        if (is_numeric($valor) && $valor >= 1 && $valor <= 100) {
            $resultado[] = [
                'decimal' => $valor,
                'binario' => decbin($valor)
            ];
        } else {
            $valido = false;
            break;
        }
    }

    if ($valido) {
        echo "<h3>Resultados en Binario:</h3>";
        echo "<table>";
        foreach ($resultado as $num) {
            echo "<tr><td>{$num['decimal']}</td><td>=</td><td>{$num['binario']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Por favor, ingrese valores numéricos entre 1 y 100.</p>";
    }
}
?>
