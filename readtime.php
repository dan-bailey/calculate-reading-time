<?php

function CalculateReadTime ($targetString) {
    // return a reading time in whole minutes
    
    $targetString = strip_tags($targetString);
    $wordNumber = str_word_count($targetString);
    // average reading rate is around 200 WPM
    $totalTime = $wordNumber / 200;
    // turn result into an integer and that's minutes
    $baseMinutes = (int)$totalTime;
    // calculate the number of seconds based on the decimal place
    $baseSeconds = ($totalTime - $baseMinutes) * 60;

    // round up if over 30 seconds
    if ($baseSeconds > 30) {
        $roundMinute = 1;
    } else {
        $roundMinute = 0;
    }

    // return integer minutes plus rounded minute
    return ($baseMinutes + $roundMinute);
}

?>