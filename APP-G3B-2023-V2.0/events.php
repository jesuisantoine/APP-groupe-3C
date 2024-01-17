<?php
// Connexion à la base de données avec XAMPP
$db = new PDO('mysql:host=localhost;dbname=BDD_STM', 'root', '');

// Vérification des erreurs de connexion
if ($db === false) {
    die("Erreur de connexion à la base de données");
}

// Récupération des données depuis la table Events
$query = "SELECT * FROM Events";
$stmt = $db->prepare($query);
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Stylesheet.css">
        <title>Events</title>

        <style>
            #addEventContainer {
                text-align: center;
            }
        </style>

    </head>
    <body>



        <div class="mainPage">
            <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
                <img src="Images/STM.png" alt="STM" align="left" />
                <a href="index.php">Accueil</a>
                <a href="aboutus.php">L'équipe</a>
                <a href="events.php" class="active">Evenements</a>
                <a href="shop.php">Boutique</a>
                <a href="login.php" class="login">Connexion/Inscription</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
            </div>
            <div style="padding: 30px;">

            </div>
            <h1></h1>  
            <h1> </h1>   

            <a href="create_event.php">
                <div id="addEventContainer">

                    <button id="AddEvent">Add Event</button>
                </div>
            </a>

            <div class="content">
                <h1>Sonic Track Masters : Trouve ton billet facilement pour une nouvelle course !</h1>

                Voici une liste des differentes courses automobiles auxquelles nous sommes affilies. Cette liste sera mise a jour par les administrateurs afin d'offrir un grand eventail d'evenements automobile pour vous satisfaire!
            </div>



            <a href="event_spec.php" class="eventDiv">
                <img src="Images/F1 Background Picture.png" alt="Event1Pic" class="eventImage"/>
                <h2>Autriche</h2>
                <p>17/02/2070</p>
                <p>Vers le bout du chemin un peu sur la droite et la caye t arrive</p>
            </a>

            <div id="eventsContainer"></div>

            <div class="footer"> <!-- Le footer est divisé en colonnes pour mieux répartir le contenu -->
                <div class="column">
                    <h1>Contactez nous:</h1>
                    <p>06 66 66 66 66</p>
                    <p>quelquechose@gmail.com</p>
                </div>  
                <div class="column">
                    <h1>Réseaux Sociaux:</h1>
                    <p>Instagram: @Tony_nora</p>
                    <p>Facebook: à rajouter</p>
                </div>      
                <script src="script.js"></script>
            </div>

    </body>
</html>