<?php
// Connexion à la base de données avec XAMPP
$db = new PDO('mysql:host=localhost;dbname=BDD_STM', 'root', '');

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
    <title>EVENTO</title>

   

</head>
<body>

<div class="mainPage">
<div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
                <img src="Images/STM.png" alt="STM" align="left" />
                <a href="index.php">Accueil</a>
                <a href="aboutus.html">L'équipe</a>
                <a class="active"href="Page_Event.php">Évènements</a>
                <a href="shop.html">Boutique</a>
                <a href="login.html" class="login">Connexion/Inscription</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
            </div>
    <div style="padding: 30px;"></div>

    <a href="create_event.php" style="text-decoration: none;">
    <button id="AddEvent">Add Event</button>
    </a>


    <h1>Sonic Track Masters : Trouve ton billet facilement pour une nouvelle course !</h1>

    <div id="eventsContainer">
    <?php foreach ($events as $event): ?>
        <a href="event_spec.php?id=<?php echo $event['id_events']; ?>" class="eventDiv">
            <img src="Images/<?php echo $event['image_gradin']; ?>" alt="<?php echo $event['nom']; ?>" class="eventImage"/>
            <h2><?php echo $event['nom']; ?></h2>
            <p><?php echo $event['date']; ?></p>
            <p><?php echo $event['lieu']; ?></p>
        </a>
    <?php endforeach; ?>
    </div>
    <button id="loadMore">Charger plus</button>
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
</script>



    <div class="footer">    
        <!-- Le footer est divisé en colonnes pour mieux répartir le contenu -->
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

    <script src="script.js"></script>
</div>

</body>
</html>