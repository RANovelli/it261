<?php
include('config.php');
include('includes/header.php'); ?>

<div id="wrapper">
    <main>
        <h1><?php echo $headline; ?></h1>
        <h2>Please tell us about your favorite architecture!</h2>
        <?php include('includes/form.php'); ?>
    </main>

    <aside>
        <h3 class="author">About the Author</h3>
        <img id="snow" src="images/profile_snow.jpg" alt="snow" />
        <p class="author">I'm a guitar player, songwriter, touring musician, record collector, and DJ, with a deep interest in all things Mid-Century. I'm a dual US/Italian citizen with the goal of living between the Pacific Northwest and Italy.</p>
        <p class="author">I am learning web development to assist fellow artists, musicians, venues, and record labels in fulfilling IT-related requirements necessary to succeed in today's market, as well as having the ability to generate revenue independently from anywhere in the world.</p>
    </aside>

    <?php
    include('includes/footer.php');
