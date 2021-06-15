<?php

class Panier

{

    public $myPanier = [];
    public $quantity;

    //méthode qui ajoute un article ou ajoute une quantité à un article déja présent

    public function addAtMyPanier($article_id)

    {
        if (isset($this->myPanier[$article_id])) {

                    $this->quantity += 1;
            $this->myPanier[$article_id] = $this->quantity;
        }
        
        else {
                    $this->quantity = 1;

          $this->myPanier[$article_id] = $this->quantity;

        }
        
    }

    //méthode qui ajoute quantité à la ligne de panier correspondant à l'article

    public function updateMyPanier($article_id,$quantityadd)

    {
        $this->myPanier[$article_id] += $quantityadd;

    }

    //fonction pour afficher mon panier

    public function deleteMyPanier($article_id)

    { if(isset($this->myPanier[$article_id])) {


    }



    }

    public function displayPanier() {

        foreach($this->myPanier as $key => $quantity) {

            echo "Mon id article : " . $key;
            echo "<br>";
            echo "Ma quantité commandée : " . $quantity;


        }
    }

}
