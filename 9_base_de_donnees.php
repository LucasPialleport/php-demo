<?php
$servername = "localhost";
$username = "php_user";
$password = "PmBM8HW_uGdjJh";
$dbname = "php";

//Etablie la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

//Vérifie la connexion
if (!$conn->connect_error) {
    echo ">>> Connexion établie <br>"; 
}

$conn->query("DROP TABLE IF EXISTS eleve");

//Création de table
$sql_create_table =
    "CREATE TABLE IF NOT EXISTS eleve (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(30) NOT NULL,
    nom VARCHAR(30) NOT NULL,
    email VARCHAR(50)
    )";

if ($conn->query($sql_create_table) === TRUE) {
    echo ">>> La table a bien été crée <br>";
}

//Insertion des données
$sql_insert = 
"INSERT INTO eleve (prenom, nom, email) 
VALUES 
('lucas', 'pialleport', 'lucas.pialleport@etu.unilim.fr'),
('florian', 'rajoye', 'florian.rajoye@etu.unilim.fr'),
('John', 'Doe', 'john@example.com')";

if ($conn->query($sql_insert) === TRUE) {
    echo ">>> Données insérées avec succès <br><br>";
}

$sql_select = "SELECT * FROM eleve";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    // lecture des données
    while($col = $result->fetch_assoc()) {
        echo "id: " . $col["id"]. " | prenom: " . $col["prenom"]. " | nom: " . $col["nom"]. " | email: " . $col["email"]. "<br>";
    }
} else {
    echo "Aucune correspondance trouvée";
}
  
$conn->close();

?>