<?php

$semestre1 = 5;
$semestre2 = 10;
$media = ( $semestre1 + $semestre2 ) / 2;

echo "1 semestre: " . $semestre1 . '<br>';
echo "2 semestre: " . $semestre2 . '<br>';

if ($media >= 7){
    echo 'Você foi aprovado';
}else{
    echo 'Você foi reprovado';
}

?>