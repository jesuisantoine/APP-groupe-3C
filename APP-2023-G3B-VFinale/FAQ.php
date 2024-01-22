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
        $reponse = $_POST['reponse']; // Assurez-vous que cette variable correspond partout

        $sql = "INSERT INTO faq (question, reponse) VALUES (:question, :reponse)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':question', $question);
        $stmt->bindParam(':reponse', $reponse);

        if ($stmt->execute()) {
            echo "Question ajoutée avec succès";
            header("Location: FAQ.php");
            exit();
        } else {
            echo "Erreur lors de l'ajout de la question";
        }
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

                    <div class="faq-item">
                        <input type="checkbox" id="question1">
                        <label for="question1" class="question">Qu'est-ce que te propose SonicTrack Master (STM) en tant qu'entreprise?</label>
                        <div class="answer"> STM est une entreprise spécialisée dans la gestion du son pour les circuits automobiles. Nous concevons le produit Sonic Tracker, destiné aux propriétaires de circuits, pour mesurer et gérer le niveau sonore dans les gradins.</div>
                    </div>

                    <div class="faq-item">
                        <input type="checkbox" id="question2">
                        <label for="question2" class="question">Quel est notre produit ?</label>
                        <div class="answer">Le produit phare de SonicTrack Master est le Sonic Tracker. Il est conçu pour les propriétaires de circuits automobile afin de mesurer les niveaux sonores dans les gradins et d'optimiser l'expérience des spectateurs.</div>
                    </div>

                    <div class="faq-item">
                        <input type="checkbox" id="question3">
                        <label for="question3" class="question">Quel service est offert aux spectateurs sur le site internet de SonicTrack Master?</label>
                        <div class="answer">Nous offrons un site internet permettant aux spectateurs de réserver leur place en fonction des niveaux de décibels et de la qualité des enceintes dans les gradins.</div>
                    </div>

                    <div class="faq-item">
                        <input type="checkbox" id="question4">
                        <label for="question4" class="question">Quels types d'événements sont couverts par SonicTrack Master?</label>
                        <div class="answer">SonicTrack Master couvre une large gamme d'événements de sports motorisés, tels que la Formule 1, la Formule 2, les Nascars, et les courses de motos.</div>
                    </div>

                    <div class="faq-item">
                        <input type="checkbox" id="question5">
                        <label for="question5" class="question">Comment choisir ma place dans les gradins lors d'un événement sur le circuit automobile? </label>
                        <div class="answer">Lorsque vous réservez votre place sur notre site, nous vous fournissons des informations détaillées sur les niveaux sonores attendus à différents emplacements dans les gradins. Vous pouvez ainsi choisir une place qui correspond à votre préférence en termes de niveau sonore, vous assurant une expérience confortable et sécuritaire.</div>
                    </div>
                    <?php foreach ($faq as $faqs): ?>
                        <div class="faq-item">
                            <input type="checkbox" id="question<?php echo $faqs['id_faq']; ?>"> 
                            <label for="question<?php echo $faqs['id_faq']; ?>" class="question"><?php echo $faqs['question']; ?></label>
                            <div class="answer"><?php echo $faqs['reponse']; ?></div>
                        </div>
                    <?php endforeach; ?>


                </div>



            </div>



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

</html>