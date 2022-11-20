<?php
header('Content-type: text/plain');

# Chemin d'acces au fichier
$file ="files/script1.txt";

# Ouverture du fichier en mode lecture et ecriture
$fileopen=(fopen("$file",'a+'));

# Ecriture dans le fichier txt
fwrite($fileopen,"\nLe script écrit dans le fichier !");

# Fermeture du fichier
fclose($fileopen);

# Affichage 
echo "Le fichier a été modifié\n";
?>
