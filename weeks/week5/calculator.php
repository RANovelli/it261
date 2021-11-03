<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="
    <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>
    " method="post">
        <fieldset>
            <label for="name">NAME</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
            <label for="miles">How many miles?</label>
            <input type="number" name="miles" value="<?php if (isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ?>">
            <label for="hours">How many hours per day?</label>
            <input type="number" name="hours" value="<?php if (isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>">
            <label for="amount">Price per gallon</label>
            <ul>
                <li><input type="radio" name="amount" value="3.00" <?php if (isset($_POST['amount']) && $_POST['amount'] == '3.00') echo 'checked="checked" '; ?>>$3.00</li>
                <li><input type="radio" name="amount" value="3.50" <?php if (isset($_POST['amount']) && $_POST['amount'] == '3.50') echo 'checked="checked" '; ?>>$3.50</li>
                <li><input type="radio" name="amount" value="4.00" <?php if (isset($_POST['amount']) && $_POST['amount'] == '4.00') echo 'checked="checked" '; ?>>$4.00</li>
            </ul>
            <label for="fuel">Fuel Efficiency</label>
            <select name="fuel">
                <option value="" NULL <?php if (isset($_POST['fuel']) && $_POST['fuel'] == NULL) echo 'selected="unselected"'; ?>>Select fuel efficiency</option>
                <option value="10" <?php if (isset($_POST['fuel']) && $_POST['fuel'] == '10') echo 'selected="selected"'; ?>>Terrible</option>
                <option value="20" <?php if (isset($_POST['fuel']) && $_POST['fuel'] == '20') echo 'selected="selected"'; ?>>Getting Better</option>
                <option value="30" <?php if (isset($_POST['fuel']) && $_POST['fuel'] == '30') echo 'selected="selected"'; ?>>Good</option>
                <option value="40" <?php if (isset($_POST['fuel']) && $_POST['fuel'] == '40') echo 'selected="selected"'; ?>>Great</option>

            </select>

            <input type="submit" value="Calculate">
            <p><a href="">Reset</a></p>
        </fieldset>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error_status = FALSE;

        if (empty($_POST['name'])) {
            echo '<span class="error">Please fill out your name</span>';
            $error_status = TRUE;
        }

        if (empty($_POST['miles'])) {
            echo '<span class="error">Please fill out the distance</span>';
            $error_status = TRUE;
        }

        if (empty($_POST['hours'])) {
            echo '<span class="error">Please fill out your hours</span>';
            $error_status = TRUE;
        }

        if (empty($_POST['amount'])) {
            echo '<span class="error">Please check your gallon price</span>';
            $error_status = TRUE;
        }

        if ($_POST['fuel'] == NULL) {
            echo '<span class="error">Please choose your efficiency</span>';
            $error_status = TRUE;
        }

        if (isset(
            $_POST['name'],
            $_POST['miles'],
            $_POST['hours'],
            $_POST['amount'],
            $_POST['fuel']
        )) {
            $name = $_POST['name'];
            $miles = (int)$_POST['miles'];
            $hours = (int)$_POST['hours'];
            $amount = (int)$_POST['amount'];
            $fuel = (int)$_POST['fuel'];
            if ($fuel == 0) {
                $fuel = 1;
            }
            $speed = 65;
            $gallon = $miles / $fuel;
            $cost = $gallon * $amount;
            $total_hours = $miles / $speed;
            if ($hours == 0) {
                $hours = 1;
            }
            $days = $total_hours / $hours;

            if ($error_status == FALSE) {

            echo '
            <div class="box">
                <h2>Calculator Results</h2>
                <p>' . $name . ', you will be driving <b>' . $miles . ' miles</b></p>
                <p>Your fuel efficiency is <b>' . $fuel . ' miles per gallon</b></p>
                <p>Your total cost for gas will be <b>$' . number_format($cost, 2) . ' dollars</b></p>
                <p>You will be driving a total of <b>' . number_format($total_hours) . ' hours equating to ' . number_format($days) . ' days</b></p>
            </div>
            ';
            } // end error status

        } // close isset

    } // server request
    ?>
</body>

</html>