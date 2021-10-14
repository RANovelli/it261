<?php
// the if statement
// LOGIC - if temp is < 90, all is well. else, gonna be a scorcher!!

$temp = 91;

if($temp <= 90) {
    echo 'not that hot';
} else {
    echo 'It\'s a scorcher!';
}

echo '<br>';
// extend if statement with elseif

$temp = 84;
if($temp <= 78) {
    echo 'It\'s tolerable.';
} elseif($temp <= 85) {
    echo 'It\'s getting hotter...';
} else {
    echo 'It\'s really hot!!';
}
echo '<br>';

// fun with logic
// if my sales > 800000, I'll make 10% bonus of my base salary
// if my sales >= 600000, I'll make 5% bonus 

$sales = 599000;
$salary = 200000;

if($sales >= 800000) {
    $salary *= 1.10;
    echo '$' . $salary . '';
} elseif($sales >= 600000) {
    $salary *= 1.05;
    echo '$' . $salary . '';
} else {
    echo '$' . $salary . '';
}
echo '<br>';

