<html>
    <head></head>
    <body>



<?php 
$products = ["roue", "planche","stickers"];

?>


<?php
$first_product = reset($products);
$last_product = end($products);
sort($products);
echo "<br/>";
echo "My first product is $first_product <br/>";
echo "My last product is $last_product";

?>

<ls>
    <li><?php echo $products[0]?></li> 
    <li><?php echo $products[1]?></li>
    <li><?php echo $products[2]?></li>
</ls>

<p> Affichage des produits avec la boucle While :</p>

<?php 

$index =0;

while ($index < count($products) ) {
    $product = $products[$index];
    $index += 1;
    echo "Affichage du produit : " . $product . "<br/>";
}

?>

<p> Affichage des produits avec la boucle Do While :</p>

<?php 

$index =0;

do {
    $product = $products[$index];
    $index ++;
    echo "Affichage du produit: " . $product . "<br/>";

} while ($index < count($products) );


?>

<p> Affichage des produits avec la boucle For :</p>

<?php 

$i =0;

for($i; $i<count($products); $i++) {

    $product = $products[$i];

    echo "Affichage du produit : " . $product . "<br/>";
}

?>

<p> Affichage des produits avec la boucle Foreach :</p>

<?php 

foreach($products as $value) {
    echo "Affichage du produit : " . $value . "<br/>";
}

?>





</body>
</html>