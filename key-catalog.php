<html>
    <head>
    <link href="style-key.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

    <?php 

include("header.php");
include("my-functions.php");

$products = ["roue", "planche","stickers"];

$roue = [
    "name" => "Roue",
    "price" => 15,
    "weight" => 30,
    "discount" => 10,
    "picture" => "https://contents.mediadecathlon.com/p1355730/k$371708ed2db30f5c19bdef6a5e08cf51/sq/4-roues-longboard-ou-cruiser-70mm-78a-vert-fonce.jpg?format=auto&f=800x0",
];

$planche = [
    "name" => "planche",
    "price" => 179,
    "weight" => 980,
    "discount" => 15,
    "picture" => "https://cdn.shopify.com/s/files/1/0040/7807/6033/products/I-Grande-95593-longboard-globe-blazer-xl-coconut-lime-36.net_250x250@2x.jpg?v=1612965566",
];

$stickers = [
    "name" => "stickers",
    "price" => 5,
    "weight" => 2,
    "discount" => 5,
    "picture" => "https://ih1.redbubble.net/image.208544014.1894/st,small,507x507-pad,600x600,f8f8f8.u2.jpg",
];



?>


<table>
    <tr>
       <p>Article: <?php echo $roue['name'] ?></p>
       <p>Price HT : <?php formatPrice(priceExcludingVAT($roue ['price']))?> </p>
       <p>Price TTC: <?php formatPrice ($roue ['price']) ?></p> 
       <p>Prix remisé: <?php formatPrice(displayDiscountedPrice ($roue ['price'], $roue ['discount']))?> </p>
        <p>Weight: <?php echo $roue ['weight'] ?>grammes </p>
        <p>Discount: <?php echo $roue ['discount'] ?>%</p>
       <img src='<?php echo $roue ['picture'] ?> ' />
    </tr>
</table>

<table>
    <tr>
       <p>Article: <?php echo $planche['name'] ?></p>
       <p>Price HT: <?php formatPrice(priceExcludingVAT($planche['price']))?> </p>
       <p>Price TTC: <?php formatPrice($planche ['price']) ?></p>
       <p>Prix remisé: <?php formatPrice(displayDiscountedPrice ($planche ['price'], $planche ['discount']))?> </p>
        <p>Weight: <?php echo $planche ['weight'] ?>grammes </p>
        <p>Discount: <?php echo $planche ['discount'] ?>%</p>
     <img src='<?php echo $planche ['picture'] ?> ' />
    </tr>
</table>

<table>
    <tr>
       <p>Article: <?php echo $stickers['name'] ?></p>
       <p>Price HT : <?php formatPrice(priceExcludingVAT($stickers['price']))?> </p>
       <p>Price TTC : <?php formatPrice ($stickers ['price']) ?></p> 
       <p>Prix remisé: <?php formatPrice(displayDiscountedPrice ($stickers ['price'], $stickers ['discount']))?> </p>
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