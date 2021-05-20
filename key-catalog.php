<html>
    <head>
    <link href="style-key.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

    <?php 

include("header.php");
$products = ["roue", "planche","stickers"];

$roue = [
    "name" => "Roue",
    "price" => 1500,
    "weight" => 30,
    "discount" => 10,
    "picture" => "https://contents.mediadecathlon.com/p1355730/k$371708ed2db30f5c19bdef6a5e08cf51/sq/4-roues-longboard-ou-cruiser-70mm-78a-vert-fonce.jpg?format=auto&f=800x0",
];

$planche = [
    "name" => "planche",
    "price" => 17900,
    "weight" => 980,
    "discount" => 15,
    "picture" => "https://cdn.shopify.com/s/files/1/0040/7807/6033/products/I-Grande-95593-longboard-globe-blazer-xl-coconut-lime-36.net_250x250@2x.jpg?v=1612965566",
];

$stickers = [
    "name" => "stickers",
    "price" => 500,
    "weight" => 2,
    "discount" => 5,
    "picture" => "https://ih1.redbubble.net/image.208544014.1894/st,small,507x507-pad,600x600,f8f8f8.u2.jpg",
];



?>


<table>
    <tr>
       <p>gitArticle: <?php echo $roue['name'] ?></p>
       <p>Price: <?php echo $roue ['price'] ?>euros </p> 
        <p>Weight: <?php echo $roue ['weight'] ?>grammes </p>
        <p>Discount: <?php echo $roue ['discount'] ?>%</p>
       <img src='<?php echo $roue ['picture'] ?> ' />
    </tr>
</table>

<table>
    <tr>
       <p>Article: <?php echo $planche['name'] ?></p>
       <p>Price: <?php echo $planche ['price'] ?>euros </p> 
        <p>Weight: <?php echo $planche ['weight'] ?>grammes </p>
        <p>Discount: <?php echo $planche ['discount'] ?>%</p>
     <img src='<?php echo $planche ['picture'] ?> ' />
    </tr>
</table>

<table>
    <tr>
       <p>Article: <?php echo $stickers['name'] ?></p>
       <p>Price: <?php echo $stickers ['price'] ?>euros </p> 
        <p>Weight: <?php echo $stickers ['weight'] ?>grammes </p>
        <p>Discount: <?php echo $stickers ['discount'] ?>%</p>
        <img src='<?php echo $stickers ['picture'] ?> ' />
    </tr>
</table>
<?php 
include("footer.php");
?>
    </body>
</html>