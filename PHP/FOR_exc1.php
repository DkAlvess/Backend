<?php
//denominar uma variavel para que o numero dela possa ser somado ao decorrer do codigo.
$numero1 = 0;
for ($i = 1; $i <= 100; $i++) {
    $numero1 = $i + $numero1; //a variavel se tornara o valor de i somado ao valor da variavel.
}
echo "O total é $numero1"
?>
