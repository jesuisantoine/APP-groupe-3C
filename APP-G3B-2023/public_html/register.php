<html>
    <head>
        <title>Formulaire admission</title>
        <script src="register.js"></script>
        <link href="Stylesheet.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
            <img src="Images/STM.png" alt="STM" align="left" />
            <a href="index.html">Accueil</a>
            <a href="aboutus.html">L'équipe</a>
            <a href="events.html">Evenements</a>
            <a href="shop.html">Boutique</a>
            <a href="login.html" class="login active">Connexion/Inscription</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
        </div>
        <div style="padding:30px;"></div>

        <main class="mainpage">

            <h1 class="connect" style="margin-left:20px;"> Restons en contact ! </h1>

            <fieldset class="login2"> 

                <h2 class="title"> Création de compte </h2>
                <div class="letout">
                    <label for="Title-input" >Titre</label>

                    <select class="form-control" id="Title-input" data-prop="Title" required="">
                        <option value="">Selectionnez:</option>
                        <option value="M">M</option>
                        <option value="Mme">Mme</option>
                        <option value="Mad">Mademoiselle</option>
                        <option value="Autre">Autre</option>
                        <option value="Pringles">Pringles</option>
                    </select>
                </div>

                <form method="POST" action="traitement.php" onsubmit="return window.confirm('Etes-vous sûrs de soumettre votre candidature?')">
                    <div class="contien">
                        <label class="box">Nom</label>
                        <input class="box2" type="text" name="nom" value="<?php
                        $nom_cookie = '';
                        if (isset($_COOKIE['nom'])) {
                            $nom_cookie = $_COOKIE['nom'];
                        }
                        echo $nom_cookie
                        ?>" onblur="checkFirstName(nom)">

                        <p class="error-message"><?php
                            if (isset($error_nom)) {
                                echo $error_nom;
                            }
                            ?></p>

                        <label class="box">Prénom</label>
                        <input class="box2" type="text" name="prenom" value="<?php
                        $prenom_cookie = '';
                        if (isset($_COOKIE['prenom'])) {
                            $prenom_cookie = $_COOKIE['prenom'];
                        }
                        echo $prenom_cookie
                        ?>" onblur="checkLastName(prenom)">

                        <p class="error-message"><?php
                            if (isset($error_prenom)) {
                                echo $error_prenom;
                            }
                            ?></p>

                        <label class="box">Date de naissance</label>
                        <input class="box2" type="date" id="date" name="dateNaissance" value="<?php
                        $date_cookie = '';
                        if (isset($_COOKIE['dateNaissance'])) {
                            $date_cookie = $_COOKIE['dateNaissance'];
                        }
                        echo $date_cookie
                        ?> "onblur="calculateAgeAndCheck()">

                        <p class="error-message"><?php
                            if (isset($error_dateNaissance)) {
                                echo $error_dateNaissance;
                            }
                            ?></p>

                        <label class="box">Email</label>
                        <input class="box2" id="email1" type="text" name="email" value="<?php
                        $email1_cookie = '';
                        if (isset($_COOKIE['email1'])) {
                            $email1_cookie = $_COOKIE['email1'];
                        }
                        echo $email1_cookie
                        ?>">

                        <p class="error-message"><?php
                            if (isset($error_email1)) {
                                echo $error_email1;
                            }
                            ?></p>

                        <label class="box">Confirmez votre email</label>
                        <input class="box2" id="email2" type="text" name="emailConfirmation" onblur="checkEmailConfirmation()" value="<?php
                        $email2_cookie = '';
                        if (isset($_COOKIE['email2'])) {
                            $email2_cookie = $_COOKIE['email2'];
                        }
                        echo $email2_cookie
                        ?>">

                        <p class="error-message"><?php
                            if (isset($error_email2)) {
                                echo $error_email2;
                            }
                            ?></p>
                        
                        <label class="box">Entrez votre mot de passe</label>
                        <input class="box2" id="mdp" type="text" name="mdp" value="<?php
                        $mdp_cookie = '';
                        if (isset($_COOKIE['mdp'])) {
                            $mdp_cookie = $_COOKIE['mdp'];
                        }
                        echo $mdp_cookie
                        ?>">

                        <p class="error-message"><?php
                            if (isset($error_mdp)) {
                                echo $error_mdp;
                            }
                            ?></p>

                        <div id="spe">
                            <input type="submit" value="Enregistrer" class="sub" style="padding-left:20px;padding-right:20px;padding-bottom:5px;">
                        </div>
                    </div>
                </form>

            </fieldset>


            <a href="login.html" class="buton"><span>J'ai déjà un compte</span></a>

            <div class="footer"> <!-- Le footer est divisé en colonnes pour mieux répartir le contenu -->

                <div class="column">
                    <h1>Contactez nous:</h1>
                    <p>07 77 77 77 77</p>
                    <p>quelquechose@gmail.com</p>
                </div>
                <div class="column">
                    <h1>Réseaux Sociaux:</h1>
                    <p>Instagram: @Tony_nora</p>
                    <p>Facebook: à rajouter</p>
                </div>

            </div>
        </main>
    </body>
</html>
