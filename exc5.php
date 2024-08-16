<?php
//função para fazer a tabuada de um número.
function tabuada($numero) {
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";

    }
}

//chama a função
$numero = 2;
tabuada($numero);
?>