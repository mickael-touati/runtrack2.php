<?php
$mysqli = new mysqli("localhost", "root", "", "jour08");

$result = $mysqli->query("SELECT nom, capacite FROM salles");
?>

<table border="1">
    <thead>
        <tr>
            <?php
            foreach ($result->fetch_fields() as $field) {
                echo "<th>" . $field->name . "</th>";
            }
            ?>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
