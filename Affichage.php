<?php

require_once ("Article.php");
require_once ("Catalogue.php");
require_once("Sport.php");
require_once("Panier.php");

/*$article = new Article('Vélo','LaPierre','10000','https://max-discount.fr/wp-content/uploads/2021/01/velo-route-lapierre-sensium-al-200-w-2020.jpg','150','10','oui','1');
$article->displayArticle();


$catalogue = new Catalogue();
$catalogue->displayCat(); */

$panier = new Panier();
$panier->addAtMyPanier(2);


$panier->displayPanier();

//var_dump($panier);


