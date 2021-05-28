<?php include ("my-functions.php") ?>

<?php

$prixtotalttc = $_POST["price"]*$_POST["choice"];
$prixtotalht = priceExcludingVAT($prixtotalttc);
$tva = $prixtotalttc - $prixtotalht;

echo "le nom du produit : " . $_POST["name"] . "<br>";
echo "le Prix du produit unitaire TTC :" . $_POST["price"] . "€" . "<br>";
echo "le Prix remisé est de : ". $_POST["price_d"] . "€" . "<br>";
echo "la quantité demandée est de : " . $_POST["choice"] . "<br>";
echo "Total HT : " . $prixtotalht. "€". "<br>";
echo "Valeur de la TVA : " . $tva . "€" . "<br>";
echo "Total TTC: " .  $prixtotalttc . "€". "<br>" ;
        


//var_dump($_POST);


?>