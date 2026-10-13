<?php
// Definisco le variabili
$a = 10;
$b = 1;
$c = 3;
$d = 12;

// Somma
$somma = $a + $b + $c + $d;
echo "Somma: " . $somma . "<br>";

// Media
$media = $somma / 4;
echo "Media: " . $media . "<br>";

// Valore mediano
// Mettiamo i valori in un array e li ordiniamo in modo crescente
$valori = [$a, $b, $c, $d];
sort($valori); // Ora è: [1, 3, 10, 12]

// Avendo 4 elementi la mediana è la media dei due valori centrali (quindi 1 e 2)
$mediana = ($valori[1] + $valori[2]) / 2; // (3 + 10) / 2 = 6.5
echo "Mediana: " . $mediana . "<br>";
?>