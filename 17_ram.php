<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<h1>Code :</h1>

<pre>
// Fonction pour obtenir les infos sur la ram (en KB)
function get_ram_info():array {
    $memory_live = memory_get_usage(false)/1000; //Cette fonction avec le paramètre $real_usage = false retourne la mémoire utilisée à cet instant
    $memory_max = memory_get_usage(true)/1000; //Cette fonction avec le paramètre $real_usage = true retourne la mémoire allouée par le système
    return array("memory_live" => $memory_live, "memory_max" => $memory_max);    
}

//Affichage
echo "Quantité de mémoire utilisée : ", get_ram_info()["memory_live"], " KB";
echo "Quantité de mémoire maximum : ", get_ram_info()["memory_max"], " KB";
</pre>

<?php
// Fonction pour obtenir les infos sur la ram (en KB)
function get_ram_info():array {
    $memory_live = memory_get_usage(false)/1000; //Cette fonction avec le paramètre $real_usage = false retourne la mémoire utilisée à cet instant
    $memory_max = memory_get_usage(true)/1000; //Cette fonction avec le paramètre $real_usage = true retourne la mémoire allouée par le système
    return array("memory_live" => $memory_live, "memory_max" => $memory_max);    
}

//Affichage
echo "<u>Affichage :</u><br><br>";
echo "Quantité de mémoire utilisée : ", get_ram_info()["memory_live"], " KB<br>";
echo "Quantité de mémoire maximum : ", get_ram_info()["memory_max"], " KB";
?>

</body>
</html>