<?php
try {

    function accessbdd()
    {
        return $bdd = new PDO('mysql:host=localhost;dbname=boutique_ilot3;charset=utf8', 'Elise', 'Campus.N!');
    }
} catch (exception $e) {
    die('Erreur : ' . $e->getMessage());
} 
    /* Cette fonction fait la requete en BDD */

function queryproducts($querytoexecute) {
    $bdd = accessbdd();
    $query = $bdd->query($querytoexecute);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);

}

/* Fonction qui liste mes produits */

function listingproducts () {

    $query_1= 'SELECT * FROM products';
    return queryproducts($query_1);
}

/* Fonction qui liste mes clients */

function listingclients () {

    $query_c= 'SELECT * FROM customers';
    return queryproducts($query_c);
}


/*Fontction qui m'affiche les produits avec une quantité = 0*/

function productsWithQuantityNull() {

    $query_2 = 'SELECT `products` . `name`, `products` . `quantity` FROM `products` WHERE `products` . `quantity` = 0';
    return queryproducts($query_2);

}

/*Fonction qui m'affiche le total de chaque commande*/

function totalorders()
{

    $query_6 = 'SELECT orders.number, sum(order_product.quantity * products.price) AS totalPrice
FROM orders
INNER JOIN order_product ON orders.id = order_product.order_id
INNER JOIN products ON products.id = order_product.product_id
GROUP BY orders.number';
return queryproducts($query_6); 
}
?>


<?php

/*Fonction qui m'affiche chaque commande et son total d'un client spécifique*/

function ordersForOneCustomer()
{

    $query_9 = 'SELECT orders.number, sum(order_product.quantity * products.price) AS totalPrice, customers.first_name
    FROM orders
    INNER JOIN order_product ON orders.id = order_product.order_id
    INNER JOIN products ON products.id = order_product.product_id
    INNER JOIN customers ON customers.id = orders.customer_id
    WHERE customers.first_name = \'Charlize\'
    GROUP BY orders.number';
    return queryproducts($query_9);

} ?>

<?php 
/*Fonction qui m'affiche l'ajout d'un article*/

function addOneProduct($name,$description,$price,$image,$weight,$quantity,$available,$category_id) {
    $bdd = accessbdd();
    $query_add = $bdd->prepare('INSERT INTO products (name, description, price, image, weight, quantity, available, category_id)
    VALUE (:name, :description, :price, :image, :weight, :quantity, :available, :category_id)');
    $query_add->execute(array(
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'image' => $image, 
        'weight' => $weight,
        'quantity' => $quantity,
        'available' => $available,
        'category_id' => $category_id, 


    ));

    echo "Le produit a bien été ajouté";
  
};
