<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<?php
$url = "http://www.google.com/";
//Source des données

//obtenir les données
$data = file_get_contents($url);

//Où sauvegarder
$filename = "./files/google.html";

//Sauvegarder dans le fichier
$fh = fopen($filename,"w");
fwrite($fh,$data);
fclose($fh);
?>

<p>Le ficheir à été télécharger et enregistré !</p>
<br>
<a href="https://pialleportlucas.com/php/files/google.html">Voir le fichier</a>

</body>
</html>