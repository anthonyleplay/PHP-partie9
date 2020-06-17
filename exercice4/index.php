<?php
$time = time();
$date1 = date_create(date("Y-m-d", $time));
$timestampDate1 = date_timestamp_get($date1);
$date2 = date_create("02-08-2016 15:00");
$timestampDate2 = date_timestamp_get($date2);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>

<body>
    <h1>Exercice 4</h1>

    <p>Afficher le timestamp du jour.  </p>
    <p>Afficher le timestamp du <b>mardi 2 août 2016 à 15h00.</b></p>

    <p>===================================</p>

    <?= $timestampDate1  . " - " . date("Y-m-d", $time) ?><br>
    <?= $timestampDate2 . " - " . "02-08-2016 15:00"?>

</body>

</html>