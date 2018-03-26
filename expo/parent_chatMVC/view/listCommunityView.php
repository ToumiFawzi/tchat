<?php $title = 'Mon Profile'; ?>

<?php ob_start(); ?>
<div class="row">
    <div class="col-md-4">
        <div class="colonne">
            <div class="avatarnom">
                <div class="avatar"></div>
                <div class="parentsname">DUPONT David</div>
                <a href="#"><img src="./images/picto_edit.svg"
                    style="float: right; width: 4vh;"></a>
            </div>

            <span class="elementlist">Métier : </span>Electricien<br> <span
                class="elementlist">Situation : </span>Marié<br> <span
                class="elementlist">Téléphone : </span>06 12 34 56 78<br> <span
                class="elementlist">Email : </span>david.dupont@adresse.fr<br> <span
                class="elementlist">Adresse : </span>42 rue Larionov<br>La cotonne<br>42000
            Saint-Etienne<br>
        </div>
    </div>
    <div class="col-md-4">
        <div class="colonne">
            <div class="categorie">Communautés</div>
            <br>

            <table class="table">
                <tbody>
                
                
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
<?php
while ($data = $community->fetch()) {
   ?>
                   <tr>
                    <td><a href="post.php?id=<?= $data['id']?>"><?= htmlspecialchars($data['title']) ?></a></td>
                    <td><a href="post.php?id=<?= $data['id']?>"><?= htmlspecialchars($data['description'])?></a></td>

                </tr>
<?php
}
$community->closeCursor();
?>

                 </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-4">
        <div class="colonne">
            <div class="categorie">Enfants</div>
            <br>
            <div class="enfant">
                <table style="width: 100%;">
                    <tr>
                        <td>
                            <div class="avatarenfant"></div>
                        </td>
                        <td><span class="kidsname">Jeanne</span><br> <span
                            class="kidsetablissement">Collège Honoré d'Urfé</span></td>
                        <td><span class="kidsage">12 ans</span><br> <span
                            class="kidslevel">6ème</span></td>
                    </tr>
                </table>
            </div>
            <div class="enfant">
                <table style="width: 100%;">
                    <tr>
                        <td>
                            <div class="avatarenfant"></div>
                        </td>
                        <td><span class="kidsname">Marc</span><br> <span
                            class="kidsetablissement">Ecole primaire de la cotonne</span></td>
                        <td><span class="kidsage">9 ans</span><br> <span class="kidslevel">CM1</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>