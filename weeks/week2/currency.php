<?php
// understanding the logic
// 1 ruble = .013 US dollars
// 1 pound sterling = 1.28 US dollars
// 1 canadian dollar = .79 US dollars
// 1 euro = 1.18 US dollars
// 1 yen = .0094 US dollars

$rubles = 10007;
$rubles *= .013;
$friendly_rubles = number_format($rubles, 2);

$pounds = 500;
$pounds *= 1.28;
$friendly_pounds = number_format($pounds, 2);

$canadian = 5000;
$canadian *= .79;
$friendly_canadian = number_format($canadian, 2);

$euro = 1200;
$euro *= 1.18;
$friendly_euro = number_format($euro, 2);

$yen = 2000;
$yen *= .0094;
$friendly_yen = number_format($yen, 2);

$total = $rubles + $pounds + $canadian + $euro + $yen;
$friendly_total = number_format($total, 2);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Currency</title>
    <style>
        table {
            width: 400px;
            margin: 20px auto;
            border: 1px solid green;
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid green;
            padding: 5px;
            text-align: left;
        }
    </style>

</head>

<body>
    <table>
        <tr>
            <th>Rubles</th>
            <td><?php echo '$'.$friendly_rubles.''; ?></td>
        </tr>
        <tr>
            <th>Pounds</th>
            <td><?php echo '$'.$friendly_pounds.''; ?></td>
        </tr>
        <tr>
            <th>Canadian</th>
            <td><?php echo '$'.$friendly_canadian.''; ?></td>
        </tr>
        <tr>
            <th>Euro</th>
            <td><?php echo '$'.$friendly_euro.''; ?></td>
        </tr>
        <tr>
            <th>Yen</th>
            <td><?php echo '$'.$friendly_yen.''; ?></td>
        </tr>
        <tr>
            <th>Total</th>
            <td><strong><?php echo '$'.$friendly_total.''; ?></strong></td>
        </tr>
    </table>
    
</body>

</html>