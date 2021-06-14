<?php

class Sport extends Article
{

    public $level;
    private $size;
    public $brand;


    public function __construct($name, $description, $price, $image, $weight, $quantity, $available, $category_id, string $level, int $size, string $brand)
    {


        $this->level = $level;
        $this->size = $size;
        $this->brand = $brand;

        parent::__construct($name, $description, $price, $image, $weight, $quantity, $available, $category_id);
    }

    public function setGoodSize($size)
    {

            if ($size<=170) {

                throw new Exception("Vous êtes en dessous de la taille requise pour pouvoir utiliser cet article");
            }

            $this->size =$size;

    }

    public function getGoodSize()

    {

        return $this->size/100;
    }

    public function displayArticle()
    { 
        
        parent:: displayArticle();
        ?>

<?php echo $this->setGoodSize('175')?>

    <li><?php echo "Niveau de pratique exigé : Expert" . $this->level?></li>
    <li><?php echo "Taille requise:" . $this->getGoodSize() . "m"?></li>
    <li><?php echo "Marque :" . $this->brand?></li>


   <?php }
}


?>

