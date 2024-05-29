<?php

function dayLeft($dob)
{

    $date = new DateTime($dob);
    print_r($date);
    echo "<br>";

    $dob_date = $date->getTimestamp();
    echo $dob_date;
    echo "<br>";

    $current = new DateTime();
    print_r($current);
    echo "<br>";

    $current_date = $current->getTimestamp();

    echo $current_date;
    echo "<br>";

    $difference = abs($dob_date - $current_date);
    $test = (($difference / 86400));
    echo "<br>";
    echo $test;
    echo "<br>";

    if ($test > 365) {

        $years = floor($test / 365);
        $months = floor(($test - ($years * 365)) / 30.5);
        $days = ($test - ($years * 365) - ($months * 30.5));
        echo "Daysreceived " . $test . " days <br />";
        echo $years . ' years, ' . $months . 'months, ' . $days . ' days';

    }

}

dayLeft("2021-05-11");