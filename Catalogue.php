<html>

<head></head>

<body>

    <?php

    include("database.php");

    class Catalogue
    {


        public $listingProducts = [];


        function __construct()
        {
            $listing = listingproducts();

            foreach ($listing as $product) {

                $product = new Article($product['name'], $product['description'], $product['price'], $product['image'], $product['weight'], $product['quantity'], $product['available'], $product['category_id'],$_POST['level'],$_POST['size'],$_POST['brand']);
            
            array_push($this->listingProducts, $product);
            
            }


        }

        function displayCat()
        {

            foreach($this->listingProducts as $product) {

                $product -> displayArticle();


            }



        }
    }


    ?>
</body>

</html>