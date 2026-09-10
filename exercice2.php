<?php 

$prix = 120; 

if ($prix < 50) {
    echo "Réduction : 0 %";
} 

if ($prix >= 50 && $prix <= 100) {
    echo "Réduction : 5 %";
}

if ($prix < 100) {
    echo "Réduction : 10 %";
}
