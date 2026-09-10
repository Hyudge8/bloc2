<?php

$produits = [
    "Clavier" => 49.90,
    "Souris" => 29.90,
    "Écran" => 189.90,
    "Webcam" => 79.90
];


foreach ($produits as $produit => $prix) {
    echo $produit . " : " . $prix . " €<br>";
}

echo "<hr>";


foreach ($produits as $produit => $prix) {
    if ($prix > 50) {
        echo $produit . " : " . $prix . " €<br>";
    }
}

echo "<hr>";


$nombreProduits = 0;

foreach ($produits as $produit => $prix) {
    $nombreProduits++;
}

echo "Nombre de produits : " . $nombreProduits;

?>