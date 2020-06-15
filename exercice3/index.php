<?php
$time = time();
$message = date("l d F Y", $time);
setlocale(LC_TIME, 'fr_FR.utf8','fra');
$messageFR = ucfirst(strftime('%A %d %B %Y')); 
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>

<body>
    <h1>Exercice 3</h1>

    <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)</p>
    <p>Bonus : Le faire en français.</p>

    <p>===================================</p>

    <?= $message ?><br>
    <?= $messageFR ?>

</body>

</html>