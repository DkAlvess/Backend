<?php

//criar a sequencia de numeros.
$numero = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
//função para fazer exibição da troca e da lista.
echo '<pre>';
print_r ($numero);
//exibir os valores que vão ser alterados.
echo "<br>";
echo $numero[4];
echo "<br>";
echo $numero[9];
echo "<br>";
//realiza a troca dos numeros.
$numero[0] = 100;
$numero[4] = 500;
$numero[9] = 1000;
//exibir a lista alterada.
echo '<hr>';
echo 'lista pronta e atualizada a baixo <br>';
print_r ($numero);
//exibe os numeros trocados.
echo $numero[0];
echo "<br>";
echo $numero[4];
echo "<br>";
echo $numero[9];
echo '</pre>';

?>