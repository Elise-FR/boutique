<?php

class Sport extends Article
{

    public $level;
    public $size;
    public $brand;


    public function __construct($name, $description, $price, $image, $weight, $quantity, $available, $category_id, int $level, int $size, string $brand)
    {


        $this->level = $level;
        $this->size = $size;
        $this->brand = $brand;

        parent::__construct($name, $description, $price, $image, $weight, $quantity, $available, $category_id);
    }

    public function displaySport()
    { ?>

    <li><?php echo "Niveau de pratique exigé :" . $this->level?></li>
    <li><?php echo "Taille du produit :" . $this->size?></li>
    <li><?php echo "Marque :" . $this->brand?></li>


   <?php }
}
?>

