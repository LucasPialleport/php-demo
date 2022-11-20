<!doctype html>
<html lang="fr">
<body style="text-align: center ;font-family: Arial, sans-serif;">

<h1>Demonstration des operateurs</h1>
<h3><u>Nous initialisons les valeurs suivantes avec l'opérateur '=' :</u></h3>

<?php
$nb1 = 1;
$nb2 = 2;
$chaine1 = "1";
$listNumber = [1,2,7,5,9,1,6];

echo "nb1 = " , (string) $nb1 , "<br>";
echo "nb2 = " , (string) $nb2 , "<br>";
echo "chaine1 = \"" , $chaine1 , "\"<br>";
echo "listNumber = ", var_dump($listNumber), "<br>";
?>

<h3><u>Nous utilisons ici l'opérateur "= =" pour tester une égalitée :</u></h3>

<?php
//Test opérateurs égal
echo "<h4>Résultat de \"1\" == 1 :</h4>";
if ($chaine1 == $nb1) {
    echo "Chaine 1 est égal à number 1 !<br>";
} else {
    echo "Chaine 1 n'est pas égal à number 1 !<br>";
}

echo "<h4>Résultat de nb1 == nb2</h4>";
if ($nb1 == $nb2) {
    echo "Nombre 1 est égal à nombre 2 !<br>";
} else {
    echo "Nombre 1 n'est pas égal à nombre 2 !<br>";
}
?>

<h3><u>Nous utilisons ici l'opérateur "= = =" pour tester une égalitée et le type :</u></h3>

<?php
//Test opérateurs égal strict
echo "<h4>Résultat de \"1\" === 1 :</h4>";
if ($chaine1 === $nb1) {
    echo "Chaine 1 est strictement égal à number 1 !<br>";
} else {
    echo "Chaine 1 n'est strictement pas égal à number 1 !<br>";
}
?>

<h3><u>Nous utilisons ici l'opérateur "+ +" pour incrémenter :</u></h3>

<?php
//Incrémentation
echo "Valeur initiale de nb1 : " , (string) $nb1 , "<br>";
$nb1 ++;
echo "Valeur de nb1 après incrémentation: " , (string) $nb1 , "<br>";
?>

<h3><u>Nous utilisons ici l'opérateur "- -" pour décrémenter :</u></h3>

<?php
//décrémentation
echo "Valeur initiale de nb1 : " , (string) $nb1 , "<br>";
$nb1 --;
echo "Valeur de nb1 après décrémentation: " , (string) $nb1 , "<br>";
?>

<h3><u>Nous utilisons ici l'opérateur "<=>" pour le comparateur combiné :</u></h3>

<?php
echo "Résultat de nb1 <=> nb1 (1<=>1) : ", $nb1 <=> $nb1, "<br>"; // 0
echo "Résultat de nb1 <=> nb2 (1<=>2) : ", $nb1 <=> $nb2, "<br>"; // -1
echo "Résultat de nb2 <=> nb1 (2<=>1) : ", $nb2 <=> $nb1, "<br>"; // 1
?>

<h3><u>Nous utilisons ici l'opérateur "||" pour comparer (OR) :</u></h3>

<?php
//Test opérateurs OR
echo "Résultat de (nb1 == 2 || nb2 == 2) : ";
if ($nb1 == 2 || $nb2 == 2) {
    echo "True<br>";
} else {
    echo "False<br>";
}

echo "Résultat de (nb1 == 2 || chaine 1 == 2) : ";
if ($nb1 == 2 || $chaine1 == 2) {
    echo "True<br>";
} else {
    echo "False<br>";
}
?>

<h3><u>Nous utilisons ici l'opérateur "&&" pour comparer (ET) :</u></h3>

<?php
//Test opérateurs ET
echo "Résultat de (nb1 == 1 && chaine 1 == 1) : ";
if ($nb1 == 1 || $chaine1 == 1) {
    echo "True<br>";
} else {
    echo "False<br>";
}

echo "Résultat de (nb1 == 2 && nb2 == 2) : ";
if ($nb1 == 2 && $nb2 == 2) {
    echo "True<br>";
} else {
    echo "False<br>";
}
?>

<h3><u>Nous utilisons ici l'opérateur "&" pour gerer les pointeurs :</u></h3>

<?php
echo "nb1 = " , (string) $nb1 , "<br>";

$nb3 = &$nb1;
echo "nb3 = &nb1 donc nb3 = " , (string) $nb3 , "<br>";

$nb3 = 3;
echo "nb3 = " , (string) $nb3 ," donc nb1 = " , (string) $nb1 , "<br>";

$nb1 = 1; //reset de nb1
?>

<h3><u>Autre utilisation : nous utilisons ici l'opérateur "&" comme l'opérateur "Et" sur les bits d'un entier</u></h3>

<?php
echo "<h4>Création de deux variable décimal affichées en binaire :</h4>";

$binA = 10;// 8 en binaire est 1010
$binB = 7;// 7 en binaire est 0111

echo "binA = ", $binA, " : ", decbin($binA), "<br>";
echo "binB = ", $binB, " : ",decbin($binB), "<br>";
echo "<h4>Avec l'opérateur '&' les bits positionnés à 1 dans binA ET dans binB sont positionnés à 1 :</h4>";
echo "binA & binB = ", $binA & $binB, " : ", decbin($binA & $binB);
?>

<h3><u>Nous utilisons ici l'opérateur "|" comme l'opérateur "Ou" sur les bits d'un entier</u></h3>

<?php
echo "<h4>Création de deux variable décimal affichées en binaire :</h4>";

$bin1 = 8;// 8 en binaire est 1000
$bin2 = 7;// 7 en binaire est 0111

echo "bin1 = ", $bin1, " : ", decbin($bin1), "<br>";
echo "bin2 = ", $bin2, " : ",decbin($bin2), "<br>";
echo "<h4>Avec l'opérateur '|' les bits positionnés à 1 dans bin1 OU bin2 sont positionnés à 1 :</h4>";
echo "bin1 | bin2 = ", $bin1 | $bin2, " : ", decbin($bin1 | $bin2);
?>

<h3><u>Nous utilisons ici l'opérateur "??" pour l'opérateur de coalescence nulle :</u></h3>

<?php
echo "<h4>L'opération \"a ?? b\" retourne b si a est null (ou n'existe pas) sinon a est routournée.</h4>";

$varNull = NULL;
echo "varNull = NULL<br>";
echo "Donc, varNull ?? nb1 = ", $varNull??$nb1, "<br>";
?>

<h3><u>Nous utilisons ici l'opérateur "?" pour l'opérateur conditionnel ternaire :</u></h3>

<?php
echo "<h4>L'opération \"expr1 ? expr2 : expr3\" retourne expr2 si expr1 est VRAI sinon expr3 est routournée.</h4>";

$boolT = TRUE;
echo "boolT = TRUE<br>";
echo "Donc, boolT ? nb1 : nb2 = ", $boolT ? $nb1 : $nb2, "<br>";

$boolF = FALSE;
echo "<br>boolF = FALSE<br>";
echo "Donc, boolF ? nb1 : nb2 = ", $boolF ? $nb1 : $nb2, "<br>";
?>

</body>
</html>