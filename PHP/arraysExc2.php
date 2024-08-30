<?php

$cadastro = [];

$cadastro ['usuario'] = ['João', 'Maria', 'Pedro'];

$cadastro ['senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';
print_r ($cadastro);
echo '</pre>';

$cadastro ['usuario'] [1] = 'Ana';

$cadastro ['senha'] [1] = 'efgh';

echo '<hr>';

echo '<pre>';

echo 'Os itens a baixo foram alterados:';
echo "<br>";
echo $cadastro['usuario'] [1];
echo "<br>";
echo $cadastro['senha'] [1];
echo "<br>";
echo 'Tabela atualizada a baixo:';
echo "<br>";
print_r ($cadastro);

echo '</pre';

?>