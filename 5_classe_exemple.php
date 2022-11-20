<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">


<h1>Code :</h1>

<pre>
class exemple_class{ //Création d'une première classe

public $name; //Déclaration atribut public nom
protected $age; //Déclaration atribut protégé age
public const EX_CONST = "ce texte est stocké dans une constante"; //Déclaration de la constante

function __construct($name, $age) { //Constructeur
    $this->name = $name;
    $this->age = $age;
}

// Methodes (setters & getters)
function set_name($name) {
    $this->name = $name;
}
function get_name() {
    return $this->name;
}

function set_age($age) {
    $this->age = $age;
}
function get_age() {
    return $this->age;
}

}

class exemple_subclass extends exemple_class{ //Création d'une deuxieme classe qui hérite de "exemple_class"

function __construct($name) {//Constructeur qui utilise le constructeur parent
    parent::__construct($name, 19); //L'age est par défaut 19 ans 
}

}

$obj1 = new exemple_subclass("temp_name"); //Création d'une objet de "exemple_class"

//Affichages
echo "Nom temporaire : ", $obj1->name; //Accées au nom par l'attribut directement (possible car public)
$obj1->set_name("lucas"); //changement du nom a l'aide d'une méthode héritée
echo ">>> ", $obj1->get_name();

echo ">>> ", $obj1->get_age(); //Accées a l'age par un getter (obigatoire car non public)
echo ">>> ", $obj1::EX_CONST;
</pre>

<?php
class exemple_class{ //Création d'une première classe

    public $name; //Déclaration atribut public nom
    protected $age; //Déclaration atribut protégé age
    public const EX_CONST = "ce texte est stocké dans une constante"; //Déclaration de la constante

    function __construct($name, $age) { //Constructeur
        $this->name = $name;
        $this->age = $age;
    }

    // Methodes (setters & getters)
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }

    function set_age($age) {
        $this->age = $age;
    }
    function get_age() {
        return $this->age;
    }

}

class exemple_subclass extends exemple_class{ //Création d'une deuxieme classe qui hérite de "exemple_class"

    function __construct($name) {//Constructeur qui utilise le constructeur parent
        parent::__construct($name, 19); //L'age est par défaut 19 ans 
    }

}

$obj1 = new exemple_subclass("temp_name"); //Création d'une objet de "exemple_class"

//Affichages
echo "<u>Affichage :</u><br><br>";
echo "Nom temporaire : ", $obj1->name, "<br>"; //Accées au nom par l'attribut directement (possible car public)
$obj1->set_name("lucas"); //changement du nom a l'aide d'une méthode héritée
echo ">>> ", $obj1->get_name(), "<br>";

echo ">>> ", $obj1->get_age(), "<br>"; //Accées a l'age par un getter (obigatoire car non public)
echo ">>> ", $obj1::EX_CONST, "<br>";
?>

</body>
</html>