<?php

function CalculateReadTime ($targetString) {
    // return a reading time in whole minutes
    
    $targetString = strip_tags($targetString);
    
    // average reading rate is around 200 WPM
    $baseMinutes = floor(str_word_count($targetString) / 200);
    
    // calculate the number of seconds based on the decimal place
    $baseSeconds = ((str_word_count($targetString) / 200) - $baseMinutes) * 60;

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