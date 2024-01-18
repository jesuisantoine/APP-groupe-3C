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
<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1" charset='utf8'>
        <link rel="stylesheet" href="Stylesheet.css">
        
    </head>
    
    
    <body>

        <div class="mainPage"> <!-- Page par dessus le fond -->

            <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
                <img src="Images/STM.png" alt="STM" align="left" />
                <a class="active" href="index.html">Accueil</a>
                <a href="aboutus.html">L'équipe</a>
                <a href="events.html">Evenements</a>
                <a href="shop.html">Boutique</a>
                <a href="login.html" class="login">Connexion/Inscription</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
            </div>

            <img src="Images/STMLogoEcriture.png" alt="STMEcrit" class="ImageCentrée" align="center" />

            <div class="content">
                <h1>Sonic Track Masters : Révolution de la Sécurité Automobile !</h1>

Bienvenue chez Sonic Track Masters, où la sécurité sur la piste atteint de nouveaux sommets !

Spécialistes de la mesure de l'intensité sonore, nous assurons la surveillance en temps réel du bruit des voitures de course. Nos systèmes de pointe identifient instantanément les zones à risque sonore, garantissant une expérience de course palpitante en toute sécurité.

Découvrez une ère nouvelle de sécurité automobile avec Sonic Track Masters, là où chaque décibel compte, et chaque course est une aventure à vivre intensément !
            </div>

            <div class="textOnImage"> <!-- bouton sur une image, jsp ce qu'on peut mettre dessus -->
                <img src="Images/F1 Background Picture.png" alt="F1" style="width:100%"/>
                <div class="centered">Louez votre propre casque anti-bruit dès aujourd'hui !</div>
                <button class="btn">En savoir plus...</button>
            </div> 
            <div class="content">
                <h1>Evenements:</h1>

                    <?php foreach ($events as $event): ?>
                    <a href="event_spec.php?id=<?php  echo $event['id_events'] ?>">
                    <div class="eventDiv">
                    
                    <!-- Contenu du lien -->

                    <img src="data:image/jpeg;base64,<?= base64_encode($event['image_gradin']) ?>" alt="Event1Pic" style="float:right;height:210px;border-radius: 25px;"/>
                    <div class="des_base">
                    <p><?= $event['nom'] ?></p>
                    <p><?= $event['date'] ?></p>
                    <p><?= $event['lieu'] ?></p>
                    <p><?= $event['image_stade'] ?></p>
                    </div>

                    <!-- Ajoutez d'autres champs selon vos besoins -->
                    </a>
            </div>
            <?php endforeach; ?>

            </div>
            
            
            
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
                
            </div>
        </div>

        <script>

            function responsiveNavbar() { <!-- Code pour réduire la navbar quand elle rétrécit -->
                var x = document.getElementById("navi");
                if (x.className === "navbar") {
                    x.className += " responsive";
                } else {
                    x.className = "navbar";
                }
            }

        </script>



    </body>
</html>