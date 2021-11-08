<?php
date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// create function for nav so function is called on header.php
function my_nav($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a href="'.$key.'" class="current">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        } // end else
    } // end foreach
    return $my_return;
} // end function

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home Page of Ryan Novelli\'s IT 261 Website';
        $body = 'home';
        $headline = 'Welcome to Ryan Novelli\'s IT 261 Website Home Page';
        break;

    case 'about.php':
        $title = 'About Page of Ryan Novelli\'s IT 261 Website';
        $body = 'about inner';
        $headline = 'Welcome to Ryan Novelli\'s IT 261 Website About Page';
        break;

    case 'daily.php':
        $title = 'Ryan Novelli\'s IT 261 Daily 45 Page';
        $body = 'daily inner';
        $headline = 'Ryan\'s Daily 45s!!';
        break;

    case 'project.php':
        $title = 'Project Page of Ryan Novelli\'s IT 261 Website';
        $body = 'project inner';
        $headline = 'Welcome to Ryan Novelli\'s IT 261 Website Project Page';
        break;

    case 'contact.php':
        $title = 'Contact Page of Ryan Novelli\'s IT 261 Website';
        $body = 'contact inner';
        $headline = 'Welcome to Ryan Novelli\'s IT 261 Website Contact Page';
        break;

    case 'gallery.php':
        $title = 'Gallery Page of Ryan Novelli\'s IT 261 Website';
        $body = 'gallery inner';
        $headline = 'Welcome to Ryan Novelli\'s IT 261 Website Gallery Page';
        break;
}

//beginning of hw3 
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case 'Monday':
        $color = 'olive';
        $none = '';
        break;
    case 'Tuesday':
        $color = 'sienna';
        $none = '';
        break;
    case 'Wednesday':
        $color = 'pink';
        $none = '';
        break;
    case 'Thursday':
        $color = 'orange';
        $none = '';
        break;
    case 'Friday':
        $color = 'mediumpurple';
        $none = '';
        break;
    case 'Saturday':
        $color = 'lightblue';
        $none = '';
        break;
    case 'Sunday':
        $color = 'lightgreen';
        $none = '';
        break;
}

