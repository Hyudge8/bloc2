<?php

$produits = [
    "Clavier" => 49.90,
    "Souris" => 29.90,
    "Écran" => 189.90,
    "Webcam" => 79.90
];

// 1. Afficher tous les produits et leur prix

foreach ($produits as $produit => $prix) {
    echo $produit . " : " . $prix . " €<br>";
}

echo "<hr>";

// 2. Afficher uniquement les produits coûtant plus de 50 €

foreach ($produits as $produit => $prix) {
    if ($prix > 50) {
        echo $produit . " : " . $prix . " €<br>";
    }
}

echo "<hr>";

// 3. Compter le nombre de produits

$nombreProduits = 0;

foreach ($produits as $produit => $prix) {
    $nombreProduits++;
}

echo "Nombre de produits : " . $nombreProduits;

?>