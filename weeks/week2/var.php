<?php
// this is my introduction to variables
// var.php
// a variable is a container for information

$name = 'Ryan';
$weather = 'Today is a rainy day';
$body_temp = 98.6;
// 98.6 is a float, 98 is an integer

echo $name;
echo '<br>';
echo 'My name is $name';
echo '<br>';
echo '<br>';
echo "My name is $name";
echo '<br>';
// if single quotes are used around a variable, the value is not displayed
// double quotes will display variable

echo 'My name is '.$name.' ';
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is '.$body_temp.' and all is well.';
echo '<br>';
$name = 'Anthony';
echo $name;
echo '<br>';
echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo $z;
echo '<br>';
$z = $x * $y;
echo $z;
echo '<br>';

//continue with name
$first_name = 'Ryan';
$last_name = 'Novelli';
echo '<br>';
echo $first_name.' '.$last_name;
echo '<br>';
echo ' '.$first_name.' '.$last_name.'';
echo '<br>';
echo 'Here are the names with a single \' quote: '.$first_name.' '.$last_name.'';
// punctuation inside single quote as follows: MUST nest variable as such '.variable_name.'
// must use ESCAPE to use apostrophe as follows: \'
echo '<br>'; 
echo "Here are the names with a double quote: $first_name $last_name";
echo '<br>';
$name = 'Ryan';
$name .= ' Novelli';
echo $name;
echo '<br>';

$x = 20;
$x *= 2;
echo $x;
echo '<br>'; 

$x = 120;
$x /= 2;
echo $x;
echo '<br>'; 

$x = 120;
$x *= .09;
echo $x;
echo '<br>'; 

// first function - number_format()
$x = 137;
$x /= 4;
//result is 34.25
$friendly_x = number_format($x, 0);
echo $friendly_x;
echo '<br>';

//second preset function - date function
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';

//arrays - cannot echo
$fruit [] = 'oranges';
$fruit [] = 'bananas';
$fruit [] = 'grapes';
$fruit [] = 'apples';
$fruit [] = 'cherries';
echo '<br>';
echo $fruit[3]; // can echo an index of an array
echo '<br>';

$fruit = array(
    'oranges',
    'bananas',
    'grapes',
    'apples',
    'cherries'
);

$fruit = [
    'oranges',
    'bananas',
    'grapes',
    'apples',
    'cherries',
    'strawberries'
];
// cannot echo an array
// echo $fruit;
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);
echo '<br>';

// another array example (website navigation)
$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Gallery';

echo $nav[0];
echo '<br>';

//associative array
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// index.php is the key of the array, Home is the value (key/value relationship)
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '</pre>';

echo '<br>';

$show = 'The Crown';
$show_actor = 'Olivia Coleman';
$show_genre = 'Historical Fiction';

echo 'My favorite series during 2020 was "'.$show.'" starring '.$show_actor.', and it is a '.$show_genre.' ';