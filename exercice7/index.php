<?php
$time = time() + (60*60*24*20);
$message = date("d/m/Y", $time) ;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
</head>

<body>
    <h1>Exercice 7</h1>
    <p>Afficher la date du jour + 20 jours.</p>


    <p>===================================</p>

    <?= $message ?>


</body>

</html>