// switch
switch ($today) {
    case 'Monday':
        $record = 'Monday: Shuggie Otis "Ice Cold Daydream" Epic Records, 1971';
        $pic = 'images/shuggie.jpg';
        $alt = 'Shuggie Otis 45';
        $content = 'The B-side of "Strawberry Letter 23," which eventually becoming a hit for Brothers Johnson in 1977, "Ice Cold Daydream" is a groovy funk workout more than worthy of the spotlight. Unbelievably, Shuggie penned these tracks when he was only 17 years old.';
        break;

    case 'Tuesday':
        $record = 'Tuesday: The Wrongh Black Bag "Wake Me, Shake Me"<br> Mainstream Records, 1968';
        $pic = 'images/wrongh.jpg';
        $alt = 'Wrongh Black Bag 45';
        $content = 'New Haven, CT based group delivering a ferocious cover of Al Kooper\'s "Wake Me, Shake Me," originally recorded by The Blues Project in 1966.';
        break;

    case 'Wednesday':
        $record = 'Wednesday: The Chocolate Watch Band<br> "Are You Gonna Be There (At The Love In)"<br> Tower Records, 1967';
        $pic = 'images/cwb.jpg';
        $alt = 'Chocolate Watchband 45';
        $content = 'Inspired by the film "The Love-Ins," The Chocolate Watch Band, referred to as America\'s answer to The Rolling Stones, wrote and recorded this 60s punk classic in one day.';
        break;

    case 'Thursday':
        $record = 'Thursday: April Silva "Under My Thumb"<br> Commonwealth Records, 1966';
        $pic = 'images/april.jpg';
        $alt = 'April Silva 45';
        $content = 'Another tip of the hat to The Stones for Thursday. April Silva, Diplomacy Records\' president Bill Silva’s daughter, recorded “Under My Thumb” backed up by The Brymers. This blistering version, replete with handclaps and a stomping beat, rivals, if not surpasses, the original with sheer force.';
        break;

    case 'Friday':
        $record = 'Friday: Dick Turpin "Madeline" Evolution Records, 1970';
        $pic = 'images/turpin.jpg';
        $alt = 'Dick Turpin 45';
        $content = 'It\'s a total mystery as to the identity of Dick Turpin, but the B-side of his (or their) only single is a class act indeed. Produced by Ed Welch, Madeline is a late Mod/Freakbeat dancer with its gritty power-chords, pounding piano and ripping lead break; but the switch in tempo with the Mott The Hoople piano motif is really surprising and takes this number somewhere else altogether. Wow.';
        break;

    case 'Saturday':
        $record = 'Saturday: Malcolm Mitchell "Sightseer" DOT Records, 1969';
        $pic = 'images/malcolm.jpg';
        $alt = 'Malcolm Mitchell 45';
        $content = 'Little is known about Malcolm Mitchell, other than he joined Denver\'s The Boenzee Cryque band in 1966. He released this lysergic, psychedelic relic in 1969, but it has an almost "Revolver-esque" feel to it, showcasing Harrison-like 7th chord accents, punctuated with a tastful horn section. It\'s a shame this single never saw any action in the charts.';
        break;

    case 'Sunday':
        $record = 'Sunday: Velvet Seed "Flim Flam Man" MAI Records, 1968';
        $pic = 'images/velvet.jpg';
        $alt = 'Velvet Seed 45';
        $content = 'Another obscure group with this "rare-as-hens-teeth" 45, The Velvet Seed started in Rumford, Maine, and not much else is known. "Flim Flam Man" is a fuzz-laced monstrosity with hypnotic melodies floating atop. It took me years to acquire a copy, but it was well worth the trouble. A true psychedelic masterpiece.';
        break;
}

// emailable form php
$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$wines = '';
$regions = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$gender_Err = '';
$wines_Err = '';
$regions_Err = '';
$comments_Err = '';
$privacy_Err = '';
$phone_Err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['first_name'])) {
        $first_name_Err = 'Please fill out your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_Err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_Err = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $gender_Err = 'Please select your gender';
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['wines'])) {
        $wines_Err = 'Please choose your wines';
    } else {
        $wines = $_POST['wines'];
    }

    if ($_POST['regions'] == NULL) {
        $regions_Err = 'Please select your region';
    } else {
        $regions = $_POST['regions'];
    }

    if (empty($_POST['comments'])) {
        $comments_Err = 'Please share your comments with us';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_Err = 'Please agree to our privacy statement';
    } else {
        $privacy = $_POST['privacy'];
    }

    if (empty($_POST['phone'])) {  // if empty, type in your number
        $phone_Err = 'Please enter your phone number';
    } elseif (array_key_exists('phone', $_POST)) {
        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_Err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        }
    }

    // the logic is if post wines is NOT empty, grab the wines and display them
    function my_wines() {
        $my_return = '';
        if(!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        }
        return $my_return;
    } // closes function

    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['gender'],
        $_POST['wines'],
        $_POST['regions'],
        $_POST['comments'],
        $_POST['privacy']
    )) {
        $to = 'ryan.a.novelli@gmail.com';
        $subject = 'Test Email,' .date('m/d/y');
        $body = '
        First name: '.$first_name.' '.PHP_EOL.'
        Last name: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Gender: '.$gender.' '.PHP_EOL.'
        Wines: '.my_wines().' '.PHP_EOL.'
        Region: '.$regions.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';

        $headers = array(
            'From' => 'no-reply@gmail.com',
            'Reply-To' => ''.$email.''
        );

        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
    }
} // end if server request

// random images

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

function random_pics($photos) {
    $i = rand(0, 4);
    $selected_image = ''. $photos[$i].'.jpg';
    echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';      
}