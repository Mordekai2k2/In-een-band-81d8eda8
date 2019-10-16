<?php
echo "Het albumoverzicht:\n\n";
$musig = array(
    "4.50" => "Citizen of Glass kost €4,50.",
    "9" => "Night kost €9,-.",
    "5" => "New Eyes kost €5,-.",
    "10" => "Strange Trails kost €10,-.",
);
$totaal = 4.5 + 9 + 10 + 5;
$albums = count($musig);
$gemiddelde = $totaal / $albums;
foreach ($musig as $yeet) {
    echo $yeet. PHP_EOL;
}
echo "\nHet totaalbedrag is: €$totaal.". PHP_EOL;
echo "De gemiddelde prijs is: €$gemiddelde.". PHP_EOL;