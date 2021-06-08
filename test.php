<html>

<head>

</head>



<body>

    <?php
    include("database.php");
    ?>


<?php echo listingproducts() ?>
    

    <?php echo '<br>' ?>;
    <?php echo detailsproducts() ?>

    <?php echo '<br>' ?>;

<?php echo totalorders() ?>

<?php echo onecustomer() ?>
  



</body>

</html>