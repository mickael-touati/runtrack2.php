<form action="" method="POST">
    <label for="username">pseudo :</label>
    <input type ="username" id="username" name="username" required>

    <label for="mdp">Mot de passe :</label>
    <input type="password" id="mdp" name="mdp" required>

    <button type="submit">Se connecter</button>
</form>

<?php
if (!empty($_POST)) {

    $username = $_POST['username'];
    $password = $_POST['mdp'];

    if ($username == "john" && $password == "rambo") {
        echo "c'est pas ma guerre";
    } else {
        echo "votre pire cauchemar";
    }
}
