<?php
try{

    function accessbdd() {
return $bdd = new PDO('mysql:host=localhost;dbname=boutique_ilot3;charset=utf8', 'Elise', 'Campus.N!');

}
}

catch (exception $e) {
    die('Erreur : ' . $e->getMessage());
} ?>


<?php

function listingproducts() {

    $bdd = accessbdd();

$query_1 = $bdd-> query('SELECT * 
FROM products');

while($donnees = $query_1 ->fetch()) {
    
echo $donnees['name'];
echo $donnees['description']; 
echo $donnees['price']; 
echo $donnees['quantity'];   
}
$query_1->closeCursor(); 

} ?> 





