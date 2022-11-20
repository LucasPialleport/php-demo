<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<h1>Code :</h1>

<pre>
function merge($array1, $array2):array {
    return array_merge($array1, $array2);    
}

//Déclaration de 2 arrays
$array1 = array(1,5,4,7);
$array2 = array('a', 'n', 'i', 'u', 't', 2022);

//Affichage (plus lisible que print_r())
echo ">>> ";

$results = merge($array1, $array2);
foreach($results as $result) {
    echo $result, " | ";
}
</pre>

<?php

// Fonction de merge
function merge($array1, $array2):array {
    return array_merge($array1, $array2);    
}

//Déclaration de 2 arrays
$array1 = array(1,5,4,7);
$array2 = array('a', 'n', 'i', 'u', 't', 2022);

//Affichage (plus lisible que print_r())
echo "<u>Affichage :</u><br><br>";
echo ">>> ";

$results = merge($array1, $array2);
foreach($results as $result) {
    echo $result, " | ";
}
?>

</body>
</html>