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
        header("Location: Page_Event.php");
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
        <div class="navbar" id="navi">
            <img src="Images/STM.png" alt="STM" align="left" />
            <a href="index.php">Accueil</a>
            <a href="aboutus.html">L'équipe</a>
            <a href="Page_Event.php" class="active">Evenements</a>
            <a href="shop.html">Boutique</a>
            <a href="login.html" class="login">Connexion/Inscription</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
        </div>
        <div style="padding: 30px;"></div>

        <h1>Create Event</h1>

        <form action="#" method="post" enctype="multipart/form-data">
            <label for="nom">Event Name:</label>
            <input type="text" name="nom" required>

            <label for="date">Date:</label>
            <input type="date" name="date" required>

            <label for="lieu">Location:</label>
            <input type="text" name="lieu" required>

            <label for="heure">Time:</label>
            <input type="text" name="heure" required>

            <label for="description">Description:</label>
            <textarea name="description" rows="4" required></textarea>

            <label for="image_gradin">Image Gradin:</label>
            <input type="file" name="image_gradin" accept="image/*" required>

            <label for="bruit_gradin">Noise Level:</label>
            <input type="text" name="bruit_gradin" required>

            <label for="image_stade">Image Stade:</label>
            <input type="file" name="image_stade" accept="image/*" required>

            <button onclick="return window.confirm('Etes-vous sûrs?')">Créer l'évènement</button>
        </form>
    </div>

</body>

</html>
