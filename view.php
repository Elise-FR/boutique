<?php include("database.php");

addOneProduct($_POST['nameproduct'], $_POST['description'], $_POST['price'], $_POST['image'], $_POST['weight'], $_POST['quantity'], $_POST['available'], $_POST['category_id']);

?>

<html>

<head>

</head>



<body>



    <li><?php echo $_POST['nameproduct'] ?> </li>
    <li><?php echo $_POST['description'] ?> </li>
    <li><?php echo $_POST['price'] ?> </li>
    <li><?php echo $_POST['image'] ?> </li>
    <li><?php echo $_POST['weight'] ?> </li>
    <li><?php echo $_POST['quantity'] ?> </li>
    <li><?php echo $_POST['available'] ?> </li>
    <li><?php echo $_POST['category_id'] ?> </li>

</body>

</html>