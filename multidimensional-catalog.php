<html>

<head>

</head>



<body>

    <?php
    include("header.php");
    include("my-functions.php");
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

    <table class="table table-hover">
        <tr>
            <p>Article: <?php echo $products['roue']['name'] ?></p>
            <p>Price HT : <?php formatPrice(priceExcludingVAT(($products['roue']['price']))) ?></p>
            <p>Price TTC : <?php formatPrice($products['roue']['price']) ?></p>
            <p>Prix remisé: <?php formatPrice(displayDiscountedPrice($products['roue']['price'], $products['roue']['discount'])) ?> </p>
            <p>Weight: <?php echo $products['roue']['weight'] ?>g </p>
            <p>Discount: <?php echo $products['roue']['discount'] ?>%</p>
            <img src='<?php echo $products['roue']['picture'] ?> ' alt="Roues" width="300" ; />
        </tr>
    </table>

    <table class="table table-hover">
        <tr>
            <p>Article: <?php echo $products['planche']['name'] ?></p>
            <p>Price HT : <?php formatPrice(priceExcludingVAT(($products['planche']['price']))) ?></p>
            <p>Price TTC : <?php formatPrice($products['planche']['price']) ?></p>
            <p>Prix remisé: <?php formatPrice(displayDiscountedPrice($products['planche']['price'], $products['planche']['discount'])) ?> </p>
            <p>Weight: <?php echo $products['planche']['weight'] ?>g </p>
            <p>Discount: <?php echo $products['planche']['discount'] ?>%</p>
            <img src='<?php echo $products['planche']['picture'] ?> ' alt="longboard" width="300" ; />
        </tr>
    </table>

    <table class="table table-hover">
        <tr>
            <p>Article: <?php echo $products['stickers']['name'] ?></p>
            <p>Price HT : <?php formatPrice(priceExcludingVAT(($products['stickers']['price']))) ?></p>
            <p>Price TTC: <?php formatPrice($products['stickers']['price']) ?></p>
            <p>Prix remisé: <?php formatPrice(displayDiscountedPrice($products['stickers']['price'], $products['stickers']['discount'])) ?> </p>
            <p>Weight: <?php echo $products['stickers']['weight'] ?>g </p>
            <p>Discount: <?php echo $products['stickers']['discount'] ?>%</p>
            <img src='<?php echo $products['stickers']['picture'] ?> ' alt="Stickers" width="300" ; />
        </tr>
    </table>



    <h1>Affichage tableau avec boucle Foreach : </h1>

    <table class="table table-hover">


        <?php foreach ($products as $key => $value) { ?>


            <tr>
                <th> Name </th>
                <th> Price HT </th>
                <th> Price TTC </th>
                <th> Discount </th>
                <th> Discount price </th>
                <th> Weight </th>
                <th> image </th>




            </tr>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo formatPrice(priceExcludingVAT(($value['price']))) ?></td>
            <td><?php echo formatPrice($value['price']) ?></td>
            <td><?php echo $value['discount'] ?> %</td>
            <td><?php echo formatPrice(displayDiscountedPrice($value['price'], $value['discount'])) ?> </td>
            <td><?php echo $value['weight'] ?> g</td>
            <td><img src='<?php echo $value['picture'] ?>' alt="produit" width="100" ; /></td>
            <td>
                <form method="post" action="cart.php"> <input type="number" name="quantite" min="0" placeholder="0">
            <td><select type="text" name="transporteur">
                    <option value="choix du transporteur">Je choisis mon transporteur</option>
                    <option value="La Poste">La Poste</option>
                    <option value="Geodis">Géodis</option>
                </select>
            <td><input type="submit" class="btn btn-primary" id="envoyer" name="envoyer" value="commander"></td>
            <input type="hidden" name="name" value="<?php echo $value['name'] ?>" />
            <input type="hidden" name="price" value="<?php echo formatPrice($value['price']) ?>" />
            <input type="hidden" name="price_d" value=" <?php echo formatPrice(displayDiscountedPrice($value['price'], $value['discount'])) ?>" />
            <input type="hidden" name="weight" value="<?php echo $value['weight'] ?>" />



            </form>
            </td>
            </tr>



        <?php } ?>

    </table>

    <?php echo "<br/>" ?>


    <?php
    include("footer.php");
    ?>

</body>

</html>