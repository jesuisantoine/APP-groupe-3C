<?php
// Création de la connexion
$db = new PDO("mysql:host=localhost;dbname=bdd-stm", "root", "");

// Vérification de la connexion
if ($db === false) {
    die("Erreur de connexion à la base de données");
}

// Récupération des questions FAQ, indépendamment de la soumission du formulaire


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['question'], $_POST['reponse']) && !empty($_POST['question']) && !empty($_POST['reponse'])) {
        $question = $_POST['question'];
        $reponse = $_POST['reponse'];

        // Obtenir la valeur maximale actuelle de 'id_faq'
        $maxIdQuery = "SELECT MAX(id_faq) AS max_id FROM faq";
        $maxIdResult = $db->query($maxIdQuery);
        $maxIdData = $maxIdResult->fetch(PDO::FETCH_ASSOC);

        // Incrémenter la valeur maximale pour obtenir un nouvel 'id_faq'
        $id_faq = $maxIdData['max_id'] + 1;

        // Utiliser la nouvelle valeur 'id_faq' dans l'insertion
        $sql = "INSERT INTO faq (id_faq, question, reponse) VALUES (:id_faq, :question, :reponse)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id_faq', $id_faq, PDO::PARAM_INT);
        $stmt->bindParam(':question', $question);
        $stmt->bindParam(':reponse', $reponse);

        if ($stmt->execute()) {
            echo "Question ajoutée avec succès";
            header("Location: FAQ-Admin.php");
            exit();
        } else {
            echo "Erreur lors de l'ajout de la question";
        }
    }
}

if (isset($_POST['remove_last_question'])) {
    // Query to remove the last line from the table
    $sql = "DELETE FROM faq ORDER BY id_faq DESC LIMIT 1";

    if ($db->query($sql) === TRUE) {
        echo "Dernière question retirée avec succès.";
        header("Location: FAQ-Admin.php");
        exit();
    }
}

$query = "SELECT * FROM faq";
$stmt = $db->prepare($query);
$stmt->execute();
$faq = $stmt->fetchAll(PDO::FETCH_ASSOC);

$db = null;
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <!-- pour mettre l'image a droite du paragraphe  style>
            img {
              float: right; 
            }
            /style> --> 

        <title>FAQ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="Stylesheet.css">
        <script src="add_bouton.js"></script>
    </head>
    <body>

        <div class="mainPage"> <!-- Page par dessus le fond --> 

            <div class="navbar" id="navi"> <!-- bar de navigation -->
                <img src="Images/STM.png" alt="STM" align="left"/>
                <a href="index.php">Home</a>
                <a href="aboutus.php">L'équipe</a>
                <a href="events.php">Evenements</a>
                <a href="shop.php">Boutique</a>
                <a href="login.php" class="login">Connexion/Inscription</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776; </a>
            </div>


            <div class="content">

                <div id="content" lang="fr">
                    <!-- Votre contenu français -->
                </div>


                <div class="faq-container">

                    <div class="faq-title"><h1>FAQ</h1> </div>

                    <?php foreach ($faq as $faqs): ?>
                        <div class="faq-item">
                            <input type="checkbox" id="question<?php echo $faqs['id_faq']; ?>"> 
                            <label for="question<?php echo $faqs['id_faq']; ?>" class="question"><?php echo $faqs['question']; ?></label>
                            <div class="answer"><?php echo $faqs['reponse']; ?></div>
                        </div>
                    <?php endforeach; ?>


                </div>
                <div style="display:flex; margin-left:25%;">

                    <button class="add_question" onclick="toggleForm()" style="border-radius: 25px;
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
                            border: 2px solid #333;">Ajouter une question</button>

                    <form method="post" class="removeQuestionButton" style="margin-left:20%;">
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
                               border: 2px solid #333;" name="remove_last_question" value="Supprimer la dernière question/réponse" >
                    </form>
                </div>

                <div id="addQuestionForm" style="display: none; margin-left:25%;margin-top:40px;">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <label for="question">Nouvelle question:</label>
                        <input type="text" name="question" required>

                        <label for="reponse">Réponse:</label>
                        <input type="text" name="reponse" required>
                        <button onclick="return window.confirm('Etes-vous sûrs?')">Enregistrer la question</button>
                    </form>
                </div>

            </div>
        </div>


        <script>

                function responsiveNavbar() {<!-- Code pour réduire la navbar quand elle rétrécit -->
                    var x = document.getElementById("navi");
                    if (x.className === "navbar") {
                        x.className += " responsive";
                    } else {
                        x.className = "navbar";
            }
                }

        </script>
    </body>
    <div class="footer"> <!-- Le footer est divisé en colonnes pour mieux répartir le contenu -->

<div class="column">
                    <img src="images /Logofooter.png" alt="STM" width="150" height="120" class="imgfooter" />
        </div>

        <div class="column">
            <h2>Contactez nous </h2>
            <p>06 66 76 86 96</p>
            <p>SonicTrackMasters@gmail.com</p>
        </div>

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

</html>