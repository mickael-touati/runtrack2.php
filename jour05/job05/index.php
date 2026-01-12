<!-- Créez une fonction nommée “occurrences()”.
Cette fonction prend en paramètre une chaîne de caractères nommée “$str”
et un caractère nommé “$char”.

_2

Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.

Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de
$char dans $str est : 2 -->
<?php

function occurrences($str,$char){

$count = 0;

    for ($i = 0; $i < strlen($str); $i++){
        if ($str[$i] == $char) {
            $count++;
        }
    }

}
return $count;