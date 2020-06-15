<?php
$time = time();
$message = date("d-m-y", $time);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>

<body>
    <h1>Exercice 2</h1>

    <p>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16).</p>

    <p>===================================</p>

    <?= $message ?>

</body>

</html>