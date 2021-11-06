<?php
include('config.php');
include('includes/header.php');
?>

<div id="wrapper">

    <main>
        <h1 class="headline"><?php echo $headline; ?></h1>
        <h2 class="record"><?php echo $record; ?></h2>
        <p class="content"><?php echo $content; ?></p>

        <h2 class="headline">Wild sides for each day of the week!!</h2>
        <ul>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
        </ul>
    </main>

    <aside>
        <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>" />
    </aside>
    <?php include('includes/footer.php'); ?>