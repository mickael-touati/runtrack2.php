<form action="" method="POST">
    <label for="email">Courriel :</label>
    <input type ="email" id="email" name="email" required>

    <label for="mdp">Mot de passe :</label>
    <input type="password" id="mdp" name="mdp" required>

    <button type="submit">Se connecter</button>
</form>

<?php
if (!empty($_POST)) {

    $nombreArguments = count($_POST);
    
    echo "Nombre d'arguments envoyés : " . $nombreArguments;
} else {
    echo "Aucun argument n'a été envoyé.";
}
?>