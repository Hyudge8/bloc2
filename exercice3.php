<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<hr>";

$stock = 5;

while ($stock > 0) {
    $stock--;
    echo "Ordinateur vendu. Stock restant : " . $stock . "<br>";
}

?>