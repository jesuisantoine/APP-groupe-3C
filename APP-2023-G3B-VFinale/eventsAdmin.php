<?php
// Connexion à la base de données avec XAMPP
$db = new PDO('mysql:host=localhost;dbname=bdd-stm', 'root', '');

// Vérification des erreurs de connexion
if ($db === false) {
    die("Erreur de connexion à la base de données");
}

// Récupération des données depuis la table Events
$query = "SELECT * FROM Events ORDER BY date DESC";
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
        <title>STM Events</title>
        <script src="script.js" type="text/javascript"></script>

    </head>
    <body>

        <div class="mainPage">
            <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
                <img src="Images/STM.png" alt="STM" align="left" />
                <a href="indexAdmin.php">Accueil</a>
                <a href="aboutusAdmin.php">A propos de nous</a>
                <a class="active" href="eventsAdmin.php">Évènements</a>
                <a href="shopAdmin.php">Boutique</a>
                
                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Search...">
                    <button onclick="search()">Search</button>
                </div>
                
                <a href="admin.php" class="login">Admin</a>
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

            <div style="padding: 30px;"></div>

            

            <div class="content stuff">
                <h1>Sonic Track Masters : Trouve ton billet facilement pour une nouvelle course !</h1>
            </div>
            <div id="eventsContainer">
                <?php foreach ($events as $event): ?>
                    <a href="event_specAdmin.php?id=<?php echo $event['id_events']; ?>" class="eventDiv">
                        <img src="Images/<?php echo $event['image_gradin']; ?>" alt="<?php echo $event['nom']; ?>" class="eventImage"/>
                        <h2><?php echo $event['nom']; ?></h2>
                        <p><?php echo $event['date']; ?></p>
                        <p><?php echo $event['lieu']; ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
            
            <a href="create_event.php" style="text-decoration: none;">
                <button id="AddEvent">Add Event</button>
            </a>
            <p></p>
            <p></p>
            <!--<button id="loadMore">Charger plus</button>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    let currentIndex = 0;
                    const eventsPerPage = 5;
                    const events = document.querySelectorAll('.eventDiv');
                    const totalEvents = events.length;
                    const loadMoreButton = document.getElementById('loadMore');

                    function showMoreEvents() {
                        const endIndex = currentIndex + eventsPerPage;
                        for (let i = currentIndex; i < endIndex && i < totalEvents; i++) {
                            events[i].style.display = 'block';
                        }
                        currentIndex += eventsPerPage;
                        if (currentIndex >= totalEvents) {
                            loadMoreButton.style.display = 'none'; // Cacher le bouton s'il n'y a plus d'événements à afficher
                        }
                    }

                    loadMoreButton.addEventListener('click', showMoreEvents);

                    // Afficher initialement les premiers événements
                    showMoreEvents();
                });
            </script>-->



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
                        <p><a href="CGU-Admin.php" class="foota">CGU</a></p>
                        <p><a href="FAQ-Admin.php" class="foota">FAQ</a></p>
                    </div> 
                </div>
            </div>

            <script src="script.js"></script>
        </div>

    </body>
</html>