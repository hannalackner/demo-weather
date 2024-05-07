<?php

use Alisatresnjic\Weather\Day;
use Alisatresnjic\Weather\History;

require 'vendor/autoload.php';

$history = new History();
$history->addWeatherData(new Day("2024-05-01", "sunny"));

$date = $_GET['date'];

if ($date) {
    $weather = $history->getWeatherByDate($date);
    if ($weather) {
        echo "Das Wetter am $date war " . $weather->getDescription();
    } else {
        echo "Es sind keine Daten vorhanden für den $date";
    }
} else {
    echo "Bitte gib ein Datum ein.";
}