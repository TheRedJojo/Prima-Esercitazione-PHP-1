<?php
$a = 10;
$b = 5;

$prodotto = 0; //Definisco la variabile fuori dal for

// Sommiamo $a a se stessa per $b volte
for ($i = 0; $i < $b; $i++) {
    $prodotto += $a;
}

echo "Prodotto iterativo ($a * $b): " . $prodotto . "<br>";
?>