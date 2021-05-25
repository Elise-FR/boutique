<html>
    <head></head>
    <body>

    <?php 
    
    function formatPrice ($price) {

echo number_format($price, 2) . "€";

    }

    function priceExcludingVAT ($price_ttc) {

        $price_ht = (100*$price_ttc)/(100+20);

        return $price_ht;


    }
    
    
    
    ?>

    </body>

</html>