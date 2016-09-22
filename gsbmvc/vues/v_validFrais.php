<div id ="contenu">
    <h2>Validation des fiches de frais</h2>
    <h3>Visiteur et mois à sélectionner : </h3>
    <form action="index.php?uc=validFrais&action=validFrais" method="post">
        <div class="corpsForm">
            <p>
                Nom :
                <select name='id'>
                    <?php
                    foreach ($visiteur as $unVisiteur) {
                        echo '<option value="' . $unVisiteur['id'] . '">' . $unVisiteur['nom'] . ' ' . $unVisiteur['prenom'] . '</option>' . PHP_EOL;
                    }
                    ?>
                </select>  

                Mois :
                <select name='mois'>
                    <?php
                    foreach ($dernierMois as $sixDmois) {
                        echo $sixDmois;
                    }
                    ?>

                </select>
                <button type=submit>Valider</button>
        </div>
    </form>



