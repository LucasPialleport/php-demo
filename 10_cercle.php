<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<?php
$image = imagecreate(300,300);//Crée la varible image

$couleur_fond = imagecolorallocate($image, 0, 0, 255); // Fond bleu 
$couleur_texte = imagecolorallocate($image, 255, 255, 255); // Texte en blanc
$couleur_cerlce = imagecolorallocate($image, 255, 0, 0); // Cercle en rouge

imagefill($image, 0, 0, $couleur_fond); //Définit le fond
imagefilledellipse($image, 150, 150, 300, 300, $couleur_cerlce); //Affiche  le cercle
imagestring($image, 15, 50, 140, "I LOVE PHP AND 3.01 PW", $couleur_texte); //Affiche le texte

imagejpeg($image, "files/cercle.jpg"); //Rends l'image en JPEG et l'enregistre dans les fichiers
?>

<img src="files/cercle.jpg" alt="Cerlce i love PHP">
<br>
<a href="https://pialleportlucas.com/php/files/">Voir l'image dans les fichiers</a>

</body>
</html>