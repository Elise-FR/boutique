<html>
    <head>

    </head>



    <body>

    <?php 
    include("header.php");
    ?>


    <?php
$products =[
    "roue" => [
        "name" => "roue",
        "price" => 15,
        "weight" => 30,
        "discount" => 10,
        "picture" => "https://contents.mediadecathlon.com/p1355730/k$371708ed2db30f5c19bdef6a5e08cf51/sq/4-roues-longboard-ou-cruiser-70mm-78a-vert-fonce.jpg?format=auto&f=800x0"
    ],  

    "planche" => [
        "name" => "planche",
        "price" => 179,
        "weight" => 980,
        "discount" => 15,
        "picture" => "https://cdn.shopify.com/s/files/1/0040/7807/6033/products/I-Grande-95593-longboard-globe-blazer-xl-coconut-lime-36.net_250x250@2x.jpg?v=1612965566"

    ],
        "stickers" => [
            "name" => "stickers",
            "price" => 5,
            "weight" => 2,
            "discount" => 5,
            "picture" => "https://ih1.redbubble.net/image.208544014.1894/st,small,507x507-pad,600x600,f8f8f8.u2.jpg"
        ],
        


    ];


    ?>

    <table>
    <tr>
       <p>Article: <?php echo $products['roue'] ['name'] ?></p>
       <p>Price: <?php echo $products ['roue'] ['price'] ?>euros </p> 
        <p>Weight: <?php echo $products['roue'] ['weight'] ?>grammes </p>
        <p>Discount: <?php echo $products ['roue']['discount'] ?>%</p>
       <img src='<?php echo $products ['roue']['picture'] ?> ' />
    </tr>
</table>

<table>
    <tr>
       <p>Article: <?php echo $products['planche'] ['name'] ?></p>
       <p>Price: <?php echo $products ['planche'] ['price'] ?>euros </p> 
        <p>Weight: <?php echo $products['planche'] ['weight'] ?>grammes </p>
        <p>Discount: <?php echo $products ['planche']['discount'] ?>%</p>
       <img src='<?php echo $products ['planche']['picture'] ?> ' />
    </tr>
</table>

<table>
    <tr>
       <p>Article: <?php echo $products['stickers'] ['name'] ?></p>
       <p>Price: <?php echo $products ['stickers'] ['price'] ?>euros </p> 
        <p>Weight: <?php echo $products['stickers'] ['weight'] ?>grammes </p>
        <p>Discount: <?php echo $products ['stickers']['discount'] ?>%</p>
       <img src='<?php echo $products ['stickers']['picture'] ?> ' />
    </tr>
</table>


<?php 

$index =0;

while ($index < count($products)  ) {

$tableau_index =array_keys($products);
    $affichage = $tableau_index[$index];
  
    echo "Affichage du produit : " . $affichage . "<br/>";

    $index += 1;

    $index2=0;

    while ($index2 < count($products[$affichage])) {


        $tableau_index2 = array_values($products[$affichage]);
        $affichage2 = $tableau_index2[$index2];

        echo "Affichage caractéristiques: " . $affichage2 . "<br/>";
        

        $index2 += 1;
    }
}
?>


<table>

<?php 

$index =0;

while ($index < count($products)  ) {

    <tr>
       <p>Article: <?php echo $products['roue'] ['name'] ?></p>
       <p>Price: <?php echo $products ['roue'] ['price'] ?>euros </p> 
        <p>Weight: <?php echo $products['roue'] ['weight'] ?>grammes </p>
        <p>Discount: <?php echo $products ['roue']['discount'] ?>%</p>
       <img src='<?php echo $products ['roue']['picture'] ?> ' />
    </tr>
</table>


<?php 
    include("footer.php");
    ?>

    </body>
</html>