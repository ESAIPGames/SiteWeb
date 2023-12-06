<?php
header('Content-Type: text/html; charset=utf-8');
// Connexion à la base de données
$connexion = new mysqli("sql11.freesqldatabase.com", "sql11667798", "VvrcZ2xFzx", "sql11667798", 3306);


// Vérifier la connexion
if($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}else{

    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $jeu = $_POST['jeu'];

    // Vérifier si l'email existe déjà

    $emailExistQuery = "SELECT id FROM participants WHERE email = '$email'";
    $result = $conn->query($emailExistQuery);

    // Insérer les données dans la base de données

    if ($result->num_rows > 0) {
        // L'email existe déjà
        echo "Erreur : L'email existe déjà dans la base de données.";
    } else {
        // L'email n'existe pas, procède à l'insertion
        $sql = "INSERT INTO participants (nom, prenom, email, repas, jeu) VALUES ('$nom', '$prenom', '$email', '$jeu')";

        if ($conn->query($sql) === TRUE) {
            echo "Inscription réussie !";
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
    }

    // Ferme la connexion
    $conn->close();

}

?>
