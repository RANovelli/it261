<?php
include('config.php');
include('includes/header.php'); ?>

<div id="wrapper">
    <main class="main">
        <h1><?php echo $headline; ?></h1>

        <?php

        $sql = 'SELECT * FROM houses';

        // connect to database using mysqli_connect() function

        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
            or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

        // create variable $result

        $result = mysqli_query($iConn, $sql)
            or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

        // if statement --- if more than 0 rows, all good

        if (mysqli_num_rows($result) > 0) { ?>
            <table>
                <?php
                // while loop to return array
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td><img class="center" src="images/image' . $row['houses_id'] . '.jpg" alt="' . $row['name'] . '"></td>';
                    echo '<td>' . $row['name'] . '<br><a href="project-view.php?id=' . $row['houses_id'] . '">More Info</a></td>';
                    echo '<td>Architect:<br>' . $row['architect'] . '</td>';
                    echo '<td>Year Built:<br>' . $row['year_built'] . '</td>';
                    echo '</tr>';
                } // closing while
                ?>
            </table>
        <?php
        } else {
            echo 'Houston, we have a problem!!';
        }


        mysqli_free_result($result);
        mysqli_close($iConn);

        ?>
    </main>

    <?php
    include('includes/footer.php');
