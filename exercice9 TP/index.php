<?php
$postOk = false;
$message = "merci de séléctionné une date";
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") { // collect value of input field
    $time = time();
    $mouth = $_POST["selectmouth"];
    $year = $_POST["selectyear"];

    $timestampDateSelect = date_timestamp_get(date_create("$year-$mouth-01"));
    $firstDayName = date("l", $timestampDateSelect);

    var_dump($firstDayName);
    $postOk = true;
    $message = $_POST["selectmouth"] . " - " . $_POST["selectyear"];
} else {
    $postOk = false;
    $message = "merci de séléctionné une date";
}



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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>exo9 TP calendrier</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Exercice 9</h1>
                <p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. <br>
                    En fonction des choix, afficher un calendrier comme celui-ci :</p>
                <a href="http://icalendrier.fr/media/imprimer/2017/mensuel/calendrier-2017-mensuel-bigthumb.png">Image du calendrier exemple</a>
                <hr>

            </div>
            <div class="col-10">
                <form action="index.php" method="post">
                    <label for="selectmouth">choisir un mois</label>
                    <select id="selectmouth" name="selectmouth" required>
                        <option value="" disabled selected>. . .</option>
                        <option value="january">Janvier</option>
                        <option value="february">Fevrier</option>
                        <option value="march">Mars</option>
                        <option value="april">Avril</option>
                        <option value="may">Mai</option>
                        <option value="june">Juin</option>
                        <option value="july">Juillet</option>
                        <option value="august">Août</option>
                        <option value="september">Septembre</option>
                        <option value="october">Octobre</option>
                        <option value="november">Novembre</option>
                        <option value="december">Decembre</option>
                    </select><br>
                    <label for="selectyear">choisir une année</label>
                    <select id="selectyear" name="selectyear" required>
                        <option value="" disabled selected>. . .</option>
                        <?php for ($x = 1970; $x <= 2025; $x++) {
                            echo "<option value=\"" . $x . "\">" . $x . "</option>";
                        } ?>
                    </select><br>
                    <input type="submit" value="Envoyer">

                </form>
            </div><br>
            <div class="col-10 h4 bg-dark text-white text-center">
                <p><?= $message ?></p>
            </div>
            <?php
            if ($postOk) {
            ?>
            <table class="col-10">
                <tr>
                    <th class="bg-secondary text-center text-white border" style="width:10%">Lundi</th>
                    <th class="bg-secondary text-center text-white border" style="width:10%">Mardi</th>
                    <th class="bg-secondary text-center text-white border" style="width:10%">Mercredi</th>
                    <th class="bg-secondary text-center text-white border" style="width:10%">Jeudi</th>
                    <th class="bg-secondary text-center text-white border" style="width:10%">Vendredi</th>
                    <th class="bg-secondary text-center text-white border" style="width:10%">Samedi</th>
                    <th class="bg-secondary text-center text-white border" style="width:10%">Dimanche</th>
                </tr>
                <tr class="border">
                    <td class="border pb-5 pl-2 text-secondary">1</td>
                    <td class="border pb-5 pl-2 text-secondary">2</td>
                    <td class="border pb-5 pl-2 text-secondary">3</td>
                    <td class="border pb-5 pl-2 text-secondary">4</td>
                    <td class="border pb-5 pl-2 text-secondary">5</td>
                    <td class="border pb-5 pl-2 text-secondary">6</td>
                    <td class="border pb-5 pl-2 text-secondary">7</td>
                </tr>
                <tr class="border">
                    <td class="border pb-5 pl-2 text-secondary">1</td>
                    <td class="border pb-5 pl-2 text-secondary">2</td>
                    <td class="border pb-5 pl-2 text-secondary">3</td>
                    <td class="border pb-5 pl-2 text-secondary">4</td>
                    <td class="border pb-5 pl-2 text-secondary">5</td>
                    <td class="border pb-5 pl-2 text-secondary">6</td>
                    <td class="border pb-5 pl-2 text-secondary">7</td>
                </tr>
                <tr class="border">
                    <td class="border pb-5 pl-2 text-secondary">1</td>
                    <td class="border pb-5 pl-2 text-secondary">2</td>
                    <td class="border pb-5 pl-2 text-secondary">3</td>
                    <td class="border pb-5 pl-2 text-secondary">4</td>
                    <td class="border pb-5 pl-2 text-secondary">5</td>
                    <td class="border pb-5 pl-2 text-secondary">6</td>
                    <td class="border pb-5 pl-2 text-secondary">7</td>
                </tr>
                <tr class="border">
                    <td class="border pb-5 pl-2 text-secondary">1</td>
                    <td class="border pb-5 pl-2 text-secondary">2</td>
                    <td class="border pb-5 pl-2 text-secondary">3</td>
                    <td class="border pb-5 pl-2 text-secondary">4</td>
                    <td class="border pb-5 pl-2 text-secondary">5</td>
                    <td class="border pb-5 pl-2 text-secondary">6</td>
                    <td class="border pb-5 pl-2 text-secondary">7</td>
                </tr>
                <tr class="border">
                    <td class="border pb-5 pl-2 text-secondary">1</td>
                    <td class="border pb-5 pl-2 text-secondary">2</td>
                    <td class="border pb-5 pl-2 text-secondary">3</td>
                    <td class="border pb-5 pl-2 text-secondary">4</td>
                    <td class="border pb-5 pl-2 text-secondary">5</td>
                    <td class="border pb-5 pl-2 text-secondary">6</td>
                    <td class="border pb-5 pl-2 text-secondary">7</td>
                </tr>
                <tr class="border">
                    <td class="border pb-5 pl-2 text-secondary">1</td>
                    <td class="border pb-5 pl-2 text-secondary">2</td>
                    <td class="border pb-5 pl-2 text-secondary">3</td>
                    <td class="border pb-5 pl-2 text-secondary">4</td>
                    <td class="border pb-5 pl-2 text-secondary">5</td>
                    <td class="border pb-5 pl-2 text-secondary">6</td>
                    <td class="border pb-5 pl-2 text-secondary">7</td>
                </tr>



            <?php } else { ?>
                
            <?php } ?>



            

            </table>
        </div>
    </div>
</body>

</html>