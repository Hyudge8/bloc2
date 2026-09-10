<?php

function calculerTTC(float $prixHT): float
{
    return $prixHT * 1.20;
}

function calculerRemise(float $prix, float $remise): float
{
    return $prix * (1 - $remise);
}

echo calculerTTC(100);

echo "</br>";

echo calculerRemise(200, 0.10);

?>