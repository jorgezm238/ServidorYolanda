<?php

$seleccion = $_POST['edad'];
echo $seleccion. "<br>";

if ($seleccion == 'menor14') {
    echo "eres una personita";
} elseif ($seleccion == 'menor20') {
    echo "todavía eres muy joven";
} elseif ($seleccion == 'menor40') {
    echo "eres una persona joven";
} elseif ($seleccion == 'menor60') {
    echo "eres una persona madura";
} elseif ($seleccion == 'mas60') {
    echo "Ya eres una persona mayor";
} else {
    echo "Aún no me has dicho tu edad";
}



// FIN PROGRAMA
?>