<html>

<head>

</head>



<body>

    <?php
    include("header.php");
    include("my-functions.php");
    include("products.php");
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