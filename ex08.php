<?php
$i = 0;
while ($i <= 20) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
    
    if ($i == 10) {
        echo "<strong>$i</strong> ";
    }
    $i += 1;
}


?>