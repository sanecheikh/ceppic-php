<h1>Admim</h1>
<?php

$requete = 'SELECT * FROM utilisateurs order by id_utilisateur DESC';

$querySelect = new Sql();
$users = $querySelect->lister($requete);

// dump($users);
?>
<table class="list-users">
    <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php
        foreach ($Users as $user) {
        ?>
            <tr>
                <td><?= $user['id_utilisateur'] ?></td>
                <td><?= $user['nom'] ?></td>
                <td><?= $user['prenom'] ?></td>
                <td><?= $user['mail'] ?></td>
                <td><a href="index.php?page=edit&id=<?= $user['id_utilisateur'] ?>" class="btn">Editer</a></td>
                <td><a href="index.php?page=supp&id=<?= $user['id_utilisateur'] ?>" class="btn btn-supp">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>