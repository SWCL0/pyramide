<?php

// Opvragen stapels gebruiker
echo "Hoeveel stapels wil je hebben?" . PHP_EOL;
$stapel = readline();

// Berekenen buitenste loop
for ($i = 1; $i <= $stapel; $i++) {
    // Berekenen binnenste loop
    for ($j = 1; $j <= $i; $j++) {
        // Print * in 1 laag
        echo "* ";
    }
    // Volgende laag
    echo "" . PHP_EOL;
}

?>