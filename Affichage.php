<?php

include ("Article.php");
include ("Catalogue.php");

$article = new Article('Vélo','LaPierre','100000','https://max-discount.fr/wp-content/uploads/2021/01/velo-route-lapierre-sensium-al-200-w-2020.jpg','150','10','oui','1');
$article->displayArticle();


$catalogue = new Catalogue();
$catalogue->displayCat();


