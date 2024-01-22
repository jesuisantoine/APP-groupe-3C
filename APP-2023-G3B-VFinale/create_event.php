<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pour la connection
    $db = new PDO("mysql:host=localhost;dbname=bdd-stm", "root", "");

    if ($db === false) {
        die("Erreur de connexion à la base de données");
    }

    // Recuperer les donnees depuis la bdd
    $nom = $_POST['nom'];
    $date = $_POST['date'];
    $lieu = $_POST['lieu'];
    $heure = $_POST['heure'];

    $description = $_POST['description'];
    $image_gradin = $_FILES['image_gradin']['name'];
    $bruit_gradin = $_POST['bruit_gradin'];
    $image_stade = $_FILES['image_stade']['name'];

    // Pour rentrer les donnees dans la bdd - SQL
    $sql = "INSERT INTO events (nom, date, lieu, heure, description, image_gradin, bruit_gradin, image_stade) 
            VALUES (:nom, :date, :lieu, :heure, :description, :image_gradin, :bruit_gradin, :image_stade)";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':lieu', $lieu);
    $stmt->bindParam(':heure', $heure);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image_gradin', $image_gradin);
    $stmt->bindParam(':bruit_gradin', $bruit_gradin);
    $stmt->bindParam(':image_stade', $image_stade);

    // Executer les query 
    if ($stmt->execute()) {
        echo "Event created successfully";
        header("Location: events.php");
        exit();
    }
}

$db = null;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Stylesheet.css">
        <title>Create Event</title>
    </head>

    <body>

        <div class="mainPage">
            <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
                <img src="Images/STM.png" alt="STM" align="left" />
                <a href="indexAdmin.php">Accueil</a>
                <a href="aboutusAdmin.php">A propos de nous</a>
                <a href="eventsAdmin.php" class="active">Évènements</a>
                <a href="shopAdmin.php">Boutique</a>

                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Search...">
                    <button onclick="search()">Search</button>
                </div>

                <a href="admin.php" class="login">Admin</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
            </div>

            <div style="padding:50px;"></div>
            <div style="max-width:70%; margin-left:15%; padding:10px 20px 20px 15px; background-color:white; border-radius:20px;">


                <h1>Create Event</h1>

                <form action="#" method="post" enctype="multipart/form-data">
                    <label for="nom">Event Name:</label>
                    <input type="text" name="nom" required>
                    <p></p>

                    <label for="date">Date:</label>
                    <input type="date" name="date" required>
                    <p></p>
                    <label for="lieu">Location:</label>
                    <input type="text" name="lieu" required>
                    <p></p>
                    <label for="heure">Time:</label>
                    <input type="text" name="heure" required>
                    <p></p>
                    <label for="description">Description:</label>
                    <textarea name="description" rows="3" required></textarea>
                    <p></p>
                    <label for="image_gradin">Image Gradin:</label>
                    <input type="file" name="image_gradin" accept="image/*" required>
                    <p></p>
                    <label for="bruit_gradin">Noise Level:</label>
                    <input type="text" name="bruit_gradin" required>
                    <p></p>
                    <label for="image_stade">Image Stade:</label>
                    <input type="file" name="image_stade" accept="image/*" required>
                    <p></p>
                    <button onclick="return window.confirm('Etes-vous sûrs?')" style="border-radius: 25px;
                           background-color: #333;
                           border: none;
                           color: white;
                           padding: 16px 32px;
                           text-align: center;
                           text-decoration: none;
                           display: inline-block;
                           font-size: 16px;
                           height:100%;
                           margin: 4px 2px;
                           cursor: pointer;
                           border: 2px solid #333;">Créer l'évènement</button>
                </form>
            </div>
        </div>

    </body>

</html>
