<?php
if (isset($_GET['firstname'])) {
    $messageFirstname = $_GET['firstname'];
} else {
    $messageFirstname = 'il n\'y a pas de parametre d\'URL \'firstname\'';
};
if (isset($_GET['lastname'])) {
    $messageLastname = $_GET['lastname'];
} else {
    $messageLastname = 'il n\'y a pas de parametre d\'URL \'lastname\'';
};
if (isset($_GET['gender'])) {
    $messageGender = $_GET['gender'];
} else {
    $messageGender = 'il n\'y a pas de parametre d\'URL \'gender\'';
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>

<body>
    <h1>Exercice 6</h1>
    <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être
        affiché.<br>
        Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse. <br>
        N'utiliser qu'une seule page.</p>

    <a href="index.php"><span style="background-color: lightblue;">Reset</span></a>

    <p>===================================</p>

    <?php
    if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['gender'])) { ?>
        <p><?= 'civilité : ' . $messageGender; ?> </p>
        <p><?= 'Prenom : ' . $messageFirstname; ?> </p>
        <p><?= 'Nom : ' . $messageLastname; ?> </p>
    <?php
    } else { ?>
        <form action="/exercice6/index.php" method=get>
            <label for="gender">civilité:</label>
            <select id="gender" name="gender">
                <option value="Homme">Mr</option>
                <option value="Femme">Mme</option>
            </select><br>
            <label for="firstname">Prenom:</label><br>
            <input type="text" id="firstname" name="firstname" value="Aude" require><br>
            <label for="lastname">Nom:</label><br>
            <input type="text" id="lastname" name="lastname" value="Vessel" require><br><br>
            <input type="submit" value="envoyer">
        </form>
    <?php }; ?>


</body>

</html>