<!doctype html>
<html lang="fr">
<body style="font-family: Arial, sans-serif;">

<h1>Code :</h1>

<pre>
class table{

public array $array;

function set_array($array) {
    $this->array = $array;
}


/**
 * Algorithmes de Tri par insertion
 * @param void
 * @return void
 */
function tri():void {
    $taille = count($this->array);

    for($i = 0; $i < $taille; $i++)
    {
        $a_inserer = $this->array[$i];
        

        for($j = 0; $j < $i; $j++)
        {
            $element_courant = $this->array[$j];
            if ($a_inserer < $element_courant)
            {
                $this->array[$j] = $a_inserer;
                $a_inserer = $element_courant;
            }  
        }
        $this->array[$i] = $a_inserer;
    }
}
}

$demo = new table();
$demo->set_array(array(15,1,2,0,58,98,100));
echo ">>> ", print_r($demo->array);

$demo->tri();
echo ">>> ", print_r($demo->array);
</pre>

<?php
class table{

    public array $array;

    function set_array($array) {
        $this->array = $array;
    }


    /**
     * Algorithmes de Tri par insertion
     * @param void
     * @return void
     */
    function tri():void {
        $taille = count($this->array);

        for($i = 0; $i < $taille; $i++)
        {
            $a_inserer = $this->array[$i];
            

            for($j = 0; $j < $i; $j++)
            {
                $element_courant = $this->array[$j];
                if ($a_inserer < $element_courant)
                {
                    $this->array[$j] = $a_inserer;
                    $a_inserer = $element_courant;
                }  
            }
            $this->array[$i] = $a_inserer;
        }
    }
}

$demo = new table();
$demo->set_array(array(15,1,2,0,58,98,100));

echo "<u>Affichage :</u><br><br>";
echo "Set_array >>> ", print_r($demo->array), "<br>";
$demo->tri();
echo "Set_array après le tri >>> ", print_r($demo->array);
?>

</body>
</html>