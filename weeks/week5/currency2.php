<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Currency 2 Form with Drop-Down Select Option</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="
    <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>
    " method="post">
    <fieldset>
        <label for="name">NAME</label>
        <input type="text" name="name">
        <label for="email">EMAIL</label>
        <input type="email" name="email">
        <label for="amount">How much money do you have?</label>
        <input type="number" name="amount">
        <label for="currency">Choose your currency</label>
        <ul>
        <li><input type="radio" name="currency" value="0.013">Rubles</li>
        <li><input type="radio" name="currency" value="0.76">Canadian</li>
        <li><input type="radio" name="currency" value="1.28">Pounds</li>
        <li><input type="radio" name="currency" value="1.18">Euros</li>
        <li><input type="radio" name="currency" value="0.0094">Yen</li>
        </ul>

        <label for="bank">Choose your banking institution</label>
        <select name="bank">
            <option value="" NULL>Select one</option>
            <option value="BOA">Bank of America</option>
            <option value="key">Key Bank</option>
            <option value="chase">Chase Bank</option>
            <option value="BECU">Boeing Credit Union</option>
            <option value="mattress">Mattress</option>

        </select>

        <input type="submit" value="Convert it!">
        <p><a href="">Reset</a></p>
    </fieldset>

    </form>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // if post fields are empty, we will call specific echoes
    if(empty($_POST['name'])) {
        echo '<span class="error">Please fill out your name</span>';
    }
    
    if(empty($_POST['email'])) {
        echo '<span class="error">Please fill out your email</span>';
    }
    
    if(empty($_POST['amount'])) {
        echo '<span class="error">Please fill out your amount</span>';
    }
    
    if(empty($_POST['currency'])) {
        echo '<span class="error">Please choose your currency</span>';
    }

    // if post bank is null, please select your bank
    if($_POST['bank'] == NULL) {
        echo '<span class="error">Please choose your banking institution</span>';
    }

    if(isset(
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
        $total = $amount * $currency;
        $friendly_total = floor($total);

        echo '
            <div class="box">
                <h2>Hello, '.$name.'</h2>
                <p>You now have $'.$friendly_total.' US dollars. It will be deposited in your <b>'.$bank.'</b> account and we will email you at <b>'.$email.'</b> within the next 24 hours.</p>
            </div>
        ';
    } // close isset

} // server request
?>    
</body>

</html>