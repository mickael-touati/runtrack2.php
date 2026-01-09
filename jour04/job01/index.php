<?php
echo '<form method="get">';
echo '<input type="text" name="prenom" placeholder="Prénom">';
echo '<input type="text" name="age" placeholder="Âge">';
echo '<input type="submit" value="Envoyer">';
echo '</form>';

if (!empty($_GET)) {

    $nombreArguments = count($_GET);
    
    echo "Nombre d'arguments envoyés : " . $nombreArguments;
} else {
    echo "Aucun argument n'a été envoyé.";
}
?>
