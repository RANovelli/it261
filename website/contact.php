<?php
include('config.php');
include('includes/header.php'); ?>

<div id="wrapper">

    <main>
        <h1><?php echo $headline; ?></h1>
        <p>Aliquip sit in sint consequat cillum cupidatat anim cillum eu enim quis ipsum. Amet exercitation officia nostrud excepteur. Deserunt nostrud id id sunt labore Lorem ea tempor.Quis voluptate dolore adipisicing esse excepteur exercitation.</p>
        <h2>Please fill out the form</h2>
        <?php include('includes/form.php'); ?>
    </main>

    <aside>
        <h3>Form Aside</h3>
        <p>Aliquip sit in sint consequat cillum cupidatat anim cillum eu enim quis ipsum. Amet exercitation officia nostrud excepteur.</p>
        <img src="images/seattle.jpg" alt="mid-century seattle">
    </aside>

    <?php include('includes/footer.php'); ?>