<?php
$time = time();
$message = date("d/m/Y", $time);
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

    <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>

    <p>===================================</p>

    <?= $message ?>

</body>

</html>