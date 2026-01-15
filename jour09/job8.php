<?php
$mysqli = new mysqli("localhost", "root", "", "jour08");

$result = $mysqli->query("SELECT SUM(capacite) AS capacite_totale FROM salle");
$finalResult = $result->fetch_assoc();
var_dump($finalResult);
$arrayKeys = array_keys($finalResult);
var_dump($arrayKeys);
?>

<table border="1">
    <thead>
        <tr>
            <?php
            
                echo "<th>". $arrayKeys[0] . "</th>"; 
            ?>
        </tr>
    </thead>

    <tbody>
        <?php

        echo "<tr><td>" . $finalResult['capacite_totale'] . "</td></tr>" 
        ?>
    </tbody>
</table>