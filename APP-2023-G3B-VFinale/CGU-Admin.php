<?php
// Création de la connexion
$db = new PDO("mysql:host=localhost;dbname=bdd-stm", "root", "");

// Vérification de la connexion
if ($db === false) {
    die("Erreur de connexion à la base de données");
}

// Récupération des questions cgu, indépendamment de la soumission du formulaire


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_cgu'], $_POST['titre_texte'], $_POST['texte']) && !empty($_POST['id_cgu']) && !empty($_POST['titre_texte']) && !empty($_POST['texte'])) {
        $id_cgu = $_POST['id_cgu'];
        $titre_texte = $_POST['titre_texte'];
        $texte = $_POST['texte'];
        // Assurez-vous que cette variable correspond partout

        $sql = "INSERT INTO cgu (id_cgu,titre_texte, texte) VALUES (:id_cgu, :titre_texte, :texte)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id_cgu', $id_cgu);
        $stmt->bindParam(':titre_texte', $titre_texte);
        $stmt->bindParam(':texte', $texte);

        if ($stmt->execute()) {
            echo "Question ajoutée avec succès";
            header("Location: CGU-Admin.php");
            exit();
        } else {
            echo "Erreur lors de l'ajout de la question";
        }
    }
}

if (isset($_POST['remove_last_line'])) {
    // Query to remove the last line from the table
    $sql = "DELETE FROM cgu ORDER BY id_cgu DESC LIMIT 1";

    if ($db->query($sql) === TRUE) {
        echo "Dernière ligne retirée avec succès.";
        header("Location: CGU-Admin.php");
        exit();
    }
}

$query = "SELECT * FROM cgu";
$stmt = $db->prepare($query);
$stmt->execute();
$cgu = $stmt->fetchAll(PDO::FETCH_ASSOC);

$db = null;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Stylesheet.css"> 
        <script src="script.js"></script>


        <title>Popup CGU</title>
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

            <a href="login.php" class="login">Connexion/Inscription</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
        </div>


        <div class="cgu-box">

            <!-- Votre contenu CGU ici -->
            <h3>Conditions Générales d'Utilisation (CGU)</h3>
            <h4>1. Acceptation des conditions d'utilisation</h4>

            <p>En utilisant le site web SonicTrack Master (STM) et ses services connexes, vous acceptez sans réserve les présentes Conditions Générales d'Utilisation.</p>

            <h4>2. Utilisation du site</h4>

            <p>2.1 Vous devez être âgé d'au moins 18 ans pour utiliser ce site.</p>
            <p>2.2 Vous acceptez de ne pas utiliser ce site à des fins illégales ou interdites.</p>

            <h4>3. Propriété intellectuelle</h4>

            <p>3.1 Le contenu, les logos, les marques de commerce, et toute autre propriété intellectuelle présente sur ce site sont la propriété exclusive de SonicTrack Master (STM).</p>
            <p>3.2 Vous n'êtes pas autorisé à reproduire, distribuer, ou modifier tout contenu provenant de ce site sans l'autorisation expresse de SonicTrack Master (STM).</p>

            <h4>4. Confidentialité</h4>

            <p>4.1 Vous acceptez les termes de notre Politique de Confidentialité disponible sur ce site.</p>

            <h4>5. Limitation de responsabilité</h4>

            <p>5.1 SonicTrack Master (STM) ne peut être tenu responsable des dommages directs, indirects, spéciaux, consécutifs, ou punitifs résultant de l'utilisation ou de l'impossibilité d'utiliser ce site.</p>

            <h4>6. Modifications des conditions d'utilisation</h4>

            <p>6.1 SonicTrack Master (STM) se réserve le droit de modifier ces Conditions Générales d'Utilisation à tout moment. Les utilisateurs seront informés des modifications via une notification sur le site.</p>

            <h4>7. Droit applicable et juridiction compétente</h4>

            <p>7.1 Ces Conditions Générales d'Utilisation sont régies par les lois en vigueur dans [votre région]. Tout litige découlant de l'utilisation de ce site sera soumis à la juridiction exclusive des tribunaux compétents de [votre juridiction].</p>

            <?php foreach ($cgu as $cgus): ?>
                <div class="cgu-item">
                    <h4><?php echo $cgus['id_cgu']; ?>. <?php echo $cgus['titre_texte']; ?></h4>

                    <p><?php echo $cgus['id_cgu']; ?>.1  <?php echo $cgus['texte']; ?></p>

                </div>
            <?php endforeach; ?>

            <div style="display:flex; margin-left:40px;">

                <button class="add_condition" style="
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
                        border: 2px solid #333;" onclick="toggleForm()">Ajouter une condition</button>


                <form method="post" class="removeLineButton" style="margin-left:20%;">
                    <input type="submit" style="border-radius: 25px;
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
                           border: 2px solid #333;" name="remove_last_line" value="Remove Last Line" >
                </form>
            </div>
            <div id="add_condition" style="display: none;margin-left:40px;">
                <form action="#" method="post" enctype="multipart/form-data">
                    <label for="id_cgu">Numéro de la CGU:</label>
                    <input type="int" name="id_cgu" required>
                    <p></p>
                    <label for="titre_texte">Nouveau titre de la condition:</label>
                    <input type="text" name="titre_texte" required>
                    <p></p>
                    <label for="texte">texte:</label>
                    <input type="text" name="texte" required>
                    <p></p>
                    <button style="border-radius: 25px;

                            background-color: #333;
                            border: none;
                            color: white;
                            padding: 16px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            height:65px;
                            margin: 4px 2px;
                            cursor: pointer;
                            border: 2px solid #333"
                            onclick="return window.confirm('Etes-vous sûrs?')">Enregistrer la nouvelle condition</button>
                </form>
            </div>

        </div>


    </body>

</html>