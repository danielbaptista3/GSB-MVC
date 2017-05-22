<html>
    <head>

    </head>
    <body>
        <div id="contenu">
            <h2>Suivi Fiche de Frais</h2>

            <form method="POST"  action="index.php?uc=suiviFrais&action=afficheSuivi">
                <div class="corpsForm">

                    <fieldset>
                        <legend>Fiches Validées
                        </legend>
                        <div>
                            <select id="lstVisiteur" name="lstVisiteur">
                                <?php foreach ($lesFichesValidees as $uneFicheValidee): ?>
                                    <?php if ($uneFicheValidee["idVisiteur"] == $idVisiteur) : ?>
                                        <option selected value="<?php echo $uneFicheValidee[0] . " " . $uneFicheValidee[2] ?>"><?php echo $uneFicheValidee[1] ?> </option>
                                    <?php else : ?>
                                        <option value="<?php echo $uneFicheValidee[0] . " " . $uneFicheValidee[2] ?>"><?php echo $uneFicheValidee[0] . " - " . $uneFicheValidee[1] ?> </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>

                            <input id="ok" type="submit" value="valider" size="20">

                            ﻿

                        </div>



                    </fieldset>
            </form>
</html>