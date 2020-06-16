<?php
$time = time();

$dateArray1 = date_create(date("Y-m-d", $time));
$timestampDayNow = date_timestamp_get($dateArray1);
$date1 = date("d-m-Y", $timestampDayNow);

$dateArray2 = date_create("2016-05-16");
$timeDaystampSearch = date_timestamp_get($dateArray2);
$date2 = date("d-m-Y", $timeDaystampSearch);

$dayBetween = ($timestampDayNow - $timeDaystampSearch) / (60 * 60 * 24);
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

    <?= $date1 . " - " . $date2 . " / il y a <b>" . $dayBetween . "</b> jours entre les 2 dates." ?>

</body>

</html>