<?php
// Entradas interativa usando readline() [apenas CLI]
$produto = readline("Informe o produto: ");
$precoInicial = readline("Preço inicial: ");
$desconto = readline("Desconto em reais: ");

// Processamento
$precoFinal = $precoInicial - $desconto;

// Saída concatenada [O preço final é: valor]
echo "O preço final é: ".$precoFinal;