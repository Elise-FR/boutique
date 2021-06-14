<html>

<head></head>

<body>

<?php 

class Article {

    public $name;
    public $description;
    protected $price;
    public $image;
    protected $weight;
    public $quantity;
    public $available;
    public $category_id;

    public function __construct($name,$description,$price,$image,$weight,$quantity,$available,$category_id)
    {
        $this->name = $name;
        $this->description =$description;
        $this->price = $price;
        $this->image = $image;
        $this->weight = $weight;
        $this->quantity =$quantity;
        $this->available= $available;
        $this->category_id = $category_id;
      
        
    }

    public function getPrice() {

        return $this->price/100;
    }

    public function setPrice($price) {

        if($price <0) {

            throw new Exception("Le prix indiqué n'est pas bon");
        }
            $this->price = $price;
        
        }


    public function getWeight() {

        return $this->weight/100;
    }

  
    public function displayArticle()

    {?>
      
       <li> <?php echo "Voici l'article" . $this->name ?></li>
       <li> <?php echo "Description :" . $this->description ?></li>
       <li> <?php echo "Prix :" . $this->getprice() . "€" ?></li>
       <li> <?php echo '<img src ="' . $this->image . '" alt="" width="200">' ?></li>
       <li> <?php echo "Poids :" . $this->getWeight() . "kg"?></li>
       <li> <?php echo "quantité en stock :" . $this->quantity?></li>
       <li> <?php echo "Disponiblités :" . $this->available?></li>
       <li> <?php echo "ID catégorie :" . $this->category_id?></li>
   
       
<?php echo '<br>';
     }

}



?>
</body>
</html>