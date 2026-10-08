<?php
const TAUX_TVA = 20;
const DEVISE = "MAD";
$HT = 60;
$Quantite = 3;
$SUM = $HT*$Quantite;
$TVA = ($SUM * TAUX_TVA) / 100;
$TTC = $SUM + $TVA;
$total = $TTC + 15;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap affichage </title>
</head>
<body>
    <?php
    echo"Le prix HT est de : " . $SUM. " " . DEVISE . "<br>";
    echo"Le prix TVA est de : " . $TVA . " " . DEVISE . "<br>";
    echo"Le prix TTC est de : " . $TTC . " " . DEVISE . "<br>";
    echo"Le prix total est de : " . $total . " " . DEVISE . "<br>";

    ?>
</body>
</html>