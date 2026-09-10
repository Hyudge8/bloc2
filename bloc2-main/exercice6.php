<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $produit = $_POST["produit"];
    $prix = $_POST["prix"];
    $quantite = $_POST["quantite"];

    $total = $prix * $quantite;

    echo "Commande : " . $quantite . " x " . $produit . "<br>";
    echo "Prix total : " . $total . " €";
}

?>

<form method="post">

    <label>Produit :</label>
    <input type="text" name="produit">

    <br><br>

    <label>Prix :</label>
    <input type="number" name="prix">

    <br><br>

    <label>Quantité :</label>
    <input type="number" name="quantite">

    <br><br>

    <button type="submit">Valider</button>

</form>