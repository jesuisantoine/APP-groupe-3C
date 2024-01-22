

<html>
    <head>
        <title>register</title>
        <link href="Stylesheet.css" rel="stylesheet" type="text/css"/>
        <script src="script.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="login-box">

            <form action="cookie.php" method="post">

                <h2 class="title"> Création de compte </h2>

                <label id="civili"for="Title-input" >Civilité</label>

                <select class="civi" name="civi" data-prop="Title" required>
                    <option value="">Selectionnez</option>
                    <option value="M">M</option>
                    <option value="Mme">Mme</option>
                    <option value="Mad">Mademoiselle</option>
                    <option value="Autre">Autre</option>
                </select>

                <div class="user-box">
                    <input type="text" name="nom" value="<?php
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
                    <input type="text" name="prenom" value="<?php
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
                    <input type="text" name="email" value="<?php
                    $email_cookie = '';
                    if (isset($_COOKIE['email'])) {
                        $email_cookie = $_COOKIE['email'];
                    }
                    echo $email_cookie
                    ?>">

                    <p class="error-message"><?php
                        if (isset($error_email)) {
                            echo $error_email;
                        }
                        ?></p>
                    <label>Email</label>
                </div>

                <div class="user-box">
                    <h1 class="daten">Date de naissance</h1>
                    <input type="date" name="dateNaissance" required value="<?php
                    $date_cookie = '';
                    if (isset($_COOKIE['dateNaissance'])) {
                        $date_cookie = $_COOKIE['dateNaissance'];
                    }
                    echo $date_cookie
                    ?> "onblur="calculateAgeAndCheck()">

                    <p class="error-message">
                        <?php
                        if (isset($error_dateNaissance)) {
                            echo $error_dateNaissance;
                        }
                        ?></p>
                </div>

                <div class="user-box">
                    <input type="text" name="password"  value="<?php
                    $password1_cookie = '';
                    if (isset($_COOKIE['password1'])) {
                        $password1_cookie = $_COOKIE['password1'];
                    }
                    echo $password1_cookie
                    ?>">

                    <p class="error-message"><?php
                        if (isset($error_password1)) {
                            echo $error_password1;
                        }
                        ?></p>
                    <label>Mot de passe</label>
                </div>

                <div class="user-box">
                    <input type="password" name="passwordConfirmation" value="<?php
                    $password2_cookie = '';
                    if (isset($_COOKIE['password2'])) {
                        $password2_cookie = $_COOKIE['password2'];
                    }
                    echo $password2_cookie
                    ?>" onblur="checkpasswordConfirmation()">

                    <p class="error-message"><?php
                        if (isset($error_password2)) {
                            echo $error_password2;
                        }
                        ?></p>
                    <label>confirmation</label>
                </div>

                <div>
                    <input type="submit" value="créer son compte" class="connect">
                </div>

            </form>
        
                <a href="login.php"><button class="loginpage">J'ai déjà un compte</button></a>
        </div>
    </body>
</html>