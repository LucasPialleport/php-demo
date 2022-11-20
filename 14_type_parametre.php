<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<h1>Code :</h1>

<pre>
// Fonction pour obtenir le type
function type($unknown) {
    return gettype($unknown);    
}

//Déclaration de varible de plusieurs types
$my_array = array(1,5,4,7);
$my_int = 2022;
$my_double = 19.5;
$my_string = "I love PHP";

//Affichage
echo ">>> ", type($my_array);
echo ">>> ", type($my_int);
echo ">>> ", type($my_double);
echo ">>> ", type($my_string);
</pre>

<?php
// Fonction pour obtenir le type
function type($unknown) {
    return gettype($unknown);    
}

//Déclaration de varible de plusieurs types
$my_array = array(1,5,4,7);
$my_int = 2022;
$my_double = 19.5;
$my_string = "I love PHP";

//Affichage
echo "<u>Affichage :</u><br><br>";
echo ">>> ", type($my_array), "<br>";
echo ">>> ", type($my_int), "<br>";
echo ">>> ", type($my_double), "<br>";
echo ">>> ", type($my_string), "<br>";
?>

</body>
</html>