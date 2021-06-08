<?php
try {

    function accessbdd()
    {
        return $bdd = new PDO('mysql:host=localhost;dbname=boutique_ilot3;charset=utf8', 'Elise', 'Campus.N!');
    }
} catch (exception $e) {
    die('Erreur : ' . $e->getMessage());
} ?>


<?php

    /* Cette fonction fait la requete en BDD */

function queryproducts($querytoexecute) {
    $bdd = accessbdd();
    $query = $bdd->query($querytoexecute);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);

}

/* Fonction qui liste mes produits */

function listingproducts () {
    $bdd = accessbdd();
    $query_1= 'SELECT * FROM products';
    return queryproducts($query_1);
}


 ?> 




<?php


function detailsproducts()
{

    $bdd = accessbdd();

    $query_2 = $bdd->query('SELECT `products` . `name`, `products` . `quantity`
FROM `products`
WHERE `products` . `quantity` = 0');

    while ($donnees = $query_2->fetch()) {

        echo $donnees['name'];
        echo $donnees['quantity'];
    }
    $query_2->closeCursor();
} ?>

<?php

function totalorders()
{
    $bdd = accessbdd();

    $query_6 = $bdd->query('SELECT orders.number, sum(order_product.quantity * products.price) AS totalPrice
FROM orders
INNER JOIN order_product ON orders.id = order_product.order_id
INNER JOIN products ON products.id = order_product.product_id
GROUP BY orders.number');

    while ($donnees = $query_6->fetch()) {

        echo $donnees['number'];
        echo "<br>";
        echo $donnees['totalPrice'];
        echo "<br>";
    }

    echo "<br>";

    $query_6->closeCursor();
} ?>


<?php

function onecustomer()
{

    $bdd = accessbdd();
    $query_9 = $bdd->query('SELECT orders.number, sum(order_product.quantity * products.price) AS totalPrice, customers.first_name
    FROM orders
    INNER JOIN order_product ON orders.id = order_product.order_id
    INNER JOIN products ON products.id = order_product.product_id
    INNER JOIN customers ON customers.id = orders.customer_id
    WHERE customers.first_name = \'Charlize\'
    GROUP BY orders.number');

    while ($donnees = $query_9->fetch()) {
        echo $donnees['number'];
        echo "<br>";
        echo $donnees['totalPrice'];
        echo "<br>";
    }

    $query_9->closeCursor();
} ?>
