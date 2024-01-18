<html>
    <head>
        <title>Boutique</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Stylesheet.css"> 
        <style>

        </style>
    </head>
    <body>
        <div class="fixed-bg"></div> <!-- Dégradé de fond qui ne descend pas quand on scroll -->

        <div class="mainPage"> <!-- Page par dessus le fond -->

            <div class="navbar" id="navi"> <!-- Barre qui reste collée en haut de l'écran-->
                <img src="Images/STM.png" alt="STM" align="left" />
                <a href="index.html">Accueil</a>
                <a href="aboutus.html">À propos de nous</a>
                <a href="events.html">Événements</a>
                <a href="boutique.php" class="active">Boutique</a>
                <a href="login.html" class="login">Connexion/Inscription</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveNavbar()">&#9776;</a>
            </div>

            <button class="add-product-btn" onclick="openPopup()">Ajouter un Article</button>
            <h1 class="titre_gene">Boutique</h1>
            <div class="product-container">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "products";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("La connexion a échoué : " . $conn->connect_error);
                }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $title = $_POST['productTitle'];
                    $price = $_POST['productPrice'];
                    $sizeS = isset($_POST['productSizes']) && in_array('S', $_POST['productSizes']) ? 1 : 0;
                    $sizeM = isset($_POST['productSizes']) && in_array('M', $_POST['productSizes']) ? 1 : 0;
                    $sizeL = isset($_POST['productSizes']) && in_array('L', $_POST['productSizes']) ? 1 : 0;
                    $target_dir = "Images/";
                    $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
                    move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file);
                    $sql = "INSERT INTO products (image_path, title, price, size_s, size_m, size_l) VALUES ('$target_file', '$title', $price, $sizeS, $sizeM, $sizeL)";

                    if ($conn->query($sql) !== TRUE) {
                        echo "Erreur lors de l'ajout de l'article : " . $conn->error;
                    }
                }
                $result = $conn->query("SELECT * FROM products");
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="case">
                        <img src="<?php echo $row['image_path']; ?>" class="img_casque"/>
                        <h3><?php echo $row['title']; ?></h3>
                        <p class="price"><?php echo $row['price']; ?> €</p>
                        <label for="size1">Taille:</label>
                        <select id="size1" name="size">
                            <option value="S" <?php if ($row['size_s']) echo 'selected'; ?>>S</option>
                            <option value="M" <?php if ($row['size_m']) echo 'selected'; ?>>M</option>
                            <option value="L" <?php if ($row['size_l']) echo 'selected'; ?>>L</option>
                        </select>
                        <button onclick="addToCart(<?php echo $row['id']; ?>)">Ajouter au Panier</button>
                    </div>
                    <?php
                }
                $conn->close();
                ?>
            </div>

            <div id="addProductPopup" class="popup">
                <div class="popup-content">
                    <span class="close" onclick="closePopup()">&times;</span>
                    <h3>Ajouter un Article</h3>
                    <form id="productForm" method="post" enctype="multipart/form-data">
                        <label for="productImage">Image:</label>
                        <input type="file" id="productImage" name="productImage" required>

                        <label for="productTitle">Titre:</label>
                        <input type="text" id="productTitle" name="productTitle" required>

                        <label for="productPrice">Prix:</label>
                        <input type="text" id="productPrice" name="productPrice" required>

                        <label for="productSizes">Tailles:</label>
                        <select id="productSizes" name="productSizes[]" multiple required>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                        </select>

                        <button type="submit">Ajouter au Panier</button>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function openPopup() {
                document.getElementById("addProductPopup").style.display = "block";
            }

            function closePopup() {
                document.getElementById("addProductPopup").style.display = "none";
            }
        </script>

        <div class="footer"> <!-- Le footer est divisé en colonnes pour mieux répartir le contenu -->

            <div class="column">
                <img src="Images/logofooter.png"  alt="STM" width="150" height="120" class="imgfooter" />
            </div>  

            <div class="column">
                <h2>Contactez nous </h2>
                <p>06 66 76 86 96</p>
                <p>SonicTrackMasters@gmail.com</p>
            </div>

            <div class="column">
                <h2>Réseaux Sociaux </h2>
                <p>Instagram : @STM </p>
                <p>Facebook : STM_Company </p>
                <p>LinkedIN : Sonic Track Masters </p>
            </div> 

            <div class="column">
                <h2>Services en ligne </h2>
                <p><a href="login.html" class="foota">Mon compte</a></p>
                <p><a href="CGU.html" class="foota">CGU</a></p>
                <p><a href="FAQ.html" class="foota">FAQ</a></p>
            </div>    
        </div>
    </body>
</html>
