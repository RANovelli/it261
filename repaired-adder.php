<!doctype html>
<html lang="en">

<head>
    <title>My Adder Assignment</title>
    <style>
        p {
            color: red;
            text-align: center;
        }

        h1 {
            color: green;
            text-align: center;
        }

        h2 {
            font-size: 1.5em;
            text-align: center;
        }

        form {
            width: 350px;
            margin: 0 auto;
            border: 1px solid red;
            padding: 10px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h1>Adder.php</h1>
        <label>Enter the first number:</label>
        <input type="text" name="num1"><br>
        <label>Enter the second number:</label>
        <input type="text" name="num2"><br>
        <input type="submit" value="Add Em!!">
    </form>

    <?php //adder-fixed.php

    if (isset($_POST['num1'], $_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $myTotal = (int)$num1 + (int)$num2;
        if (empty($num1 && $num2)) {
            echo '<p>Please fill out your numbers</p>';
        } else {
            echo '<h2>You added ' . $num1 . ' and ' . $num2 . '';
            echo ' <p> and the answer is <br>
            <style="color:red;"> ' . $myTotal . '!</p>';
            echo '<p><a href="">Reset page</a>';
        }
    }

    ?>

    <!--here are my errors-->
    <!-- line 1: added space between php and comment-->
    <!-- line 3: added $_POST['num2'] to if isset conditions-->
    <!-- line 12: added doctype html tag and opening html lang="en" tag below it-->
    <!-- line 29: single quote, semi-colon, curly brace, question mark, greater than after closing html tag -->
    <!-- line 6: removed minus sign in front of equals, lowercase n on num2 -->
    <!-- line 7: removed double quotes, added appropriate single quotes to show variables -->
    <!-- line 9: removed double quotes, added appropriate single quotes to show variables -->
    <!-- line 9: removed style tag, adjusted syntax, added styles to document head, moved closing p to line 8 -->
    <!-- line 10: added closing p tag, semi-colon -->
    <!-- line 13: added closing php tag -->
    <!-- line 27: fixed form opening tag, added method="post", moved h1 inside form -->
    <!-- line 30: lowercase n on num1 -->
    <!-- line 29,31: added label opening tags -->
    <!-- line 33: closing double quotes on "Add em!!" -->
    <!-- line 22: moved all php below closing form tag -->

</body>

</html>