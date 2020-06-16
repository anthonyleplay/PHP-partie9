<?php
$time = time();

$dateArray1 = date_create("2016-02-01");
$timestamp1fevrier = date_timestamp_get($dateArray1);
$date1 = date("d-m-Y", $timestamp1fevrier);

$dateArray2 = date_create("2016-03-01");
$timeDaystamp1mars = date_timestamp_get($dateArray2);
$date2 = date("d-m-Y", $timeDaystamp1mars);

$dayBetween = ($timeDaystamp1mars - $timestamp1fevrier) / (60 * 60 * 24);
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

    <p>===================================</p>

    <?= $date1 . " - " . $date2 . " / il y a <b>" . $dayBetween . "</b> jours dans le mois de fevrier 2016." ?>

</body>

</html>