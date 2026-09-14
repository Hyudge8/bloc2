<?php

$nom = trim($_POST['nom']);

$nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');

echo "Bonjour " . $nom;

?>