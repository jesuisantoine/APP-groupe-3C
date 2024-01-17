<html>
    <head>
        <title>register</title>
        <link href="re_form-css.css" rel="stylesheet" type="text/css"/>
        <script src="re_form_js.js" type="text/javascript"></script>
    </head>
   
    <body>

        <div class="login-box">

            <form>

                <h2 class="title"> Création de compte </h2>

                <label id="civili"for="Title-input" >Civilité</label>

                <select class="civi" data-prop="Title" required="">
                    <option value="">Selectionnez</option>
                    <option value="M">M</option>
                    <option value="Mme">Mme</option>
                    <option value="Mad">Mademoiselle</option>
                    <option value="Autre">Autre</option>
                </select>


                <div class="user-box">
                    <input type="text" name="nom" required="" value="<?php
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
                    <label>Nom</label>
                </div>

                <div class="user-box">
                    <input type="text" name="prenom" required="" value="<?php
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


                    <label>Prénom</label>
                </div>

                <div class="user-box">
                    <input type="text" name="email" required="" value="<?php
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
                    <label>Email</label>
                </div>

                <div class="user-box">
                    <h1 class="daten">Date de naissance</h1>
                    <input type="date" name="dateNaissance" required="" <?php
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
                </div>

                <div class="user-box">
                    <input type="text" name="password" required="" value="<?php
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
                    <label>Mot de passe</label>
                </div>

                <div class="user-box">
                    <input type="password" name="passwordconfirmation" required="" value="<?php
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
                    <label>confirmation</label>
                </div>

                <div>
                    <input type="submit" value="créer son compte" class="connect">
                </div>
            </form>
        </div>
    </body>
</html>
