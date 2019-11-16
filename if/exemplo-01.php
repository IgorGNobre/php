<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

	echo "É criança";

} elseif ($qualASuaIdade < $idadeMaior) {

	echo "Adolescente";

} elseif ($qualASuaIdade < $idadeMelhor) {

	echo "É adulto";

} else {

	echo "É idoso";

}

echo "<br/>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>