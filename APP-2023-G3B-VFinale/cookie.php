<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $civi = $_POST['civi'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $dateNaissance = $_POST['dateNaissance'];
    $motDePasse = $_POST['password'];

    // Connexion à la base de données (remplacez ces valeurs par les vôtres)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdd-stm";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}

//création des cookies
setcookie('nom', '');
setcookie('prenom', '');
setcookie('dateNaissance', '');
setcookie('email', '');
setcookie('password1', '');
setcookie('password2', '');

//Création des variable d'erreurs
$error_nom = '';
$error_prenom = '';
$error_dateNaissance = '';
$error_email = '';
$error_password1 = '';
$error_password2 = '';

//Gestion des cookies
if (isset($_POST['nom'])) {
    $_COOKIE['nom'] = $_POST['nom'];
}

if (isset($_POST['prenom'])) {
    $_COOKIE['prenom'] = $_POST['prenom'];
}
if (isset($_POST['dateNaissance'])) {
    $_COOKIE['dateNaissance'] = $_POST['dateNaissance'];
}
if (isset($_POST['email'])) {
    $_COOKIE['email'] = $_POST['email'];
}
if (isset($_POST['password'])) {
    $_COOKIE['password1'] = $_POST['password'];
}
if (isset($_POST['passwordConfirmation'])) {
    $_COOKIE['password2'] = $_POST['passwordConfirmation'];
}
//Confirmation du formulaire
if (!empty($_POST['nom'] && $_POST['prenom'] && $_POST['dateNaissance'] && $_POST['password'] && $_POST['passwordConfirmation'])) {
    echo "Vous avez bien rempli le formulaire";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $civi = $_POST['civi'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $dateNaissance = $_POST['dateNaissance'];
        $motDePasse = $_POST['password'];
        $confirmation = $_POST['passwordConfirmation'];

        // Connexion à la base de données (remplacez ces valeurs par les vôtres)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bdd-stm";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
// Échapper les valeurs pour prévenir les injections SQL
        $civi = $conn->real_escape_string($civi);
        $nom = $conn->real_escape_string($nom);
        $prenom = $conn->real_escape_string($prenom);
        $email = $conn->real_escape_string($email);
        $dateNaissance = $conn->real_escape_string($dateNaissance);
        $motDePasse = $conn->real_escape_string($motDePasse);
        $confirmation = $conn->real_escape_string($confirmation);

        // Hash du mot de passe (utilisez une méthode de hachage sécurisée)
        $motDePasseHash = password_hash($motDePasse, PASSWORD_DEFAULT);

        // Insertion des données dans la base de données
        $sql = "INSERT INTO utilisateur (civi, nom, prenom, email, datenaissance, motDePasse, confirmation) VALUES ('$civi', '$nom', '$prenom', '$email', '$dateNaissance', '$motDePasseHash', '$confirmation')";

        if ($conn->query($sql) === TRUE) {
            echo "Compte créé avec succès!";
            header("Location: index.php");
        } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    include('index.php');
}
//Gestion des erreurs
else {
    if (empty($_POST['nom'])) {
        $error_nom = "Merci de remplir votre nom";
    }
    if (empty($_POST['prenom'])) {
        $error_prenom = "Merci de remplir votre prénom";
    }
    if (empty($_POST['dateNaissance'])) {
        $error_dateNaissance = "Merci de remplir votre date de naissance";
    }
    if (empty($_POST['email'])) {
        $error_dateNaissance = "Merci de remplir votre email";
    }
    if (empty($_POST['password'])) {
        $error_password1 = "Merci de remplir votre mot de passe";
    }
    if (empty($_POST['passwordConfirmation'])) {
        $error_password2 = "Merci de confirmer votre mot de passe";
    }
    include('register.php');
}
?>
