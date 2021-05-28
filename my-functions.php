<html>

<head></head>

<body>

    <?php

    function formatPrice($price)
    {

        return number_format($price, 2);
    }

    function priceExcludingVAT($price_ttc)
    {

        $price_ht = (100 * $price_ttc) / (100 + 20);

        return $price_ht;
    }



    function displayDiscountedPrice($price_ttc, $discount)
    {


        $montant_remise = $price_ttc * $discount / 100;

        return $price_ttc - $montant_remise;
    }

  

   




    ?>

</body>

</html>