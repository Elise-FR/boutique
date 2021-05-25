<html>

<head>

</head>



<body>

    <?php
    include("header.php");
    ?>


    <?php
    $products = [
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
            <p>Article: <?php echo $products['roue']['name'] ?></p>
            <p>Price: <?php echo $products['roue']['price'] ?>euros </p>
            <p>Weight: <?php echo $products['roue']['weight'] ?>grammes </p>
            <p>Discount: <?php echo $products['roue']['discount'] ?>%</p>
            <img src='<?php echo $products['roue']['picture'] ?> ' />
        </tr>
    </table>

    <table>
        <tr>
            <p>Article: <?php echo $products['planche']['name'] ?></p>
            <p>Price: <?php echo $products['planche']['price'] ?>euros </p>
            <p>Weight: <?php echo $products['planche']['weight'] ?>grammes </p>
            <p>Discount: <?php echo $products['planche']['discount'] ?>%</p>
            <img src='<?php echo $products['planche']['picture'] ?> ' />
        </tr>
    </table>

    <table>
        <tr>
            <p>Article: <?php echo $products['stickers']['name'] ?></p>
            <p>Price: <?php echo $products['stickers']['price'] ?>euros </p>
            <p>Weight: <?php echo $products['stickers']['weight'] ?>grammes </p>
            <p>Discount: <?php echo $products['stickers']['discount'] ?>%</p>
            <img src='<?php echo $products['stickers']['picture'] ?> ' />
        </tr>
    </table>


    <p> Affichage tableau avec boucle For : </p>

    <?php

    $keys = array_keys($products);
    for ($i = 0; $i < count($products); $i++) {

        echo "Affichage article : " . $keys[$i] . "<br/>";

        foreach ($products[$keys[$i]] as $key => $value) {

            echo $key . " : " . $value . "<br/>";
        }
    }

    echo "<br/>"
    ?>

    <p> Affichage tableau avec boucle Foreach : </p>

    <?php

    foreach ($products as $key => $value) {

        echo "Affichage article : " . $key . "<br/>";

        echo "Name: " . $value['name'] . "<br/>" . "Price : " . $value['price'] . "€" . "<br/>" .
            "Weight : " . $value['weight'] . "g" . "<br/>" . "Discount : " . $value['discount'] . "%" . "<br/>" .
            "Picture : " . $value['picture'] . "<br/>";
        echo "<br/>";
    }


    ?>

    <p> Affichage tableau avec boucle While : </p>

    <?php

    $keys = array_keys($products);
    $i = 0;

    while ($i < count($products)) {

        echo "<br/>";

        echo "Affichage article : " . $keys[$i] . "<br/>";
        echo "Name : " . $products[$keys[$i]]["name"] . "<br/>";
        echo "Price : " . $products[$keys[$i]]["price"] . "<br/>";
        echo "Weight : " . $products[$keys[$i]]["weight"] . "<br/>";
        echo "Discount : " . $products[$keys[$i]]["discount"] . "<br/>";
        echo "Picture : " . $products[$keys[$i]]["picture"] . "<br/>";
        $i = $i + 1;
    }


    ?>

    <p> Affichage tableau avec boucle Do While : </p>

    <?php

    
    $keys = array_keys($products);
    $index = 0;

    do {
        echo "<br/>";

        echo "Affichage article : " . $keys[$index] . "<br/>";
        echo "Name : " . $products[$keys[$index]]["name"] . "<br/>";
        echo "Price : " . $products[$keys[$index]]["price"] . "<br/>";
        echo "Weight : " . $products[$keys[$index]]["weight"] . "<br/>";
        echo "Discount : " . $products[$keys[$index]]["discount"] . "<br/>";
        echo "Picture : " . $products[$keys[$index]]["picture"] . "<br/>";
        $index++;
        
    }
    
    while ($index < count($products));



    ?>

    <?php
    include("footer.php");
    ?>

</body>

</html>