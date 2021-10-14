<?php
date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

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
?>

<!DOCTYPE html>
<html class="<?php
    if(basename($_SERVER['PHP_SELF']) !== 'daily.php') {
        echo $none;
    } else {
        echo $color;
    }
?>" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <title><?php echo $title; ?></title>
</head>

<body class="<?php echo $body; ?>">
    <header>
        <div class="header-inner">
            <a href="index.php">
                <img id="logo" src="images/logo.png" alt="logo" />
            </a>
            <nav>
                <!-- <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                </ul> -->
                <ul>
                    <?php
                    foreach ($nav as $key => $value) {
                        if (THIS_PAGE == $key) {
                            echo '
                                   <li><a class="current" href="' . $key . '">' . $value . '</a></li> 
                                ';
                        } else {
                            echo '
                            <li><a href="' . $key . '">' . $value . '</a></li>
                            ';
                        }
                    }
                    ?>
                </ul>
            </nav>
        </div> <!-- end header-inner -->
    </header>