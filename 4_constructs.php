<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">


<h3><u>Utilisation de FOREACH (bloucle POUR-CHAQUE):</u></h3>
<p>Boucle permetant de parcourir les éléments d'une collection</p>

<p style="font-family: Courier New;">
foreach ($intArray as $value) {<br>
  echo "Le nombre est : $value";<br>
}
</p>

<?php
$intArray = array(1, 10, 15, 16, 20);
echo "intArray  = ", var_dump($intArray ), "<br>";

echo "<br><u>Affichage :</u><br>";

foreach ($intArray as $value) {
  echo "<br>Le nombre est : $value";
}
?>

<h3><u>Utilisation de FOR (boucle POUR) :</u></h3>
<p>Permet de répéter l'exécution d'une séquence d'instructions :</p>

<p style="font-family: Courier New;">
    for ($i = 0; $i < 10; $i++){<br>
    echo "Le nombre est : $i";<br>
    }
</p>
    
<p><u>Affichage :</u></p>

<?php
for ($i = 0; $i < 10; $i++){
    echo "Le nombre est : $i <br>";
} 
?>

<h3><u>Utilisation de if & elseif (condition SI & SINON-SI) :</u></h3>
<p>Permet de conditionner l'exécution d'une séquence d'instructions :</p>

<p style="font-family: Courier New;">
if ($x < $y){ <i>//si x < y</i><br>
    echo "x ($x) est plus petit que y ($y) !";<br>
} <br>
elseif ($x > $y){ <i>//sinon si x > y</i><br>
    echo "x ($x) est plus grand que y ($y) !";<br>
}<br>
else { <i>//sinon cela vaut dire que x = y</i><br>
    echo "x ($x) est égal à y ($y) !";<br>
}
</p>

<?php
$x = 5;
$y = 10;
echo "x = " , (string) $x, "<br>";
echo "y = " , (string) $y, "<br>";

echo "<br><u>Affichage :</u><br>";

if ($x < $y){
    echo "<br>x($x) est plus petit que y($y) !";
} 
elseif ($x > $y){
    echo "<br>x($x) est plus grand que y($y) !";
}
else {
    echo "<br>x($x) est égal à y($y) !";
}
?>

<h3><u>Utilisation de WHILE (boucle TANT-QUE):</u></h3>
<p>La boucle tourne tant-que la condition est vrai :</p>

<p style="font-family: Courier New;">
    $i = 0<br>
    while ($i < 10){<br>
    $i++;<br>
    echo "Le nombre est : $i";<br>
    }
</p>
    
<p><u>Affichage :</u></p>

<?php
$i = 0;
while ($i < 10){
    $i++;
    echo "Le nombre est : $i<br>";
}
?>

<h3><u>Utilisation de DO (bloucle FAIRE):</u></h3>
<p>La boucle tourne tant-que la condition est vrai (vérification à la fin contrairement à la boucle while) :</p>

<p style="font-family: Courier New;">
    $i = 0<br>
    do {<br>
    $i++;<br>
    echo "Le nombre est : $i";<br>
    } while ($i > 5)
</p>
    
<p><u>Affichage :</u></p>

<?php
$i = 0;
do {
    $i++;
    echo "Le nombre est : $i<br>";
}while ($i > 5)
?>

<p>PS : On fait 1 tour de bloucle même si i = 0 < 5, car la vérification est à la fin.</p>

<h3><u>Utilisation de "a?b:c" (opérateur conditionnel ternaire) :</u></h3>

<?php
echo "<h4>L'opération \"a ? b : c\" retourne b si a est VRAI sinon c est routournée.</h4>";

$boolT = TRUE;
$nb1 = 1; $nb2 = 2;

echo "boolT = TRUE<br>";
echo "Donc, boolT ? nb1 : nb2 = ", $boolT ? $nb1 : $nb2, "<br>";

$boolF = FALSE;
echo "<br>boolF = FALSE<br>";
echo "Donc, boolF ? nb1 : nb2 = ", $boolF ? $nb1 : $nb2, "<br>";
?>

</body>
</html>