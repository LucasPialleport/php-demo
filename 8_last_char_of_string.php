<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<h1>Code :</h1>

<pre>
class sentence{

protected $my_string;

// Methodes
function set_sentence($str) {
    $this->my_string = $str;
}
function get_sentence() {
    return $this->my_string;
}

function get_last_char(){
    return substr($this->get_sentence(), -1); //Retourne le dernier caractère d'un string
}
}

$demo = new sentence();
$demo->set_sentence("Le dernier caractére de cette phrase en un B");

echo ">>> ", $demo->get_last_char();
</pre>

<?php
class sentence{

    protected $my_string;

    // Methodes
    function set_sentence($str) {
        $this->my_string = $str;
    }
    function get_sentence() {
        return $this->my_string;
    }

    function get_last_char(){
        return substr($this->get_sentence(), -1); //Retourne le dernier caractère d'un string
    }
}

$demo = new sentence();
$demo->set_sentence("Le dernier caractére de cette phrase en un B");

echo "<u>Affichage :</u><br><br>";
echo ">>> ", $demo->get_last_char();
?>

</body>
</html>