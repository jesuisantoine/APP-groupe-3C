

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <title>events_specific</title>
        <meta name="description" content="events_specific">
        <link href="Stylesheet.css" rel="stylesheet">
    </head>

    <body>
        <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
                <img src="Images/STM.png" alt="STM" align="left" />
                <a class="active" href="index.html">Accueil</a>
                <a href="aboutus.html">L'équipe</a>
                <a href="events.html">Evenements</a>
                <a href="shop.html">Boutique</a>
                <a href="login.html" class="login">Connexion/Inscription</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
        </div>

        <div class="mainPage">
            <div id="navbar">
                <img src="Images/STM.png" alt="STM" align="left" style="height:56px"/>
                <a class="active" href="javascript:void(0)">Home</a>
                <a href="javascript:void(0)">About us</a>
                <a href="javascript:void(0)">Events</a>
                <a href="javascript:void(0)">Shop</a>
            </div>
        </div>
    <?php 
    $db = new PDO('mysql:host=localhost;dbname=BDD_STM', 'root', '');
    $id_events =  $_GET['id'];
    $stmt = $db->prepare("SELECT * FROM events WHERE id_events = ?");
    $stmt->bindPARAM(1,$id_events);
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
                        <p><?php echo $events['image_gradin']; ?> </p>
                    </div>
                    <br class="br_event">
                    <div class="niveau_sonore">
                        <h1>
                            Je sais pas dans quelle tribune aller, que faire?
                        </h1>
                        <p><?php echo $events['bruit_gradin']; ?> </p>
                    </div>
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
        </div>
    </body>
</html>