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
