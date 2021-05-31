<html>

<head>

    <?php include("header.php"); ?>

</head>


<?php include("my-functions.php");
include("products.php"); ?>

<?php

$prixtotalttc = (int) $_POST["price_d"] * (int) $_POST["quantite"];
$prixtotalht = priceExcludingVAT($prixtotalttc);
$tva = $prixtotalttc - $prixtotalht;
$weightcolis = $_POST['weight'] * $_POST["quantite"];
$total_fp = $prixtotalttc + fraisDePort($weightcolis, $prixtotalttc);

?>

<table class="table table-hover">

    <tr>

        <th>Nom du produit</th>
        <th>Prix du produit unitaire TTC</th>
        <th>Prix remisé TTC</th>
        <th>Quantité</th>
        <th>Poids</th>
        <th>Total HT</th>
        <th>Valeur TVA</th>
        <th>Total TTC</th>


    </tr>

    <td> <?php echo $_POST['name'] ?></td>
    <td><?php echo $_POST["price"] . "€" ?></td>
    <td><?php echo $_POST["price_d"] . "€" ?></td>
    <td><?php echo $_POST["quantite"] ?></td>
    <td><?php echo $weightcolis . "g" ?></td>
    <td><?php echo $prixtotalht . "€" ?> </td>
    <td><?php echo $tva . "€" ?> </td>
    <td><?php echo $prixtotalttc . "€" ?> </td>


</table>

<table class="table table-hover">


    <tr>
        <th>Transporteur</th>
        <th>Frais de port</th>
        <th>Total après frais de port</th>

    </tr>

    <td>
        <form method="post" action="cart.php"> <select type="text" name="transporteur">
                <option value="">Je choisis mon transporteur</option>
                <option value="0">La Poste</option>
                <option value="1">Géodis</option>
                <input type="hidden" name="name" value="<?php echo $_POST['name'] ?>" />
                <input type="hidden" name="price" value="<?php echo formatPrice($_POST['price']) ?>" />
                <input type="hidden" name="price_d" value="<?php echo $_POST["price_d"] ?>" />
                <input type="hidden" name="weight" value="<?php echo $_POST['weight'] ?>" />
                <input type="hidden" name="quantite" value=" <?php echo $_POST["quantite"] ?>" />
                <input type="submit" class="btn btn-primary" id="envoyer" name="valider" value="valider">
        </form>


    </td>
    <td> <?php echo fraisDePort($weightcolis, $prixtotalttc) . "€" ?> </td>
    <td> <?php echo $total_fp . "€" ?> </td>
    <td><?php echo $_POST["transporteur"] ?>
    

</table>

<?php
include("footer.php");
?>

</body>

</html>