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


/*Fontction qui m'affiche les produits avec une quantité = 0*/

function productsWithQuantityNull() {

    $bdd = accessbdd();

    $query_2 = 'SELECT `products` . `name`, `products` . `quantity` FROM `products` WHERE `products` . `quantity` = 0';
    return queryproducts($query_2);

}

/*Fonction qui m'affiche le total de chaque commande*/

function totalorders()
{
    $bdd = accessbdd();

    $query_6 = 'SELECT orders.number, sum(order_product.quantity * products.price) AS totalPrice
FROM orders
INNER JOIN order_product ON orders.id = order_product.order_id
INNER JOIN products ON products.id = order_product.product_id
GROUP BY orders.number';
return queryproducts($query_6); 
}
?>


<?php

/*Fontction qui m'affiche chaque commande et son total d'un client spécifique*/

function ordersForOneCustomer()
{

    $bdd = accessbdd();
    $query_9 = 'SELECT orders.number, sum(order_product.quantity * products.price) AS totalPrice, customers.first_name
    FROM orders
    INNER JOIN order_product ON orders.id = order_product.order_id
    INNER JOIN products ON products.id = order_product.product_id
    INNER JOIN customers ON customers.id = orders.customer_id
    WHERE customers.first_name = \'Charlize\'
    GROUP BY orders.number';
    return queryproducts($query_9);

} ?>

  