<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión a Binario</title>
</head>
<body>
    <form action="ej1.php" method="POST">
        <table>
        <?php 
        $filas= 3;
        $columnas=2;

        for ($i=0; $i <$filas ; $i++) { 
            echo "<tr>";
            for ($j=0; $j <$columnas ; $j++) { 
                $indice = ($i * $columnas) + $j + 1;
                echo"<td>E.$i.$j</td>";
                echo"<td><input type 'text' name ='va   lor$indice'/></td>";

            }
                echo"</tr>";
        }
        
        
        ?>    
        

    <!-- 
 
            <tr>
                <td>E.0.0</td>
                <td><input type="text" name="valor1" /></td>
                <td>E.0.1</td>
                <td><input type="text" name="valor2" /></td>
            </tr>
            <tr>
                <td>E.1.0</td>
                <td><input type="text" name="valor3" /></td>
                <td>E.1.1</td>
                <td><input type="text" name="valor4" /></td>
            </tr>
            <tr>
                <td>E.2.0</td>
                <td><input type="text" name="valor5" /></td>
                <td>E.2.1</td>
                <td><input type="text" name="valor6" /></td>
            </tr>-->
        </table>
        <br>
        <input type="submit" name="calcular" value="Calcular">
    </form>
</body>

</html>
