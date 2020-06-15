<?php
$time = time();
$message = date("d/m/Y", $time);
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
    <p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>

    <a href="index.php"><span style="background-color: lightblue;">Reset</span></a>

    <p>===================================</p>

    <?= $message ?>

</body>

</html>