<?php
function triangle($nbLignes) {

    for ($i = 1; $i <= $nbLignes; $i++) {

        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
echo triangle(10)

?>

