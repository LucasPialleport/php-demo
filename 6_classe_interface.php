<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<h1>Code :</h1>

<pre>
// Declaration de l'interface "template"
interface template
{
    public function setCount($val);
    public function getCount();
}

// Implémentation de l'interface
class exemple_interface implements template{

    private $count; //Déclaration atribut privé count

    public function setCount($val)
    {
        $this->count = $val;
    }

    public function getCount()
    {
        return $this->count;
    }

}

$my_count = new exemple_interface();
$my_count->setCount(15);

echo "Valeur de count : ", $my_count->getCount();
</pre>

<?php
// Declaration de l'interface "template"
interface template
{
    public function setCount($val);
    public function getCount();
}

// Implémentation de l'interface
class exemple_interface implements template{

    private $count; //Déclaration atribut privé count

    public function setCount($val)
    {
        $this->count = $val;
    }

    public function getCount()
    {
        return $this->count;
    }

}

$my_count = new exemple_interface();
$my_count->setCount(15);

echo "<u>Affichage :</u><br><br>";
echo "Valeur de count : ", $my_count->getCount();
?>

<p> PS : Une interface est une classe abstraite qu'on pourait en quelque sorte comparer à un cahier des charges à respecter par les classes qui
l'implémente ! <br>
Ici "exemple_interface" (qui est une classe concrète) DOIT implémenter les méthodes décrites dans "template".
</p>

</body>
</html>
