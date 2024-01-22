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

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form values
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $confirmation = $_POST["confirmation"];

    // Query to check user credentials
    $sql = "SELECT * FROM utilisateur WHERE prenom = '$prenom' AND nom = '$nom' AND confirmation = '$confirmation'";
    $result = $conn->query($sql);

    // Check if a matching user is found
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $userType = $user['type'];

        if ($userType == 1) {
            // Admin user - redirect to admin.php
            echo '<script>alert("You are connected as admin!");</script>';
            header("Location: admin.php");
            exit();
        } else {
            // Normal user - display message
            echo '<script>alert("You are connected!");</script>';
            header("Location: index.php");
            exit();
        }
    } 
    else {
        // Invalid credentials
        echo '<script>alert("Nom, prenom ou mot de passe incorrect.");</script>';
    }
}

// Close the database connection
$conn->close();
?>

<html>
    <head>
        <title>STM Login</title>
        <link href="Stylesheet.css" rel="stylesheet" type="text/css"/>
        <script src="script.js" type="text/javascript"></script>
    </head>
    <body>

        <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
            <img src="Images/STM.png" alt="STM" align="left" />
            <a href="index.php">Accueil</a>
            <a href="aboutus.php">A propos de nous</a>
            <a href="events.php">Évènements</a>
            <a href="shop.php">Boutique</a>

            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <button onclick="search()">Search</button>
            </div>

            <a href="login.php" class="login active">Connexion/Inscription</a>
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



        <div class="login-box">
            <h2>Se connecter</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="user-box">
                    <input type="text" name="prenom" required=""</p>
                    <label>Prenom</label>
                </div>
                <div class="user-box">
                    <input type="text" name="nom" required=""</p>
                    <label>Nom</label>
                </div>
                <div class="user-box">
                    <input type="text" name="confirmation" required=""</p>
                    <label>Mot de Passe</label>
                </div>

                <input type="submit" value="connexion" class="connect">
            </form>

            <a href="register.php"><button class="regi">Créer un compte</button></a>
        </div>

    </body>
</html>