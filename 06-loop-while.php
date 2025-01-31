<?php
/*Loop WHILE(ENQUANTO) */

// Exemplo 1: Contagem de 1 até 10

//$contador = 1; //variável de controle da iteração/repetição

//while ($contador <=10) {
	//echo $contador."\n";
	//$contador = $contador + 1;
	//$contador ++; // operador de incremento ++
//}

// Exemplo 1: contagem de 1 até 10
//$i = 1; //variável de controle da iteração/repetição

//while ($i <= 10) {
	//echo $i."\n";
	//$i = $i +1;
	//$i++; // operador de incremento ++
//}

//echo "\n\n";

// Exemplo 2: obter/exibir nome e idade de 3 pessoas
$contador = 1

while($contador <= 3) {
	//Entradas
	$nome = readline("Nome: ");
	$idade = readline("Idade: ");
	$contador++;

	//Saídas
	echo"\n";
	echo $nome." tem ".$idade," anos. \n\n";
	
	$contador++;
}