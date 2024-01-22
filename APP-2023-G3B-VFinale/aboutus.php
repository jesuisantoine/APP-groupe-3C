<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <title>About Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Stylesheet.css">
        <script src="script.js" type="text/javascript"></script>
    </head>
    <body>

        <div class="mainPage"> <!-- Page par dessus le fond --> 

            <div class="navbar" id="navi"> <!-- bar de navigation -->
                <img src="Images/STM.png" alt="STM" align="left"/>
                <a href="index.php">Accueil</a>
                <a class="active" href="aboutus.php">A propos de nous</a>
                <a href="events.php">Évènements</a>
                <a href="shop.php">Boutique</a>
                
                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Search...">
                    <button onclick="search()">Search</button>
                </div>
                
                <a href="login.php" class="login">Connexion/Inscription</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776; </a>
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

            <a href="#" class="bouton bouton-default">Bouton par défaut</a>

            <div class="content">


                <div class="TextDiv">     
                    <h2>A propos de nous</h2>
                    <p>Bienvenue chez SonicTrack Master (STM), où nous révolutionnons votre expérience en journée de course. STM est fier de vous présenter notre produit phare, le Sonic Tracker, conçu sur mesure pour les propriétaires de circuits et les passionnés de courses. Notre mission est de transformer le monde du sport automobile en améliorant votre expérience auditive.</p>
                </div>

                <div class="TextDiv1">
                    <h2>Notre histoire</h2>
                    <p>STM est né de l'amour des sports automobiles et du désir de créer des expériences en journée de course plus sûres et plus agréables. Notre aventure a commencé avec la vision de concevoir un produit capable de mesurer les niveaux sonores dans les tribunes des circuits de sport automobile. Ce produit protège non seulement votre audition, mais vous fournit également les données dont vous avez besoin pour prendre des décisions éclairées sur votre emplacement.</p>
                </div>

                <div class="clearfix">
                    <div class="bobox" >   
                        <h2>L'Équipe</h2>

                        <p>Notre équipe dévouée chez STM réunit une variété de compétences et d'expériences. Des experts en circuits aux innovateurs technophiles, nous nous engageons à garantir que votre expérience des sports automobiles soit inégalée en termes de qualité, de sécurité et de plaisir.</p></div>
                    <div class="bobox" id="globox" style="background-color:#1d99ce" > 
                        <img src="images/PhotoTeam.png" alt="Photo Equipe"  style="width:100%;" class="border1"/></div>
                </div>

                <div class="TextDiv1">
                    <h2>Missions et Valeurs</h2>
                    <p>Chez STM, notre mission est double : premièrement, nous visons à protéger la santé des passionnés de sports automobiles, en particulier des jeunes et des personnes âgées, en réduisant l'impact des niveaux sonores élevés. Deuxièmement, nous nous efforçons d'optimiser la qualité audio des commentateurs, vous assurant la meilleure expérience où que vous soyez dans les tribunes.</p>
                </div>

                <div class="TextDiv">
                    <h2>Notre Solution</h2>
                    <p>Sonic Tracker, notre produit de pointe, est conçu pour les propriétaires de circuits et les passionnés de courses. Il permet aux propriétaires de circuits de surveiller et de gérer les niveaux sonores, garantissant une expérience plus sûre et plus agréable pour tous. Pour les spectateurs, nous proposons un site web convivial où vous pouvez choisir votre siège en fonction des niveaux de décibels et de la qualité des enceintes, vous offrant ainsi une expérience sur mesure des sports automobiles.</p>
                </div>

                <div class="TextDiv1">
                    <h2>Types d'événements</h2>
                    <p>Nos services sont adaptés à une large gamme d'événements de sports automobiles, notamment la Formule 1, la Formule 2, le Nascar et les courses de motos.</p>
                </div>

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
                        <p><a href="CGU.php" class="foota">CGU</a></p>
                        <p><a href="FAQ.php" class="foota">FAQ</a></p>
                    </div> 
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
