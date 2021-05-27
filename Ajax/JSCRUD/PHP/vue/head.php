<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout Utilisateur</title>
    <?php
        if (file_exists("./CSS/style.css"))
            {
                echo '<link rel="stylesheet" href="./CSS/style.css">'; // quand on vient de index.php
            }
            else if (file_exists("../../CSS/style.css"))
            {
                echo '<link rel="stylesheet" href="../../CSS/style.css">';  // quand on vient du dossier VIEW
            }
            ?>
</head>

    