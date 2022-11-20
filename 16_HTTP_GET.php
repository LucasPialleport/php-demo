<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<h1>Code :</h1>

<pre>
function get_info():string {
    if (array_key_exists("test", $_GET)){
        return htmlspecialchars($_GET["test"]);
    }
    else{
        return "NULL";
    }
          
}

//Affichage
echo "Valeur du paramètre \"test\" : ", get_info();
</pre>

<?php
function get_info():string {
    if (array_key_exists("test", $_GET)){
        return htmlspecialchars($_GET["test"]);
    }
    else{
        return "NULL";
    }
          
}

//Affichage
echo "<u>Affichage :</u><br>";
echo "Valeur du paramètre \"test\" : ", get_info(), "<br><br>";

if (get_info()=="NULL"){
    echo "<a href=\"https://pialleportlucas.com/php/16_HTTP_GET.php/?test=BUT%20info\">Voir un exemple</a>";
}
?>



</body>
</html>