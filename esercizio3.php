<?php
$a = 20;
$b = 3;

// Salviamo il valore iniziale del dividendo per stampare un riepilogo
$dividendo = $a; 

$quoziente = 0;

// Continuiamo a sottrarre $b da $a finché $a è maggiore o uguale a $b
while ($a >= $b) {
    $a -= $b;     // Sottrae $b da $a
    $quoziente++; // Incrementa il quoziente di 1 ad ogni sottrazione
}

// Ciò che rimane in $a rappresenta il resto della divisione
$resto = $a;

echo "Divisione tra $dividendo e $b:<br>";
echo "Quoziente = " . $quoziente . "<br>";
echo "Resto = " . $resto . "<br>";
?>