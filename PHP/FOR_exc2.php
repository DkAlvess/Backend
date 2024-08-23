<?php
//denominar uma variavel para armazenar o valor.
$numero1 = 0;
for ($i = 1; $i <= 50; $i++) {
    $numero1 = sqrt($i); 
    $arredondado = round ($numero1,2);
    echo "resultado igual a $arredondado <br>";
} 
?>