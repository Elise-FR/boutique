<table class="table">

        <?php

        $index = 0;

        while ($index < count($products)) {

            $tableau_index = array_keys($products);
            $affichage = $tableau_index[$index];
        ?>
            <tr>
                <?php

                $index2 = 0;

                while ($index2 < count($products[$affichage])) {

                    $tableau_index2 = array_values($products[$affichage]);
                    $affichage2 = $tableau_index2[$index2];


                    $tableau_index3 = array_keys($products[$affichage]);
                    $caracteristiques = $tableau_index3[$index2];
                ?>
                    <td>



                        <?php if ($caracteristiques == "picture") {
                        ?>

                            <img src="<?php echo $affichage2 ?>">
                        <?php

                            $index2 += 1;

                            continue;
                        }

                        echo $caracteristiques . " : " . $affichage2 ?>
                    </td>
                <?php $index2 += 1;
                }

                ?>

            </tr>
        <?php
            $index += 1;
        }
        ?>

    </table>

    <h3> Affichage tableau avec boucle While : </h3>

<?php

$keys = array_keys($products);
$i = 0;

while ($i < count($products)) {

    echo "<br/>";

    echo "Affichage article : " . $keys[$i] . "<br/>";
    echo "Name : " . $products[$keys[$i]]["name"] . "<br/>";
    echo "Price : " . $products[$keys[$i]]["price"] . "€" . "<br/>";
    echo "Weight : " . $products[$keys[$i]]["weight"] . "g" . "<br/>";
    echo "Discount : " . $products[$keys[$i]]["discount"] . "%" . "<br/>";
    echo "Picture : " . $products[$keys[$i]]["picture"] . "<br/>";
    $i = $i + 1;
}


?>

<h3> Affichage tableau avec boucle Do While : </h3>

<?php


$keys = array_keys($products);
$index = 0;

do {
    echo "<br/>";

    echo "Affichage article : " . $keys[$index] . "<br/>";
    echo "Name : " . $products[$keys[$index]]["name"] . "<br/>";
    echo "Price : " . $products[$keys[$index]]["price"] . "€" . "<br/>";
    echo "Weight : " . $products[$keys[$index]]["weight"] . "g" . "<br/>";
    echo "Discount : " . $products[$keys[$index]]["discount"] . "%" . "<br/>";
    echo "Picture : " . $products[$keys[$index]]["picture"] . "<br/>";
    $index++;
} while ($index < count($products));

echo "<br/>";

?>

<h3> Affichage tableau avec boucle For sans foreach sur multidimensioal: </h3>

<?php
$keys = array_keys($products);
$i = 0;

for ($i; $i < count($products); $i++) {

    echo "<br/>";

    echo "Affichage article : " . $keys[$i] . "<br/>";
    echo "Name : " . $products[$keys[$i]]["name"] . "<br/>";
    echo "Price : " . $products[$keys[$i]]["price"] . "€" .  "<br/>";
    echo "Weight : " . $products[$keys[$i]]["weight"] . "g" . "<br/>";
    echo "Discount : " . $products[$keys[$i]]["discount"] . "%" . "<br/>";
    echo "Picture : " . $products[$keys[$i]]["picture"] . "<br/>";
}

?>

<h3> Affichage tableau avec boucle For dans multidimensional : </h3>

    <?php

    $keys = array_keys($products);
    for ($i = 0; $i < count($products); $i++) {

        echo "Affichage article : " . $keys[$i] . "<br/>";

        foreach ($products[$keys[$i]] as $key => $value) {

            echo $key . " : " . $value . "<br/>";
        }
    }

    echo "<br/>"
    ?> 
 <select name="choix">
                    <option value="choix0">Choix quantité </option>
                    <option value="choix1">1</option>
                    <option value="choix2">2</option>
                    <option value="choix3">3</option>
                </select>

                <input type ="select" name="choix"/> </td>


                <select name="choix">
                    <option value="0">Choix quantité </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>