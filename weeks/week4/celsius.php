<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Week 4 Celsius Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="
        <?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>
    " method="post">
        <fieldset>
            <legend>Celsius Form</legend>
            <label for="cel">Enter your Celsius Value:</label>
            <input type="number" name="cel">
            <input type="submit" value="Convert it!">
            <p><a href="">Reset!</a></p>
        </fieldset>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['cel'])) {
                $cel = $_POST['cel'];
                $int_cel = intval($cel);
                $far = ($int_cel * 9/5) + 32;
                $friendly_far = number_format($far, 0);
                if($cel == NULL) {
                    echo '<h2>Please fill out the Celsius Value</h2>';
                } elseif($far <= 32) {
                    echo '<p> '. $friendly_far.' degrees and it\'s pretty cold!</p>';
                } elseif($far <= 40) {
                    echo '<p> '. $friendly_far.' degrees and it\'s not as cold!</p>';
                } elseif($far <= 50) {
                    echo '<p> '. $friendly_far.' degrees and it\'s getting warmer!</p>';
                } elseif($far <= 60) {
                    echo '<p> '. $friendly_far.' degrees and I\'m liking it!</p>';
                } elseif ($far <= 70) {
                    echo '<p> '. $friendly_far.' degrees and I\'m really liking it!</p>';
                } elseif ($far <= 80) {
                    echo '<p> '. $friendly_far.' degrees and I\'m going swimming!</p>';
                } elseif ($far <= 95) {
                    echo '<p> '. $friendly_far.' degrees and it\'s getting hot!</p>';
                } else {
                    echo '<p>It is really hot!</p>';
                }
            } // end isset
        } // end server post
    ?>
</body>

</html>