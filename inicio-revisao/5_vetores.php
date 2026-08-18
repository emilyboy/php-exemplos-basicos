<?php

//Vetor (array simples)
$frutas = ["Maça", "Banana","Uva"];

// Exibindo (Usando laço)
foreach ($frutas as $indice => $fruta ) {
    echo "Posição $indice: $fruta<br>";
}

// Matriz (array completo "Linhas e colunas)
$matriz = [
    ["Max Verstappen", "Lando Norris", "Ocar piastre"],
    ["Charles Leclerc",  "Lewis Hamilton","George Russell"],
    ["Fernando Alonso", "Kimi Antoneli", "Ayrton Senna"]
];

// Exibindo nome dos pilotos
echo "<br><br>";
echo "Melhores pilotos da F1: <br><br>";
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";
    };
    echo "<br>";
}