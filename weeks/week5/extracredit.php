<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Currency 3 - Sticky Form</title>
    <link href="css/ecstyles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <header><h1>Extra Credit Currency Assignment</h1></header>
    
    <form action="
    <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>
    " method="post">
        <fieldset>

            <label for="name">Name</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?> 
        ">
            <label for="amount">How much money do you have?</label>
            <input type="text" name="amount" value="<?php if (isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>">
            <label for="currency">Choose your currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.013" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked="checked" '; ?>>Rubles</li>
                <li><input type="radio" name="currency" value="0.76" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked="checked" '; ?>>Canadian</li>
                <li><input type="radio" name="currency" value="1.28" <?php if (isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked="checked" '; ?>>Pounds</li>
                <li><input type="radio" name="currency" value="1.18" <?php if (isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked="checked" '; ?>>Euros</li>
                <li><input type="radio" name="currency" value="0.0094" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked="checked" '; ?>>Yen</li>
            </ul>

            <label for="bank">Banking Institution</label>
            <select name="bank">
                <option value="" NULL <?php if (isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected="unselected"'; ?>>Select one</option>
                <option value="BOA" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'BOA') echo 'selected="selected"'; ?>>Bank of America</option>
                <option value="key" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'key') echo 'selected="selected"'; ?>>Key Bank</option>
                <option value="chase" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected="selected"'; ?>>Chase Bank</option>
                <option value="BECU" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected="selected"'; ?>>Boeing Credit Union</option>
                <option value="mattress" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'mattress') echo 'selected="selected"'; ?>>Mattress</option>

            </select>

            <input type="submit" value="Convert it!">
            <p><a href="" class="button">Reset</a></p>
        </fieldset>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // if post fields are empty, we will call specific echoes
        if (empty($_POST['name'])) {
            echo '<span class="error"><em>Please fill out your name</em></span>';
        }

        if (empty($_POST['email'])) {
            echo '<span class="error"><em>Please fill out your email</em></span>';
        }

        if (empty($_POST['amount'])) {
            echo '<span class="error"><em>Please fill out your amount</em></span>';
        }

        if (empty($_POST['currency'])) {
            echo '<span class="error"><em>Please choose your currency</span></em>';
        }

        // if post bank is null, please select your bank
        if ($_POST['bank'] == NULL) {
            echo '<span class="error"><em>Please choose your banking institution</em></span>';
        }

        if (isset(
            $_POST['name'],
            $_POST['email'],
            $_POST['amount'],
            $_POST['currency'],
            $_POST['bank']
        )) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $bank = $_POST['bank'];
            $total = intval($amount) * $currency;

            if ($total >= 1000) {
                echo '
                <div class="box">
                    <p>I\'m a happy camper, because I have $' . number_format($total, 2) . ' US dollars and I am going to ride a pony!!!</p>
                    <iframe width="485" height="300" src="https://www.youtube.com/embed/ducdAc8PRCo" frameborder="0" allowfullscreen></iframe>

                </div>
                ';} else {
                    echo '
                <div class="box-2">
                    <p>I\'m not happy, because I have $' . number_format($total, 2) . ' US dollars and it\'s raining in the city...</p>
                    <iframe width="485" height="300" src="https://www.youtube.com/embed/WKm5txPO40w" frameborder="0" allowfullscreen></iframe>

                </div>
                ';
            } // close if else


        } // close isset

    } // server request
    ?>

    <footer>
        <ul>
            <li><a href="https://validator.w3.org/check?uri=referer">HTML VALID</a></li>
            <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS VALID</a></li>
        </ul>
    </footer>
</body>

</html>