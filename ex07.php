<?php
$nombre = 7;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>

    <section>
        <h2>Table de multiplication de <?php echo $nombre; ?></h2>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "$nombre × $i = " . ($nombre * $i) . "<br>";
        }
        ?>
    </section>

    <section>
        <h2>Pyramide d'étoiles</h2>
        <pre>
            <?php
        for ($i = 1; $i <= 6; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "\n";
        }
        ?>
        </pre>
    </section>

</body>
</html>