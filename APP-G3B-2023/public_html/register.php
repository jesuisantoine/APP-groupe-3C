<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html
    <<head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Stylesheet.css">
        <script src="registerjs.js"></script>

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
                    <label for="Title-input" >Titre
                    </label>

                    <select class="form-control" id="Title-input" data-prop="Title" required="">
                        <option value="">Selectionnez:</option>
                        <option value="M">M</option>
                        <option value="Mme">Mme</option>
                        <option value="Mad">Mademoiselle</option>
                        <option value="Autre">Autre</option>
                        <option value="Pringles">Pringles</option>
                    </select>

                </div>
                <div class="contien">
                    <label class="box">Prénom : </label>

                    <input class="box2" placeholder=" " autocomplete="off" onblur="checkFirstName(prenom)"/>

                    <label class="box">Nom : </label> 

                    <input class="box2" placeholder=" " autocomplete="off" onblur="checkLastName(name)"/>

                    <label class="box">Email : </label>

                    <input class="box2" placeholder=" " autocomplete="off" oninput="checkEmailConfirmation()"/>
                    
                    <label class="box">Date de naissance : </label>

                    <input class="box2" placeholder=" " autocomplete="off" onblur="calculateAgeAndCheck()"/>

                    <label class="box"> Créez votre mot de passe : </label>

                    <input class="box2" placeholder=" " autocomplete="off" oninput="checkpassword()"/>

                    <label class="box">Confirmez le mot de passe : </label>

                    <input class="box2" placeholder=" " autocomplete="off" oninput="checkpassword()"/>
                </div>



                <p>J'accepte que mes donées soient récoltées: </p>
                <form action=" ">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> 
                    <label for="vehicle1"> Oui </label><br>
                </form>


                <div id="spe">
                    <input type="submit" value="Enregistrer" class="sub" style="padding-left:20px;padding-right:20px;padding-bottom:5px;"/>
                </div>
 
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
