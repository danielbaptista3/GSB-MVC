﻿ <div id="contenu">
    <h2>Suivi des fiches de frais</h2>
    <h3>Fiches des visiteurs et mois à sélectionner :</h3>
    <form action="index.php?uc=suiviFrais&action=suiviFrais" method="post">
        <div class="corpsForm">

            <p> 

                <label for="lstMois" accesskey="n">Visiteur : </label>
                <select id="lstMois" name="lstMois">
                    <?php

                    foreach ($lesMois as $unMois) {
                        $mois = $unMois['mois'];
                        $numAnnee = $unMois['numAnnee'];
                        $numMois = $unMois['numMois'];
                        if ($mois == $moisASelectionner) {
                            ?>
                            <option selected value="<?php echo $mois ?>"><?php echo $numMois . "/" . $numAnnee ?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $mois ?>"><?php echo $numMois . "/" . $numAnnee ?> </option>
                            <?php
                        }
                    }
                    ?>    

                </select>
            </p>
        </div>
        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" />

            </p> 
        </div>

    </form>