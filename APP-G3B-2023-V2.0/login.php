<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Stylesheet.css">
    </head>
    <body>
        <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
            <img src="Images/STM.png" alt="STM" align="left" />
            <a href="index.php">Accueil</a>
            <a href="aboutus.php">L'équipe</a>
            <a href="events.php" class="active">Evenements</a>
            <a href="shop.php">Boutique</a>
            <a href="login.php" class="login active">Connexion/Inscription</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
        </div>
        <div style="padding:30px;"></div>

        <fieldset class="login2">
            <h1 class="title"> Connexion </h1>

            <div id="col">
                <div class="contien">

                    <label class="box">Email : </label>
                    <div style="padding:5px;"></div>
                    <input class="box2" placeholder=" " autocomplete="off" />
                    <div style="padding:20px;"></div>
                    <label class="box"> Mot de passe : </label>
                    <div style="padding:5px;"></div>
                    <input class="box2" placeholder=" " autocomplete="off" />

                </div>
                <div style="padding:20px;"></div>

            </div>

            <a href="" class="butonconect">Connexion</a>
            <div style="padding:20px;"></div>
        </fieldset>

        <a href="register.php" class="buton"><span>Inscription</span></a>
        <div class="footer"> <!-- Le footer est divisé en colonnes pour mieux répartir le contenu -->

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
    </body>
</html>
