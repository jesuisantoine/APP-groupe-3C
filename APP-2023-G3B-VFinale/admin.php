<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "bdd-stm";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['action']) && !empty($_POST['nom']) && !empty($_POST['prenom'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $action = $_POST['action'];

        if ($action === 'delete') {
            // Supprimer l'utilisateur de la base de données
            $deleteSql = "DELETE FROM utilisateur WHERE nom = ? AND prenom = ?";
            $deleteStmt = $conn->prepare($deleteSql);
            $deleteStmt->bind_param('ss', $nom, $prenom);

            if ($deleteStmt->execute()) {
                echo "Utilisateur supprimé avec succès";
            } else {
                echo "Erreur lors de la suppression de l'utilisateur";
            }
        } elseif ($action === 'updateType') {
            // Mettre à jour le type de l'utilisateur à 1
            $updateTypeSql = "UPDATE utilisateur SET type = 1 WHERE nom = ? AND prenom = ?";
            $updateTypeStmt = $conn->prepare($updateTypeSql);
            $updateTypeStmt->bind_param('ss', $nom, $prenom);

            if ($updateTypeStmt->execute()) {
                echo "Type de l'utilisateur mis à jour avec succès";
            } else {
                echo "Erreur lors de la mise à jour du type de l'utilisateur";
            }
        }
    }
}
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
                <a href="indexAdmin.php">Accueil</a>
                <a href="aboutusAdmin.php">A propos de nous</a>
                <a href="eventsAdmin.php">Évènements</a>
                <a href="shopAdmin.php">Boutique</a>

                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Search...">
                    <button onclick="search()">Search</button>
                </div>

                <a href="admin.php" class="login">Admin</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
            </div>
        </div>
        
        <div style="padding:50px;"></div>
        <h1 style='text-align: center;'>Gestion des utilisateurs:</h1>
        <div style="padding:20px;"></div>
        <div style='background-color:white;border-radius:20px;padding:15px;max-width:70%;margin:auto;text-align: center;'>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" required><br>
            <p></p>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" required><br>
            <p></p>
            <label>Action:</label>
            <select name="action">
                <option value="delete">Supprimer</option>
                <option value="updateType">Donner droits d'administrateur</option>
            </select><br>
            <p></p>
            <input type="submit" value="Effectuer l'action" style="
                   border-radius: 25px;
                   background-color: #333;
                   border: none;
                   height:65px;
                   color: white;
                   padding: 16px 32px;
                   text-align: center;
                   text-decoration: none;
                   display: inline-block;
                   font-size: 16px;
                   margin: 4px 2px;
                   cursor: pointer;
                   border: 2px solid #333;">
        </form>
    </div>
        <div style="padding:60px;"></div>




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
    </body>
</html>