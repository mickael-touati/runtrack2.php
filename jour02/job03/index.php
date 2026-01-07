<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i <= 20 && $i >= 0) {
        echo "<em>$i</em><br>";
    } elseif ($i == 42) {
        echo "La plateforme_<br>";
    } elseif ($i <=50 && $i >= 25) {
        echo "<u>$i</u><br>";
    } else {
        echo $i . "<br>";
    }
}