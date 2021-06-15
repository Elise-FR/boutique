<html>
    <head></head>
    <body>



<?php 
    include ("Article.php");
    include ("Catalogue.php");
    include("Panier.php");

    $catalogue = new Catalogue();
    $catalogue->displayCat();


    ?>

</body>

</html>