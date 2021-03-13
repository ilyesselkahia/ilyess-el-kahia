<?php
$rand = rand(1, 100);
for ($count = 1; $count <= 9; $count++) {
    if ($count <= 8) {
        $number = readline("Entrer un nombre \n");

        if ($number == $rand) {
            echo "Vous avez gagné!!! \n";
            break;
        } elseif ($number < $rand) {
            echo "Entrer une plus grande valeur! \n";
        } elseif ($number > $rand) {
            echo "Entrer une plus petite valeur! \n";
        }
    }
}
