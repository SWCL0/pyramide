<?php

echo "Hoeveel stapels wil je hebben?" . PHP_EOL;
$stapel = readline();
for ($i = 1; $i <= $stapel; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "" . PHP_EOL;
}

?>