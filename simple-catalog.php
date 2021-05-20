<html>
    <head></head>
    <body>
<?php 
$products = ["roue", "planche","stickers"];
$first_product = reset($products);
$last_product = end($products);
sort($products);
print_r($products);
echo "<br/>";
echo "My first product is $first_product <br/>";
echo "My last product is $last_product";



?>
</body>
</html>