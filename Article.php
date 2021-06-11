<html>

<head></head>

<body>

<?php 

class Article {

    public $name;
    public $description;
    public $price;
    public $image;
    public $weight;
    public $quantity;
    public $available;
    public $category_id;

    public function __construct($name,$description,$price,$image,$weight,$quantity,$available,$catgerory_id)
    {
        $this->name = $name;
        $this->description =$description;
        $this->price = $price;
        $this->image = $image;
        $this->weight = $weight;
        $this->quantity =$quantity;
        $this->available= $available;
      
        
    }

  
    public function displayArticle()

    {?>
      
       <li> <?php echo "Voici l'article" . $this->name ?></li>
       <li> <?php echo "Description :" . $this->description ?></li>
       <li> <?php echo "Prix :" . $this->price . "€" ?></li>
       <li> <?php echo '<img src ="' . $this->image . '" alt="" width="200">' ?></li>
       <li> <?php echo "Poids :" . $this->weight . "g"?></li>
       <li> <?php echo "quantité en stock :" . $this->quantity?></li>
       <li> <?php echo "Disponiblités :" . $this->available?></li>
   
       
<?php echo '<br>';
     }

}



?>
</body>
</html>