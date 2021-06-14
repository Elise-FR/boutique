<html>

<head>

</head>



<body>

    <?php
    require_once("header.php");
    require_once("my-functions.php");
    require_once("database.php");
    ?>

    <form method="post" action="view.php">

        <tr>
            <p><input type="text" name="nameproduct" placeholder="nameproduct"></p>
            <p><input type="text" name="description" placeholder="description"></p>
            <p><input type="number" name="price" placeholder="price" min=0></p>
            <p><input type="text" name="image" placeholder="image"> </p>
            <p><input type="number" name="weight" placeholder="weight"></p>
            <p><input type="number" name="quantity" placeholder="quantity"></p>
            <p><input type="number" name="available" placeholder="available"></p>
            <p><input type="number" name="category_id" placeholder="category"></p>
            <p> <select name="level" id="sport-level">
                    <option value="">--Please choose your level--</option>
                    <option value="Débutant">Débutant</option>
                    <option value="intermédiaire">Intermédiaire</option>
                    <option value="Expert">Expert</option>
                </select> </p>
            <p><input type="number" name="size" placeholder="size"></p>
            <p><input type="text" name="brand" placeholder="brand"></p>
            <p><input type="submit" class="btn btn-primary" id="ajouter" name="ajouter" value="ajouter"></p>

        </tr>
    </form>



    <?php
    include("footer.php");
    ?>

</body>

</html>