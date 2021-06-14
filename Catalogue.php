<html>

<head></head>

<body>

    <?php

    require_once("database.php");
    require_once("Article.php");
    require_once("Sport.php");

    class Catalogue
    {


        public $listingProducts = [];


        function __construct()
        {
            $listing = listingproducts();

            foreach ($listing as $product) {

                if ($product['category_id']==='2') {


                    $product = new Sport($product['name'], $product['description'], $product['price'], $product['image'], $product['weight'], $product['quantity'], $product['available'], $product['category_id'],$product['level'],$product['size'],$product['brand']);

                    array_push($this->listingProducts, $product);

                }

               else { $product = new Article($product['name'], $product['description'], $product['price'], $product['image'], $product['weight'], $product['quantity'], $product['available'], $product['category_id']);
            
            array_push($this->listingProducts, $product);
            
            }

            


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