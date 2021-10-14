<?php
// date function

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
echo '<br>';

echo date("H:i");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
echo '<br>';
// why change from 12 to 24 hour clock? 
// To use if/elseif statement showing different messages based on time of day
// if time < 11 it's morning 
// if time < 16 it's afternoon
// else it's evening
// assign time to variable
$time = date("H:i");
if($time <= 11) {
    echo '<h2 style="color:green;">Buongiorno, Ryan</h2>';
} elseif($time <= 16) {
    echo '<h2 style="color:orange;">Buon pomeriggio, Ryan</h2>';
} else {
    echo '<h2 style="color:blue;">Buonasera, Ryan</h2>';
}
// we can place HTML tags inside echo