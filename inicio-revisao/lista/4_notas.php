<?php

$notas = [7, 8, 6, 9, 10];

$soma = 0;
$maior = $notas[0];
$menor = $notas[0];

foreach ($notas as $nota) {
    echo "Nota: " . $nota . "<br>";

    $soma = $soma + $nota;

    if ($nota > $maior) {
        $maior = $nota;
    }

    if ($nota < $menor) {
        $menor = $nota;
    }
}

$media = $soma / 5;

echo "<br>Média da turma: " . $media;
echo "<br>Maior nota: " . $maior;
echo "<br>Menor nota: " . $menor;
