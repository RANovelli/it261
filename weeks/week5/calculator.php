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
            <input type="text" name="name" value="">
            <label for="miles">How many miles?</label>
            <input type="text" name="miles" value="">
            <label for="hours">How many hours per day?</label>
            <input type="text" name="hours" value="">
            <label for="amount">Price per gallon</label>
            <ul>
                <li><input type="radio" name="amount" value="3.00"
                <?php if(isset($_POST['amount']) && $_POST['amount'] == '3.00') echo 'checked="checked" ' ;?>
                >$3.00</li>
                <li><input type="radio" name="amount" value="3.50"
                <?php if(isset($_POST['amount']) && $_POST['amount'] == '3.00') echo 'checked="checked" ' ;?>
                >$3.50</li>
                <li><input type="radio" name="amount" value="4.00"
                <?php if(isset($_POST['amount']) && $_POST['amount'] == '3.00') echo 'checked="checked" ' ;?>
                >$4.00</li>
            </ul>
            <label for="efficiency">Fuel Efficiency</label>
            <select name="efficiency">
                <option value="" NULL
                <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) echo 'selected="unselected"' ;?>>Select fuel efficiency</option>
                <option value="10"
                <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10') echo 'selected="selected"' ;?>
                >Terrible</option>
                <option value="20"
                <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '20') echo 'selected="selected"' ;?>
                >Getting Better</option>
                <option value="30"
                <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '30') echo 'selected="selected"' ;?>
                >Good</option>
                <option value="40"
                <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '40') echo 'selected="selected"' ;?>
                >Great</option>

            </select>

            <input type="submit" value="Calculate">
            <p><a href="">Reset</a></p>
        </fieldset>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['name'])) {
            echo '<span class="error">Please fill out your name</span>';
        }

        if (empty($_POST['miles'])) {
            echo '<span class="error">Please fill out the distance</span>';
        }

        if (empty($_POST['hours'])) {
            echo '<span class="error">Please fill out your hours</span>';
        }

        if (empty($_POST['amount'])) {
            echo '<span class="error">Please check your gallon price</span>';
        }

        // if post efficiency is null, please select your efficiency
        if ($_POST['efficiency'] == NULL) {
            echo '<span class="error">Please choose your efficiency</span>';
        }

        if (isset(
            $_POST['name'],
            $_POST['miles'],
            $_POST['hours'],
            $_POST['amount'],
            $_POST['efficiency']
        )) {
            $name = $_POST['name'];
            $miles = $_POST['miles'];
            $hours = $_POST['hours'];
            $amount = $_POST['amount'];
            $efficiency = $_POST['efficiency'];
            $speed = 65;
            $gallon = $miles / $efficiency;
            $cost = $gallon * $amount;
            $total_hours = intval($miles) / $speed;
            $days = $total_hours / $hours;

            echo '
            <div class="box">
                <h2>Calculator Results</h2>
                <p>'.$name.', you will be driving <b>' . $miles . ' miles</b></p>
                <p>Your fuel efficiency is <b>'.$efficiency.' miles per gallon</b></p>
                <p>Your total cost for gas will be <b>$'.number_format($cost, 2).' dollars</b></p>
                <p>You will be driving a total of <b>'.number_format($total_hours).' hours equating to '.number_format($days).' days</b></p>
            </div>
        ';
        } // close isset

    } // server request
    ?>
</body>

</html>