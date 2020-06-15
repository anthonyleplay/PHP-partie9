<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo8</title>
</head>

<body>
    <h1>Exercice 8</h1>
    <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>

    <a href="index.php"><span style="background-color: lightblue;">Reset</span></a>

    <p>===================================</p>

    <?php

    if (isset($_FILES["fileToUpload"])) { ?>
        <p><?= 'civilité : ' . $_POST["gender"] ?> </p>
        <p><?= 'Prenom : ' . $_POST["firstname"] ?> </p>
        <p><?= 'Nom : ' . $_POST["lastname"] ?> </p>
        <p><?php
        if ($_FILES["fileToUpload"]["type"] == "application/pdf") {?>
            <?='extention du fichier : ' . $_FILES["fileToUpload"]["type"] ?> 
        <?php
        } else { ?>
            <?='extention du fichier : ' . 'le fichier n\'est pas un .pdf'; }?>
        </p>
    <?php
    } else { ?>
        <form action="/exercice8/index.php" method=post enctype="multipart/form-data">
            <label for="gender">civilité:</label>
            <select id="gender" name="gender" require>
                <option value="Homme">Mr</option>
                <option value="Femme">Mme</option>
            </select><br>
            <label for="firstname">Prenom:</label><br>
            <input type="text" id="firstname" name="firstname" value="Aude" require><br>
            <label for="lastname">Nom:</label><br>
            <input type="text" id="lastname" name="lastname" value="Vessel" require><br><br>
            <input type="file" name="fileToUpload" id="fileToUpload" require><br><br>
            <input type="submit" value="envoyer">
        </form>
    <?php }; ?>


</body>

</html>