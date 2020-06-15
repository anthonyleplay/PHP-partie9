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
    <title>exo5</title>
</head>

<body>
    <h1>Exercice 5</h1>

    <p>Créer un formulaire sur la page index.php avec : <br>
        <ul>
            <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
            <li>Un champ texte pour le nom</li>
            <li>Un champ texte pour le prénom </li>
        </ul><br>
        Ce formulaire doit rediriger vers la page index.php.<br>
        Vous avez le choix de la méthode.
    </p>
    <a href="index.php"><span style="background-color: lightblue;">Reset</span></a>

    <p>===================================</p>

    <form action="/exercice5/index.php" method=get>
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

    <p><?= 'civilité : ' . $messageGender; ?> </p>
    <p><?= 'Prenom : ' . $messageFirstname; ?> </p>
    <p><?= 'Nom : ' . $messageLastname; ?> </p>

</body>

</html>