<?php
$postOk = false; // verif pour le message
$scriptWrite = "";
$message = "merci de séléctionner une date";
// on verif si le post a bien ete envoyé
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $time = time();
    // on recupere les 2 valeurs du formulaire ( mois et année)
    $mouth = $_POST["selectmouth"];
    $year = $_POST["selectyear"];
    //on recupere le timestamp du 1er jour du mois selectioné
    $timestampDateSelect = date_timestamp_get(date_create("$year-$mouth-01"));
    // variable qui recupere le nom du jour ( lundi, mardi ...) en FR
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
    $firstDayName = strftime("%A", $timestampDateSelect);
    // nombre je jour dans le mois
    $dayOnMouth = cal_days_in_month(CAL_GREGORIAN, $mouth, $year);
    //si le premier jour du mois est tel jour alors on lance un FOR avec une suite de scripte qui ecrit dans les cases le num du jour
    if ($firstDayName == "lundi") {
        for ($i = 1; $i <= $dayOnMouth; $i++) {
            $scriptWrite .= "<script>document.getElementById('calendarCase" . ($i + 0) . "').innerHTML = '" . $i . "'</script><br>";
        }
    };
    if ($firstDayName == "mardi") {
        for ($i = 1; $i <= $dayOnMouth; $i++) {
            $scriptWrite .= "<script>document.getElementById('calendarCase" . ($i + 1) . "').innerHTML = '" . $i . "'</script><br>";
        }
    };
    if ($firstDayName == "mercredi") {
        for ($i = 1; $i <= $dayOnMouth; $i++) {
            $scriptWrite .= "<script>document.getElementById('calendarCase" . ($i + 2) . "').innerHTML = '" . $i . "'</script><br>";
        }
    };
    if ($firstDayName == "jeudi") {
        for ($i = 1; $i <= $dayOnMouth; $i++) {
            $scriptWrite .= "<script>document.getElementById('calendarCase" . ($i + 3) . "').innerHTML = '" . $i . "'</script><br>";
        }
    };
    if ($firstDayName == "vendredi") {
        for ($i = 1; $i <= $dayOnMouth; $i++) {
            $scriptWrite .= "<script>document.getElementById('calendarCase" . ($i + 4) . "').innerHTML = '" . $i . "'</script><br>";
        }
    };
    if ($firstDayName == "samedi") {
        for ($i = 1; $i <= $dayOnMouth; $i++) {
            $scriptWrite .= "<script>document.getElementById('calendarCase" . ($i + 5) . "').innerHTML = '" . $i . "'</script><br>";
        }
    };
    if ($firstDayName == "dimanche") {
        for ($i = 1; $i <= $dayOnMouth; $i++) {
            $scriptWrite .= "<script>document.getElementById('calendarCase" . ($i + 6) . "').innerHTML = '" . $i . "'</script><br>";
        }
    };


    $postOk = true; // verif pour le message
    //verif du mois selectioné et le nomé en FR pour le message
    if ($_POST["selectmouth"] == "01") {
        $nameMouth = "Janvier";
    };
    if ($_POST["selectmouth"] == "02") {
        $nameMouth = "Fevrierr";
    };
    if ($_POST["selectmouth"] == "03") {
        $nameMouth = "Mars";
    };
    if ($_POST["selectmouth"] == "04") {
        $nameMouth = "Avril";
    };
    if ($_POST["selectmouth"] == "05") {
        $nameMouth = "Mai";
    };
    if ($_POST["selectmouth"] == "06") {
        $nameMouth = "Juin";
    };
    if ($_POST["selectmouth"] == "07") {
        $nameMouth = "Juillet";
    };
    if ($_POST["selectmouth"] == "08") {
        $nameMouth = "Août";
    };
    if ($_POST["selectmouth"] == "09") {
        $nameMouth = "Septembre";
    };
    if ($_POST["selectmouth"] == "10") {
        $nameMouth = "Octobre";
    };
    if ($_POST["selectmouth"] == "11") {
        $nameMouth = "Novembre";
    };
    if ($_POST["selectmouth"] == "12") {
        $nameMouth = "Decembre";
    };

    $message = $nameMouth . " - " . $_POST["selectyear"]; //le message
} else {
    $postOk = false; // verif pour le message
    $message = "merci de séléctionner une date"; //le message
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
            <div class="col-10 mb-3">
                <form action="index.php" method="post">
                    <label for="selectmouth">choisir un mois</label>
                    <select id="selectmouth" name="selectmouth" required>
                        <option value="" disabled selected>. . .</option>
                        <option value="01">Janvier</option>
                        <option value="02">Fevrier</option>
                        <option value="03">Mars</option>
                        <option value="04">Avril</option>
                        <option value="05">Mai</option>
                        <option value="06">Juin</option>
                        <option value="07">Juillet</option>
                        <option value="08">Août</option>
                        <option value="09">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Decembre</option>
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
            <div class="col-8 h4 py-2 bg-dark text-white text-center">
                <span><?= $message ?></span>
            </div>
            <?php
            if ($postOk) {
            ?>
                <table class="col-8">
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
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase1"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase2"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase3"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase4"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase5"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase6"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase7"></td>
                    </tr>
                    <tr class="border">
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase8"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase9"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase10"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase11"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase12"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase13"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase14"></td>
                    </tr>
                    <tr class="border">
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase15"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase16"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase17"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase18"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase19"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase20"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase21"></td>
                    </tr>
                    <tr class="border">
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase22"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase23"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase24"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase25"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase26"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase27"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase28"></td>
                    </tr>
                    <tr class="border">
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase29"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase30"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase31"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase32"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase33"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase34"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase35"></td>
                    </tr>
                    <tr class="border">
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase36"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase37"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase38"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase39"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase40"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase41"></td>
                        <td class="border pb-4 pl-1 text-secondary" id="calendarCase42"></td>
                    </tr>
                </table>
            <?php }; ?>
        </div>
    </div>
    <?= $scriptWrite; ?>
    <script>
        for (let i = 1; i <= 42; i++) {
            let idcalendar = document.getElementById("calendarCase" + i );
            if (idcalendar.innerHTML == "") {
                idcalendar.style.backgroundColor = 'lightgrey' ;
            }
        }


    </script>
</body>

</html>