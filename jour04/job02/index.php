<?php
echo "<table border='1'>";

echo "<tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>age</th>
    </tr>";

echo "<tr>
        <td>polo</td>
        <td>lo</td>
        <td>29</td>
    </tr>";

foreach ($_GET as $argument => $valeur){
    echo "<tr>
            <td>$argument</td>
            <td>$valeur</td></tr>";
}
echo "</table>"
?>
