<?php

class Panier

{

    public $myPanier = [];
    public $quantity;

    //méthode qui ajoute un article ou ajoute une quantité à un article déja présent

    public function addAtMyPanier($article_id,$quantity)

    {
        if (isset($this->myPanier[$article_id])) {


            $this->myPanier[$article_id] += $quantity; 
        }

        else {

          $this->myPanier[$article_id] = $quantity;

        }
        
    }

    //méthode qui ajoute quantité à la ligne de panier correspondant à l'article

    public function updateMyPanier($article_id,$quantity)

    {




    }

    //fonction pour afficher mon panier

    public function deleteMyPanier($article_id)

    {

    }

}
