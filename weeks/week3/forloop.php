<?php
// for loops

for($x = 0; $x <= 21; $x+= 3) {
    echo "The number is: $x <br>";
}
echo '<br>';

// for loop with celsius/fahrenheit converter
// do not call celsius variable outside of loop
for ($celsius = 0; $celsius <= 100; $celsius++) {
    $fahrenheit = ($celsius * 9/5) + 32;
    $friendly_fahrenheit = number_format($fahrenheit, 0);
    echo '<b>Fahrenheit:</b> '.$friendly_fahrenheit.' <b>Celsius:</b> <span style="color:red;font-weight:bold;">'.$celsius.'</span><hr>';
}
echo '<br>';

// kilometers & miles
for ($kilometers = 0; $kilometers <= 100; $kilometers++) {
    $miles = $kilometers * 0.621371;
    $friendly_miles = number_format($miles, 1);
    echo '<b>Miles:</b> <span style="color:green; font-weight:bold;">'.$friendly_miles.'</span> <b>Kilometers:</b> <span style="color:red; font-weight:bold;">'.$kilometers.'</span><br>';
}    