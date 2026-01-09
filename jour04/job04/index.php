<?php
echo "<table border='1'>";

echo "<tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>";

foreach ($_POST as $argument => $valeur){
    echo "<tr>
            <td>$argument</td>
            <td>$valeur</td></tr>";
}
echo "</table>"
?>