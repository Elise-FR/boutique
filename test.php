<html>

<head>

</head>



<body>

    <?php
    include("database.php");
    ?>
 <h3> Liste des produits :</h3>
    <?php
    foreach (listingproducts() as $products) { ?>

        <p><strong><?php echo $products['name'] ?> </strong> : <?php echo $products['description']; ?> </p>
        <p><?php echo $products['price']; ?> Centimes d'€ </p>
        <p>Quantité restante :<?php echo $products['quantity']; ?> </p>

    <?php } ?>

    <h3> Produits avec quantité nulle </h3>

    <?php

    foreach (productsWithQuantityNull() as $products) { ?>

        <p><strong><?php echo $products['name'] ?> </strong> </p>
        <p>Quantité restante :<?php echo $products['quantity']; ?> </p>
    <?php } ?>

    <h3> Total de chaque commande :</h3>

<?php 

foreach (totalorders() as $order) { ?>
<p><strong><?php echo $order['number'] ?> </strong></p>
<p><?php echo $order['totalPrice'] ?> € </p>

<?php } ?>

<h3> Liste des commandes et total du client Charlize :</h3>

    <?php 

    foreach(ordersForOneCustomer() as $orderscustomer) { ?>

        <p><strong><?php echo $orderscustomer['number'] ?> </strong></p>
        <p><?php echo $orderscustomer['totalPrice'] ?> €</p>
    <?php } ?>




</body>

</html>