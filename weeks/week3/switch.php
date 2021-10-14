<?php
// class coffee exercise
// if today is Satuday, Americano
// start with the isset() function
// then introduce first GLOBAL variable
// the switch

// $variable = 'All is good';
// if(isset($variable)) {
//     echo 'Bravo!!';
// } else {
//     echo 'Not';
// }
// echo '<br>';

// starting the switch
// Logic: if something ($today variable) is set, all is well
// else, today is TODAY
// GLOBAL VARIABLES are capitalized and begin with $_GET
date_default_timezone_set('America/Los_Angeles');

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch
switch ($today) {
    case 'Saturday':
        $coffee = '<h2>Saturday is Americano day!</h2>';
        $pic = 'images/americano.jpg';
        $alt = 'Americano';
        $color = 'background: lightblue;';
        $content = 'Caffè Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. The strength of an Americano varies with the number of shots of espresso and the amount of water added.';
        break;

    case 'Sunday':
        $coffee = '<h2>Sunday is Latte day!</h2>';
        $pic = 'images/latte.jpg';
        $alt = 'Latte';
        $color = 'background: lightgreen;';
        $content = 'Caffè latte, often shortened to just latte in English, is a coffee drink of Italian origin made with espresso and steamed milk.';
        break;

    case 'Monday':
        $coffee = '<h2>Monday is Cappuccino day!</h2>';
        $pic = 'images/cap.jpg';
        $alt = 'Cappuccino';
        $color = 'background: olive;';
        $content = 'A cappuccino is an espresso-based coffee drink that originated in Italy, and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.';
        break;

    case 'Tuesday':
        $coffee = '<h2>Tuesday is Drip Coffee day!</h2>';
        $pic = 'images/coffee.png';
        $alt = 'Drip Coffee';
        $color = 'background: sienna;';
        $content = 'Brewed, or drip, coffee is made by pouring hot water onto ground coffee beans, then allowing to brew. There are several methods for doing this, including using a filter, a percolator, and a French press. ';
        break;
    
    case 'Wednesday':
        $coffee = '<h2>Wednesday is Green Tea day!</h2>';
        $pic = 'images/green-tea.jpg';
        $alt = 'Green Tea';
        $color = 'background: yellow;';
        $content = 'Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asia.';
        break;
    
    case 'Thursday':
        $coffee = '<h2>Thursday is Pumpkin Spice Latte day!</h2>';
        $pic = 'images/pumpkin.jpg';
        $alt = 'Pumpkin Spice Latte';
        $color = 'background: orange;';
        $content = 'The Pumpkin Spice Latte is a coffee drink made with a mix of traditional autumn spice flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice.';
        break;
    
    case 'Friday':
        $coffee = '<h2>Friday is Espresso day!</h2>';
        $pic = 'images/espresso.jpg';
        $alt = 'Espresso';
        $color = 'background: mediumpurple;';
        $content = 'Espresso is a coffee-brewing method of Italian origin, in which a small amount of nearly boiling water is forced under 9–10 bars of pressure through finely-ground coffee beans. Espresso coffee can be made with a wide variety of coffee beans and roast degrees.';
        break;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Switch Classwork Exercise</title>
    <style>
        html {
            color: black;
            <?php echo $color; ?>            
        }

        .wrapper {
            width: 1100px;
            margin: 20px auto;
        }

        li {
            list-style-type: none;
        }
        
        li a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>My Switch Classwork Exercise</h1>
        <?php echo $coffee;?>
        <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>" />
        <p><?php echo $content; ?></p>

        <h2>Check out our daily specials</h2>
        <ul>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
        </ul>
    </div> <!-- end wrapper -->
</body>

</html>