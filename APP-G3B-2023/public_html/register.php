<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Stylesheet.css">
        <script src="version2register.js"></script>
    </head>
    <body>

        <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
            <img src="Images/STM.png" alt="STM" align="left" />
            <a href="index.html">Accueil</a>
            <a href="aboutus.html">À propos de nous</a>
            <a href="events.html">Événements</a>
            <a href="boutique.php">Boutique</a>
            <a href="login.html" class="login active">Connexion/Inscription</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
        </div>
        <div style="padding:30px;"></div>

        <main class="mainpage">

            <h1 class="connect" style="margin-left:20px;"> Restons en contact ! </h1>

            <fieldset class="login2"> 
                <form>
                    <h2 class="title"> Création de compte </h2>
                    <div class="letout">
                        <label for="Title-input" >Titre
                        </label>

                        <select class="form-control" id="Title-input" data-prop="Title" required="">
                            <option value="">Selectionnez</option>
                            <option value="M">M</option>
                            <option value="Mme">Mme</option>
                            <option value="Mad">Mademoiselle</option>
                            <option value="Autre">Autre</option>
                            <option value="Pringles">Pringles</option>
                        </select>

                    </div>
                    <div class="contien">
                        <label class="box">Prénom : </label>

                        <input class="box2" type="text" name="prenom" value="" <?php
                        $prenom_cookie = '';
                        if (isset($_COOKIE['prenom'])) {
                            $prenom_cookie = $_COOKIE['prenom'];
                        }
                        echo $prenom_cookie
                        ?>oninput="checkFirstName(prenom)"/>
                        <p class="error-message"><?php
                            if (isset($error_prenom)) {
                                echo $error_prenom;
                            }
                            ?></p>

                        <label class="box">Nom : </label> 

                        <input class="box2" type="text" name="nom" value=""<?php
                        $nom_cookie = '';
                        if (isset($_COOKIE['nom'])) {
                            $nom_cookie = $_COOKIE['nom'];
                        }
                        echo $nom_cookie
                        ?> oninput="checkFirstName(nom)"/>
                        <p class="error-message"><?php
                            if (isset($error_nom)) {
                                echo $error_nom;
                            }
                            ?></p>

                        <label class="box">Email : </label>

                        <input class="box2" type="text" name="email" value="" <?php
                        $email_cookie = '';
                        if (isset($_COOKIE['email'])) {
                            $email_cookie = $_COOKIE['email'];
                        }
                        echo $email_cookie
                        ?> oninput="checkEmail(email)"/>
                        <p class="error-message"><?php
                            if (isset($error_email)) {
                                echo $error_email;
                            }
                            ?></p>

                        <label class="box">Date de naissance : </label>

                        <input class="box2" type="date" name="dateNaissance" value="" <?php
                        $date_cookie = '';
                        if (isset($_COOKIE['dateNaissance'])) {
                            $date_cookie = $_COOKIE['dateNaissance'];
                        }
                        echo $date_cookie
                        ?> onblur="calculateAgeAndCheck()"/>
                        <p class="error-message"><?php
                            if (isset($error_dateNaissance)) {
                                echo $error_dateNaissance;
                            }
                            ?></p>

                        <label class="box"> Créez votre mot de passe : </label>

                        <input class="box2" id="password1" type="text" name="password" value=""<?php
                        $password1_cookie = '';
                        if (isset($_COOKIE['password1'])) {
                            $password1_cookie = $_COOKIE['password1'];
                        }
                        echo $passwoed1_cookie
                        ?>oninput="checkpassword()"/>

                        <p class="error-message"><?php
                            if (isset($error_password1)) {
                                echo $error_password1;
                            }
                            ?></p> 

                        <label class="box">Confirmez le mot de passe : </label>

                        <input class="box2" id="password2"type="text" name="passwordconfirmation" value=""<?php
                        $password2_cookie = '';
                        if (isset($_COOKIE['password2'])) {
                            $password2_cookie = $_COOKIE['password2'];
                        }
                        echo $password2_cookie
                        ?>oninput="checkpassword()"/>
                        <p class="error-message"><?php
                            if (isset($error_password2)) {
                                echo $error_password2;
                            }
                            ?></p>
                    </div>



                    <p>J'accepte que mes donées soient récoltées: </p>

                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> 
                    <label for="vehicle1"> Oui </label><br>



                    <div id="spe">
                        <input type="submit" value="Enregistrer" class="sub" style="padding-left:20px;padding-right:20px;padding-bottom:5px;"/>
                    </div>
                </form>
            </fieldset>


            <a href="login.html" class="buton"><span>J'ai déjà un compte</span></a>

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

        </main>
    </body>
</html>
