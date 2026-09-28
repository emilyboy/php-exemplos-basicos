<?php

$preco = 45.00;
$quantidade = 10;

$total = $preco * $quantidade;

if ($total >= 200) {
    $desconto = $total * 0.10;
    $valorFinal = $total - $desconto;
} else {
    $valorFinal = $total;
}

echo "Valor total da compra: R$ $total <br>";
echo "Desconto: R$ $desconto <br>";
echo "Valor final da compra: R$ " . $valorFinal;

?>