<!DOCTYPE html>
<?php
// Connexion à la base de données avec XAMPP
$db = new PDO('mysql:host=localhost;dbname=bdd-stm', 'root', '');

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

<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1" charset='utf8'>
        <link rel="stylesheet" href="Stylesheet.css">
        <title>STM Accueil</title>
        <script src="script.js" type="text/javascript"></script>

    </head>


    <body>

        <div class="mainPage"> <!-- Page par dessus le fond -->

            <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
                <img src="Images/STM.png" alt="STM" align="left" />
                <a href="index.php" class="active">Accueil</a>
                <a href="aboutus.php">A propos de nous</a>
                <a href="events.php">Évènements</a>
                <a href="shop.php">Boutique</a>

                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Search...">
                    <button onclick="search()">Search</button>
                </div>

                <a href="login.php" class="login">Connexion/Inscription</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
            </div>

            <!-- Sticky Button -->
            <button id="openQAModal" onclick="openQAModal()">?</button>

            <!-- Q&A Modal -->
            <div id="qAModal">
                <span class="close" onclick="closeQAModal()">&times;</span>
                <!-- Q&A Content -->

                <div id="answer"><h1>Chatbot</h1></div>
                <div class="options" onclick="selectOption(event)">
                    <div class="option" style="margin-top:10px;" data-answer="Notre produit est le Sonic Tracker, visitez la page about us pour en savoir plus !">Quel est notre produit ?</div>
                    <div class="option" data-answer="SonicTrack Master couvre une large gamme d'événements de sports motorisés">Quels types d'événements sont couverts par SonicTrack Master?</div>
                    <div class="option" data-answer="Via nos réseaux sociaux ou via mail, indiqués en bas de la page">Comment nous contacter ?</div>
                </div>
            </div>

            <img src="Images/STMLogoEcriture.png" alt="STMEcrit" class="ImageCentrée" align="center" />

            <div class="content stuff">
                <h1>Sonic Track Masters : Révolution de la Sécurité Automobile !</h1>

                <p>Bienvenue chez Sonic Track Masters, où la sécurité sur la piste atteint de nouveaux sommets !</p>

                <p>Spécialistes de la mesure de l'intensité sonore, nous assurons la surveillance en temps réel du bruit des voitures de course. Nos systèmes de pointe identifient instantanément les zones à risque sonore, garantissant une expérience de course palpitante en toute sécurité.</p>

                <p>Découvrez une ère nouvelle de sécurité automobile avec Sonic Track Masters, là où chaque décibel compte, et chaque course est une aventure à vivre intensément !</p>
            </div>
            <div class="divider">
            </div>

            <div class="shopDiv stuff">
                <div class="doubleDiv"> 
                    <h1>Besoin d'un casque anti bruit ?</h1>
                    <p>Visitez donc notre boutique !</p>
                    <button onclick="window.location.href='shop.php';" value="w3docs"">Cliquez ici !</button>
                </div>
                <div class="doubleDiv">
                    <img src="Images/casque_bleu.png" alt=""/>
                </div>
            </div>

            <div class="content stuff">
                <a href="events.php" style="text-decoration: none; color: black;">
                    <h1>Évènements:</h1>
                </a>
                <div id="eventsContainer">
                    <?php $counter = 0; ?>
                    <?php foreach ($events as $event): ?>
                        <?php if ($counter >= 3) break; ?>
                        <a href="event_spec.php?id=<?php echo $event['id_events']; ?>" class="eventDiv">
                            <img src="Images/<?php echo $event['image_gradin']; ?>" alt="<?php echo $event['nom']; ?>" class="eventImage"/>
                            <h2><?php echo $event['nom']; ?></h2>
                            <p><?php echo $event['date']; ?></p>
                            <p><?php echo $event['lieu']; ?></p>
                        </a>
                        <?php $counter++; ?>
                    <?php endforeach; ?>
                </div>




            </div>
            <div class="footer"> <!-- Le footer est divisé en colonnes pour mieux répartir le contenu -->
                <div class="half">
                    <div class="column">
                        <img src="images /Logofooter.png" alt="STM" width="150" height="120" class="imgfooter" />
                    </div>

                    <div class="column">
                        <h2>Contactez nous </h2>
                        <p>06 66 76 86 96</p>
                        <p>SonicTrackMasters@gmail.com</p>
                    </div>
                </div>
                <div class="half">
                    <div class="column">
                        <h2>Réseaux Sociaux </h2>
                        <p>Instagram : @STM </p>
                        <p>Facebook : STM_Company </p>
                        <p>LinkedIN : Sonic Track Masters </p>
                    </div> 

                    <div class="column">
                        <h2>Services en ligne </h2>
                        <p><a href="login.php" class="foota">Mon compte</a></p>
                        <p><a href="CGU.php" class="foota">CGU</a></p>
                        <p><a href="FAQ.php" class="foota">FAQ</a></p>
                    </div> 
                </div>
            </div>
        </div>

    </body>
</html>