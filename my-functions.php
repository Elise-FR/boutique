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

        return number_format($price_ht, 2);
    }



    function displayDiscountedPrice($price_ttc, $discount)
    {


        $montant_remise = $price_ttc * $discount / 100;

        return $price_ttc - $montant_remise;
    }

    function fraisDePort ($weight, $prixtotalttc) {

        if ($weight<=500) {

           return number_format($frais_de_port= 5,2);
        }

 else if ($weight<=2000) {

    return number_format($frais_de_port = $prixtotalttc*(10/100) , 2);
}

    }







    ?>

</body>

</html>