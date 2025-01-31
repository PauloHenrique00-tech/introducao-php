<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays (Vetores e Matrizes)</title>
</head>
<body>
    <h1>Trabalhando com arrays</h1>
    <hr>

    <h2>Arrays númericos/indexados</h2>
<?php
// Sintaxe com colchetes
$bandas = ["Savatage", "Rush", "Slayer"];

// Sintaxe com a função array()
$cursos = array("HTML5", "Node.js", "PHP", "SQL");

// Sintaxe de atribuição manual usando os índices
$comidas[0] = "Bolinho de Bacalhau";
$comidas[1] = "Pastel";
$comidas[2] = "Coxinha";

// Constantes de array
define("UNIDADES", ["Penha", "Tatuapé"]);
const FRUTAS = ["Morango", "Abacaxi"];
?>

    <h3>Acessando os dados</h3>
    <ul>
        <li>Banda que mais curto: <?=$bandas[1]?></li>
        <li>Em breve vou lançar um curso de <?=$cursos[2]?></li>
        <li>Quero comer <?=$comidas[0]?></li>
        <li>Estamos no Senac <?=UNIDADES[0]?></li>
        <li>Vou fazer uma vitamina de <?=FRUTAS[1]?></li>
    </ul>

    <h2>Arrays associativos</h2>
</body>
</html>