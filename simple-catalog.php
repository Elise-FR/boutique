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

</body>
</html>