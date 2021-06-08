<html>

<head>

</head>



<body>

    <?php
    include("database.php");
    ?>

<?php
foreach (listingproducts() as $products) { ?>

   <p><strong><?php echo $products['name'] ?> </strong> : <?php echo $products['description']; ?> </p>
   <p><?php echo $products['price'];?> Centimes d'€ </p>
   <p>Quantité restante :<?php echo $products['quantity'];?> </p>

<?php } ?>
    

    <?php echo '<br>' ?>;
    <?php echo detailsproducts() ?>

    <?php echo '<br>' ?>;

<?php echo totalorders() ?>

<?php echo onecustomer() ?>
  



</body>

</html>