<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<h1>Code :</h1>

<pre>
// Fonction pour obtenir les infos sur la ram (en KB)
function get_net_info():array {
    $ip_server = $_SERVER['SERVER_ADDR']; 
    $ip_client = $_SERVER['REMOTE_ADDR']; 
    $host_name = $_SERVER['SERVER_NAME']; 
    $request_method = $_SERVER['REQUEST_METHOD']; 
    return array("ip_server" => $ip_server, "ip_client" => $ip_client, "host_name" => $host_name, "request_method" => $request_method);    
}


echo "IP Serveur : ", get_net_info()["ip_server"];
echo "IP Client : ", get_net_info()["ip_client"];
echo "Nom de l'hôte : ", get_net_info()["host_name"];
echo "Methode de la requête : ", get_net_info()["request_method"];
</pre>

<?php
// Fonction pour obtenir les infos sur la ram (en KB)
function get_net_info():array {
    $ip_server = $_SERVER['SERVER_ADDR']; 
    $ip_client = $_SERVER['REMOTE_ADDR']; 
    $host_name = $_SERVER['SERVER_NAME']; 
    $request_method = $_SERVER['REQUEST_METHOD']; 
    return array("ip_server" => $ip_server, "ip_client" => $ip_client, "host_name" => $host_name, "request_method" => $request_method);    
}

//Affichage
echo "<u>Affichage :</u><br><br>";
echo "IP Serveur : ", get_net_info()["ip_server"], "<br>";
echo "IP Client : ", get_net_info()["ip_client"], "<br>";
echo "Nom de l'hôte : ", get_net_info()["host_name"], "<br>";
echo "Methode de la requête : ", get_net_info()["request_method"];
?>

</body>
</html>