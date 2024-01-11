<?php

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
    $_COOKIE['password1'] = $_POST['password1'];
}
if (isset($_POST['emailConfirmation'])) {
    $_COOKIE['password2'] = $_POST['passwordConfirmation'];
}
//Confirmation du formulaire
if (!empty($_POST['nom'] && $_POST['prenom'] && $_POST['dateNaissance'] && $_POST['password'] && $_POST['passwordConfirmation'])) {
    echo "Vous avez bien rempli le formulaire";
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
    include('index.php');
}
?>
