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
                <a href="aboutus.php">L'équipe</a>
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
            <form action="php_login_traitement.php" method="post">
                <div class="user-box">
                    <input type="text" name="email" required="">
                    <label>email</label>
                </div>
                <div class="user-box">
                    <input type="password" name="motDePasse" required="">
                    <label>mot de passe</label>
                </div>

                    <input type="submit" value="connexion" class="connect">

            </form>

                <a href="register.php"><button class="regi">Créer un compte</button></a>
        </div>
        
    </body>
</html>