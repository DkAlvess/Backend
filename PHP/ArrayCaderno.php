<?php

$cadastro = [];
$cadastro ['nome'] = ['adriel', 'miguel', 'felipe', 'pablo', 'guilherme'];
$cadastro ['email'] = ['adriel@gmail.com', 'miguel@gmail.com', 'felipe@gmail.com', 'pablo@gmail.com', 'guilherme@gmail.com'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo $cadastro ['nome'] [2];
echo '<br>';
echo $cadastro ['email'] [3];

echo '<hr>';

$cadastro['nome'] [1] = 'senai';
$cadastro['email'] [0] = 'aluno@senai.br';

echo '<pre>';
print_r($cadastro);
echo '</pre>';



?>