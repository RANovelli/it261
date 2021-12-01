<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <title>My Portal Page</title>

</head>

<body>
    <header>

        <h1><a href="index.php">Ryan Novelli's Portal Page for IT261</a></h1>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="./website/daily.php">Switch</a></li>
                <li><a href="repaired-adder.php">Troubleshoot</a></li>
                <li><a href="./weeks/week5/calculator.php">Calculator</a></li>
                <li><a href="./website/contact.php">Email</a></li>
                <li><a href="./website/gallery.php">Gallery</a></li>
                <li><a href="./website/project.php">Database</a></li>
            </ul>
        </nav>

    </header>
    <div class="wrapper">
        <main>
            <h2>MAMP Version</h2>
            <img class="localhost" src="images/localhost-mamp.PNG" alt="logo" />
            <h2>Error Screenshot</h2>
            <img class="localhost" src="images/hw1_error.PNG" alt="logo" />
        </main>

        <aside>
            <img id="snow" src="images/profile_snow.jpg" alt="snow" />
            <p>I'm a guitar player, songwriter, touring musician, record collector, and DJ, with a deep interest in all things Mid-Century. I'm currently in the process of getting my Italian passport with the goal of living between the Pacific Northwest and somewhere in the EU (most likely Italy), or perhaps the UK.</p>
            <p>My primary goal for learning web development is to assist fellow artists, musicians, venues, and record labels in fulfilling IT-related requirements necessary to succeed in today's market, as well as having the ability to generate revenue independently from anywhere in the world.</p>
            <div class="weeks">
                <h2>Weekly Exercises</h2>
                <h3>Week 1:</h3>
                <ul>
                    <li><a href="website/index.php">Website</a></li>
                </ul>
                <h3>Week 2:</h3>
                <ul>
                    <li><a href="weeks/week2/currency-logic.php">Currency-Logic</a></li>
                    <li><a href="weeks/week2/currency.php">Currency</a></li>
                    <li><a href="weeks/week2/heredoc.php">Heredoc</a></li>
                    <li><a href="weeks/week2/var.php">Var</a></li>
                    <li><a href="weeks/week2/var2.php">Var 2</a></li>
                </ul>
                <h3>Week 3:</h3>
                <ul>
                    <li><a href="weeks/week3/date.php">Date Function</a></li>
                    <li><a href="weeks/week3/foreach.php">For Each Loop</a></li>
                    <li><a href="weeks/week3/forloop.php">For Loop</a></li>
                    <li><a href="weeks/week3/if.php">If Statement</a></li>
                    <li><a href="weeks/week3/switch.php">Switch Exercise</a></li>
                </ul>
                <h3>Week 4:</h3>
                <ul>
                    <li><a href="weeks/week4/celsius.php">Celsius Form</a></li>
                    <li><a href="weeks/week4/form-arithmetic.php">Arithmetic Form</a></li>
                    <li><a href="weeks/week4/form1.php">Form One</a></li>
                    <li><a href="weeks/week4/form2.php">Form Two</a></li>
                    <li><a href="weeks/week4/form3.php">Form Three</a></li>
                </ul>
                <h3>Week 5:</h3>
                <ul>
                    <li><a href="weeks/week5/currency1.php">Currency 1 Basic Form</a></li>
                    <li><a href="weeks/week5/currency2.php">Currency 2 Form with Drop-Down</a></li>
                    <li><a href="weeks/week5/currency3.php">Currency 3 Sticky Form</a></li>
                    <li><a href="weeks/week5/extracredit.php">Extra Credit Form</a></li>
                    <li><a href="weeks/week5/null.php">Null Exercise</a></li>
                </ul>
                <h3>Week 6:</h3>
                <ul>
                    <li><a href="weeks/week6/form1.php">Emailable Form 1</a></li>
                    <li><a href="weeks/week6/functions.php">Functions</a></li>
                    <li><a href="weeks/week6/implode.php">Implode</a></li>
                </ul>
                <h3>Week 7:</h3>
                <ul>
                    <li><a href="weeks/week7/pictures.php">Picture Gallery Exercise</a></li>
                    <li><a href="weeks/week7/random.php">Random</a></li>
                    <li><a href="weeks/week7/strings.php">Strings</a></li>
                </ul>
                <h3>Week 8:</h3>
                <ul>
                    <li><a href="weeks/week8/people.php">People Page Class Exercise</a></li>
                </ul>
                <h3>Week 9:</h3>
                <ul>
                    <li><a href="weeks/week9/register.php">Login/Register Page</a></li>
                </ul>
            </div>
        </aside>

        <footer>
            <ul>
                <li>Copyright &copy;
                    <?php
                    $date_current = date('Y');
                    $date_created = 2021;
                    if ($date_current == $date_created) {
                        echo $date_current;
                    } else {
                        echo '' . $date_created . ' - ' . $date_current . '';
                    }
                    ?>
                <li>All Rights Reserved</li>
                <li><a href="https://ranovelli.github.io/portfolio-project" target="_blank">Novelli Design</a></li>
                <li><a href="https://validator.w3.org/nu/?doc=https://novellidesign.org/it261/index.php" target="_blank">HTML</a></li>
                <li><a href="https://jigsaw.w3.org/css-validator" target="_blank">CSS</a></li>
            </ul>
        </footer>
    </div> <!-- end wrapper -->
</body>

</html>