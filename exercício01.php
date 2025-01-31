<?php
//exercício01
//entrada
$curso = readline("Informe o nome do curso: ");
$cargaHoraria = readline ("Informe a carga horária: ");

//Processamento
$faltasPermitidas = $cargaHoraria * 0.25;

//Saída concatenada por partes
echo "\nCurso: ".curso."\n";
echo "\nCarga horária: ".$cargaHoraria."h";
echo "Limite de faltas: ".$faltasPermitidas."h /n";

//echo "O limite de faltas é: ".$faltasPermitidas;

// \n é usado para criar "quebras", ou "novas linhas" dentro de uma saída de texto.