<?php
// index page is home page of website
// cannot access unless logged in as user or register first
session_start();

include('config.php');

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

include('includes/header.php');

// notification message - if successful, welcome end user
if (isset($_SESSION['success'])) : ?>
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
    </div> !-- end welcome-logout div -->
<?php endif; ?>

</header>

<div id="wrapper">
    <h1>Welcome to the home page!</h1>

</div> <!--  end wrapper -->

<?php
include('includes/footer.php');
