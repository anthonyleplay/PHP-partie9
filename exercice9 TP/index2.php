<?php
$postOk = false; // verif pour le message
$message = "Merci de séléctionner une date";
$yearMin = 1970;
$yearMax = 2025;
$daysInWeekArray = [ 
    "lundi" => 1 ,
    "mardi" => 2 ,
    "mercredi" => 3 ,
    "jeudi" => 4 ,
    "vendredi" => 5 ,
    "samedi" => 6 ,
    "dimanche" => 7
];
$monthsArray = [ 
    "01" => "janvier" ,
    "02" => "fevrier" ,
    "03" => "mars" ,
    "04" => "avril" ,
    "05" => "mai" ,
    "06" => "juin" ,
    "07" => "juillet" ,
    "08" => "août" ,
    "09" => "septembre" ,
    "10" => "octobre" ,
    "11" => "novembre" ,
    "12" => "decembre" 
];
// on verif si le post a bien ete envoyé
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // on recupere les 2 valeurs du formulaire ( mois et année)
    $month = $_POST["selectmonth"];
    $year = $_POST["selectyear"];
    //on recupere le timestamp du 1er jour du mois selectioné
    $timestampDateSelect = date_timestamp_get(date_create("$year-$month-01"));
    // variable qui recupere le nom du jour ( lundi, mardi ...) en FR
    setlocale(LC_TIME, "fr_FR.utf8", "fra");
    $firstDayMonthName = strftime("%A", $timestampDateSelect);
    // nombre je jour dans le mois
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    //si le premier jour du mois est tel jour alors on lance un FOR avec une suite de scripte qui ecrit dans les cases le num du jour
    



    $postOk = true; // verif pour le message
    //verif du mois selectioné et le nommé en FR pour le message
    $message = $monthsArray[$month] . " - " . $year; //le message
} else {
    $postOk = false; // verif pour le message
    $message = "Merci de séléctionner une date"; //le message
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>exo9 TP calendrier</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mb-3 border py-2 bg-dark text-white">
                <h1>Exercice 9</h1>
                <p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. <br>
                    En fonction des choix, afficher un calendrier comme celui-ci :</p>
                <a href="http://icalendrier.fr/media/imprimer/2017/mensuel/calendrier-2017-mensuel-bigthumb.png">Image du calendrier exemple</a>


            </div>
            <div class="col-12 col-md-6 mb-3 border py-5 text-center bg-dark text-white">
                <form action="index2.php" method="post">
                    <label for="selectmonth">choisir un mois</label>
                    <select id="selectmonth" name="selectmonth" required>
                        <option value="" disabled selected>. . .</option>
                        <?php foreach ($monthsArray as $key => $value) {?>
                            <option value="<?= $key ?>" <?= isset($_POST["selectmonth"]) && $_POST["selectmonth"] == $key ? "selected" : "" ?>><?= $value ?></option>;
                        <?php } ?>
                    </select><br>
                    <label for="selectyear">choisir une année</label>
                    <select id="selectyear" name="selectyear" required>
                        <option value="" disabled selected>. . .</option>
                        <?php for ($year = $yearMin; $year <= $yearMax; $year++) {?>
                            <option value="<?= $year ?>" <?= isset($_POST["selectyear"]) && $_POST["selectyear"] == $year ? "selected" : "" ?>><?= $year ?></option>;
                        <?php } ?>
                    </select><br>
                    <input type="submit" value="Envoyer">

                </form>
            </div>
            <div class="col-12 col-md-8 h4 py-2 bg-secondary text-white text-center">
                <span><?= $message ?></span>
            </div>
            <?php
            if ($postOk) {
            ?><div class="col-12 col-md-8 border py-2 text-center bg-white">
                <table>
                    <tr>
                        <th class="bg-dark text-center text-white border" style="width:10%">Lundi</th>
                        <th class="bg-dark text-center text-white border" style="width:10%">Mardi</th>
                        <th class="bg-dark text-center text-white border" style="width:10%">Mercredi</th>
                        <th class="bg-dark text-center text-white border" style="width:10%">Jeudi</th>
                        <th class="bg-dark text-center text-white border" style="width:10%">Vendredi</th>
                        <th class="bg-dark text-center text-white border" style="width:10%">Samedi</th>
                        <th class="bg-dark text-center text-white border" style="width:10%">Dimanche</th>
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
              </div>
            <?php }; ?>
        </div>
    </div>
    <?= $scriptWrite; ?>
    <script>
        for (let i = 1; i <= 42; i++) {
            let idcalendar = document.getElementById("calendarCase" + i);
            if (idcalendar.innerHTML == "") {
                idcalendar.style.backgroundColor = "#f4f5f8";
            };
        };
    </script>
</body>

</html>