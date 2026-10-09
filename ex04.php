<?php
$v1 = 42;
$v2 = "42";
$v3 = 15.8;
$v4 = true;
$v5 = false;
$v6 = null;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE4</title>
</head>
<body>
    <pre>
    <?php
    echo "<p>v1: ";
    var_dump($v1);
    echo "</p>";

    echo "<p>v2: ";
    var_dump($v2);
    echo "</p>";

    echo "<p>v3: ";
    var_dump($v3);
    echo "</p>";

    echo "<p>v4: ";
    var_dump($v4);
    echo "</p>";

    echo "<p>v5: ";
    var_dump($v5);
    echo "</p>";

    echo "<p>v6: ";
    var_dump($v6);
    echo "</p><br><br>";


   echo"==================================<br><br>";

    echo"<p>v1: ";
    var_dump((string)$v1);
    echo "</p>";

    echo "<p>v2: ";
    var_dump((int)$v2);
    echo "</p>";

    echo "<p>v3: ";
    var_dump((int)$v3);
    echo "</p>";

    echo "<p>v4: ";
    var_dump((bool)$v4);
    echo "</p>";

    echo "<p>v5: ";
    var_dump((bool)$v5);
    echo "</p>";

    echo "<p>v6: ";
    var_dump($v6);
    echo "</p>";

echo"==================================<br><br>";

    echo"$v4<br>";
    echo"$v6<br>";
 
    ?>

    </pre>
</body>
</html>