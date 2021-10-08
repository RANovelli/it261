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
                <li><a href="">Switch</a></li>
                <li><a href="">Troubleshoot</a></li>
                <li><a href="">Calculator</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Database</a></li>
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
                    <li><a href="website/index.html">website</a></li>
                </ul>
                <h3>Week 2:</h3>
                <ul>
                    <li><a href="weeks/week2/currency-logic.php">currency-logic</a></li>
                    <li><a href="weeks/week2/currency.php">currency</a></li>
                    <li><a href="weeks/week2/heredoc.php">heredoc</a></li>
                    <li><a href="weeks/week2/var.php">var</a></li>
                    <li><a href="weeks/week2/var2.php">var 2</a></li>
                </ul>
                <h3>Week 3:</h3>
                <ul>
                    <li>TBA</li>
                </ul>
                <h3>Week 4:</h3>
                <ul>
                    <li>TBA</li>
                </ul>
                <h3>Week 5:</h3>
                <ul>
                    <li>TBA</li>
                </ul>
                <h3>Week 6:</h3>
                <ul>
                    <li>TBA</li>
                </ul>
                <h3>Week 7:</h3>
                <ul>
                    <li>TBA</li>
                </ul>
                <h3>Week 8:</h3>
                <ul>
                    <li>TBA</li>
                </ul>
            </div>
        </aside>

        <footer>
            <ul>
                <li>Copyright &copy; 2021 - <?= date('Y') ?></li>
                <li>All Rights Reserved</li>
                <li><a href="https://ranovelli.github.io/portfolio-project" target="_blank">Novelli Design</a></li>
                <li><a href="https://validator.w3.org/nu/?doc=https://novellidesign.org/scc/fall2021/it261/index.php" target="_blank">HTML</a></li>
                <li><a href="http://jigsaw.w3.org/css-validator" target="_blank">CSS</a></li>
            </ul>
        </footer>
    </div> <!-- end wrapper -->
</body>

</html>