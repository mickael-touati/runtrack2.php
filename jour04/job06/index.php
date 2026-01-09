<form action="" method="get">

    <label for="nombre">Nombre :</label>
    <input type="nombre" id="nombre" name="nombre" required> 

    <button type="submit">Rechercher</button>
</form>

<?php
if (!empty($_GET)) {

    $nombre = $_GET['nombre'];

    if ($nombre % 2 == 0) {
        echo "nombre pair";
    } else {
        echo "nombre impair";
    }

}