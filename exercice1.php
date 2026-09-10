<?php 

$produit = "Ordinateur portable";
$prixHT = 750;

define("TVA", 0.20);

$prixTTC = $prixHT + ($prixHT * TVA);

echo $produit . "€ \n";
echo "Prix HT : " . $prixHT ."€ \n";
echo "Prix TTC : " . $prixTTC . " € \n";

?>