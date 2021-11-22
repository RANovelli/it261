<?php
include('config.php');
include('includes/header.php');
?>

<div id="wrapper">

    <main>
        <h1><?php echo $headline; ?></h1>
    
        <table>
            <?php foreach ($rocknroller as $name => $image) : ?>
                <tr>
                    <td><img src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
                    <td class="text"><?php echo str_replace('_', ' ', $name); ?></td>
                    <td class="text"><?php echo substr($image, 6); ?></td>
                    <td><img src="images/<?php echo substr($image, 0, 3); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>

    <aside>

    </aside>
    <?php include('includes/footer.php'); ?>