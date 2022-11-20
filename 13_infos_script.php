<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<h1>Code :</h1>

<pre>
class my_class{

function get_script_info():array {  
    $file_name = basename(__FILE__);
    $class_name = get_class($this);
    $method_name = debug_backtrace()[0]["function"];
    return array("file_name" => $file_name, "class_name" => $class_name, "method_name" => $method_name);
}
}

$demo = new my_class();
$result = $demo->get_script_info();

//Affichage
echo "Nom du fichier : ", $result["file_name"];
echo "Nom la clase : ", $result["class_name"];
echo "Nom de la méthode : ", $result["method_name"];
</pre>

<?php
class my_class{

    function get_script_info():array {  
        $file_name = basename(__FILE__);
        $class_name = get_class($this);
        $method_name = debug_backtrace()[0]["function"];
        return array("file_name" => $file_name, "class_name" => $class_name, "method_name" => $method_name);
    }
}

$demo = new my_class();
$result = $demo->get_script_info();

//Affichage
echo "<u>Affichage :</u><br><br>";
echo "Nom du fichier : ", $result["file_name"], "<br>";
echo "Nom la clase : ", $result["class_name"], "<br>";
echo "Nom de la méthode : ", $result["method_name"];
?>

</body>
</html>