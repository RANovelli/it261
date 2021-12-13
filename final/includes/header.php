<?php
// index page is home page of website
// cannot access unless logged in as user or register first
session_start();

// if user not logged in correctly, directed to login page
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('Location:login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html class="<?php
                if (basename($_SERVER['PHP_SELF']) !== 'daily.php') {
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
                <img id="logo" src="images/palmtree.jpg" alt="logo" />
            </a>
            <?php if (isset($_SESSION['success'])) : ?>
    <div class="success">
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div> <!-- end success div -->
<?php endif;

if (isset($_SESSION['username'])) : ?>
    <div class="welcome-logout">
        <h3>
            Hello <?php echo $_SESSION['username']; ?>
        </h3>
        <p><a href="index.php?logout='1'">Log out</a></p>
    </div> <!-- end welcome-logout div -->
<?php endif; ?>
            <nav>
                <ul>
                    <?php
                    echo my_nav($nav);
                    ?>
                </ul>
            </nav>
        </div> <!-- end header-inner -->
    </header>