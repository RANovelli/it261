<?php
// gallery exercise 
$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';
// $name                    $image
// $key                     $value
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title>Pictures - Week 7 Class Exercise</title>

</head>

<body>
    <div class="wrapper">
        <main>
            <h2>Welcome to the Gallery</h2>
            <table>
                <?php foreach ($people as $name => $image) : ?>
                    <tr>
                        <td><img src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
                        <td class="text"><?php echo str_replace('_', ' ', $name); ?></td>
                        <td class="text"><?php echo substr($image, 6); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </main>
    </div>
</body>

</html>