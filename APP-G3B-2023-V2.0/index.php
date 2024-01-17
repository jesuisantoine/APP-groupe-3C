<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1" charset='utf8'>
        <link rel="stylesheet" href="Stylesheet.css">

    </head>


    <body>

        <div class="mainPage"> <!-- Page par dessus le fond -->

            <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
                <img src="Images/STM.png" alt="STM" align="left" />
                <a href="index.php" class="active">Accueil</a>
                <a href="aboutus.php">L'équipe</a>
                <a href="events.php">Evenements</a>
                <a href="shop.php">Boutique</a>
                <a href="login.php" class="login">Connexion/Inscription</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
            </div>

            <img src="Images/STMLogoEcriture.png" alt="STMEcrit" class="ImageCentrée" align="center" />

            <div class="content stuff">
                <h1>Sonic Track Masters : Révolution de la Sécurité Automobile !</h1>

                Bienvenue chez Sonic Track Masters, où la sécurité sur la piste atteint de nouveaux sommets !

                Spécialistes de la mesure de l'intensité sonore, nous assurons la surveillance en temps réel du bruit des voitures de course. Nos systèmes de pointe identifient instantanément les zones à risque sonore, garantissant une expérience de course palpitante en toute sécurité.

                Découvrez une ère nouvelle de sécurité automobile avec Sonic Track Masters, là où chaque décibel compte, et chaque course est une aventure à vivre intensément !
            </div>
            <div class="divider">
            </div>
            
            <div class="shopDiv stuff">
                <div class="doubleDiv"> 
                    <h1>Besoin d'un casque anti bruit ?</h1>
                    <p>Visitez donc notre boutique !</p>
                    <button href="shop.php">Cliquez ici !</button>
                </div>
                <div class="doubleDiv">
                    <img src="Images/casque1.png" alt=""/>
                </div>
            </div>

            <div class="content stuff">
                <h1>Evenements:</h1>

                <div class="eventDiv">
                    <img src="Images/F1 Background Picture.png" alt="Event1Pic" class="eventImage"/>
                    <p>bla</p>
                    <p>bla</p>
                    <p>bla</p>
                </div>

                <p></p>

                <div class="eventDiv">
                    <img src="Images/F1 Background Picture.png" alt="Event1Pic" class="eventImage"/>
                    <p>bla</p>
                    <p>bla</p>
                    <p>bla</p>
                </div>
            </div>



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