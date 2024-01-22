

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <title>STM Events</title>
        <meta name="description" content="events_specific">
        <link href="Stylesheet.css" rel="stylesheet">
        <script src="script.js" type="text/javascript"></script>
    </head>

    <body>
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


        <?php
        $db = new PDO('mysql:host=localhost;dbname=bdd-stm', 'root', '');
        $id_events = $_GET['id'];
        $stmt = $db->prepare("SELECT * FROM events WHERE id_events = ?");
        $stmt->bindPARAM(1, $id_events);
        $stmt->execute();
        $events = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>


        <a href="BDD_STM.php?id=<?php echo $events["$id_events"]; ?>"></a>
        <div class="stade-box">
            <?php
            $image_data = $events["image_gradin"];
            $base64_image = base64_encode($image_data);
            ?>
            <div class="page">
                <div class="descrption_spc">
                    <fieldset>
                        <legend class="titre2"><p><?php echo $events['nom']; ?> </p></legend>
                        <div class="texte">
                            <div class="mot">
                                <div class="jour">
                                    Jour:
                                </div>
                                <div class="place">
                                    Place:

                                </div>
                            </div>
                            <div class="mot2">
                                <div class="jour">
                                    <p><?php echo $events['date'] ?></p>
                                </div>
                                <div class="place">
                                    <p><?php echo $events['lieu']; ?> </p>
                                </div>
                            </div>
                            <br class="br_event">
                            <div class="mot">
                                Heure:
                            </div>
                            <div class="mot2">
                                <p><?php echo $events['heure']; ?> </p>
                            </div>
                            <br class="br_event">
                            <div class="mot">
                                Description:
                            </div>
                            <div class="mot2">
                                <p><?php echo $events['description']; ?> </p>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <br class="br_event">
                <div class="img_evn">

                    <div class="image-legend-container">
                        <p><?php echo $events['image_gradin']; ?> </p>
                        <div class="legend">
                            <h3>Légende des Décibels</h3>
                            <div class="legend-item"><span class="color-box" style="background-color: green;"></span> 0-60 dB</div>
                            <div class="legend-item"><span class="color-box" style="background-color: orange;"></span> 61-80 dB</div>
                            <div class="legend-item"><span class="color-box" style="background-color: red;"></span> 81-100 dB</div>
                            <div class="legend-item"><span class="color-box" style="background-color: violet;"></span> 101-120 dB</div>
                        </div>


                    </div>
                </div>

                <br class="br_event">
                <!--<div class="comments-section">
                    <h3>Commentaires</h3>

                    <div class="comment-form">
                        <textarea id="commentInput" placeholder="Ajouter un commentaire" onkeydown="handleCommentInput(event)"></textarea>
                        <button class="btn_comment" onclick="addComment()">Ajouter</button>
                        <div id="commentList"> 

                        </div>
                    </div>
                </div>-->
                </a>
                <br>
                <div class="réserver">
                    <div class="phrase_btn_res">
                        J'ai fais mon choix et souhaite réserver:
                    </div>
                    <a href="https://tickets.formula1.com/fr">         
                        <button class ="reserv_btn">
                            Réserver mon billet
                        </button>
                    </a>
                </div>
            </div>
            <div style="padding:30px; background-color:transparent;" ></div>
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
                    <p><a href="CGU-Admin.php" class="foota">CGU</a></p>
                    <p><a href="FAQ-Admin.php" class="foota">FAQ</a></p>
                </div> 
            </div>
        </div>
    </body>
</html>