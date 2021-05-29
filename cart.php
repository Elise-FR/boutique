<html>

<head>

<?php include("header.php"); ?>

</head>


<?php include("my-functions.php") ?>

<?php

$prixtotalttc = $_POST["price_d"] * $_POST["quantite"];
$prixtotalht = priceExcludingVAT($prixtotalttc);
$tva = $prixtotalttc - $prixtotalht;
$weightcolis = $_POST['weight']*$_POST["quantite"];

?>

<table class = "table table-hover">

    <tr>

        <th>Nom du produit</th>
        <th>Prix du produit unitaire TTC</th>
        <th>Prix remisé TTC</th>
        <th>Quantité</th>
        <th>Poids</th>
        <th>Total HT</th>
        <th>Valeur TVA</th>
        <th>Total TTC</th>
        <th>Transporteur</th>

    </tr>


    <td> <?php echo $_POST["name"] ?></td>
    <td><?php echo $_POST["price"] . "€" ?></td>
    <td><?php echo $_POST["price_d"] . "€" ?></td>
    <td><?php echo $_POST["quantite"] ?></td>
    <td><?php echo $weightcolis . "g" ?></td>
    <td><?php echo $prixtotalht . "€" ?> </td>
    <td><?php echo $tva . "€" ?> </td>
    <td><?php echo $prixtotalttc . "€" ?> </td>
    <td><?php echo $_POST["transporteur"] ?> </td>



</table>

<?php
    include("footer.php");
    ?>

</body>

</html>