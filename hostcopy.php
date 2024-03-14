<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QUI EST-CE ? L'ALCOLONIE</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Import stylce.css -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <?php
            
            //fonction de generation aléatoire entre 1 et 10
            function genererNombreAleatoire() {
                return mt_rand(1, 10);
            }
            //generation d"une seed aléatoire
            $seed = genererNombreAleatoire();
            include('header.php');
            //connexion a la bdd
            $servername = "localhost";
            $db_username = "root";
            $db_password = "1015";
            $dbname = "test";
            $conn = new mysqli($servername, $db_username, $db_password, $dbname);


            $sql = "SELECT COUNT(idgame) FROM partie WHERE idgame=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $seed);
            $stmt->execute();
            $existepartie = $stmt->get_result();
            foreach ($existepartie as $row){
                $sql = "TRUNCATE TABLE partie";
                $conn->query($sql);
            }
            

            //recuperer tout les nom des possibles participants et les mettre dans un tableau "tablenom"
            $sql = "SELECT prenom FROM personne GROUP BY prenom";
            $result = $conn->query($sql);
            $i=1;
            foreach($result as $row){
                $tablenom[$i]= $row['prenom'];
                $i=$i+1;
            }
            // Mélanger le tableau
            shuffle($tablenom);

            // Sélectionner les 16 premières valeurs
            $valeurs_aleatoires = array_slice($tablenom, 0, 16);
            
            
            // Insertion des données dans la table partie
            foreach ($valeurs_aleatoires as $valeur) {
                $sql = "SELECT nomphoto FROM personne WHERE prenom = ? ORDER BY RAND() LIMIT 1";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $valeur);
                $stmt->execute();
                $result = $stmt->get_result()->fetch_assoc();
                $nomphoto = $result['nomphoto'];

                $sql = "INSERT INTO partie (idgame, nom, nomphoto) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $seed, $valeur, $nomphoto);
                $stmt->execute();
            }


            //              ----    Affichage de la partie en fonction de la seed    ----
            
            /* recuperation des nom/nomphoto
            $sql = "SELECT nom, nomphoto FROM partie WHERE idgame='".$seed."'";
            $result = $conn->query($sql);
            $i=0;
            */

            // Affichage de la partie en fonction de la seed
            $sql = "SELECT nom, nomphoto FROM partie WHERE idgame=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $seed);
            $stmt->execute();
            

            $stmt->bind_result($nom_result, $nomphoto_result);
            $nom = array();
            $nomphoto = array();
            while ($stmt->fetch()) {
                $nom[] = $nom_result;
                $nomphoto[] = $nomphoto_result;
            }
            // affichage
            echo '  <div class="row flex">';
            echo '<div class="col s2 m2"></div>';

            for($a=0;$a<=7;$a++){
                echo '<div class="col s1 m1">
                    <div class="card" style=" display: flex; flex-direction: column; justify-content: center;">
                        <div class="card-image" style="flex-grow: 1;"> 
                            <img src="photo/'.$nomphoto[$a].'.jpg" class="responsive-img sc" style="max-height: 100%;"> 
                        </div>
                        <div class="card-content" style="text-align: center;">
                            <span style="display: block;">'.$nom[$a].'</span> 
                        </div>
                    </div>
                </div>';
            }
            echo '<div class="col s2 m2"></div>';

            echo '  </div>';
            echo '  <div class="row flex">';
            echo '<div class="col s2 m2"></div>';
            for($a=8;$a<=15;$a++){
                echo '<div class="col s1 m1">
                    <div class="card" style=" display: flex; flex-direction: column; justify-content: center;">
                        <div class="card-image" style="flex-grow: 1;"> 
                            <img src="photo/'.$nomphoto[$a].'.jpg" class="responsive-img sc" style="max-height: 100%;"> 
                        </div>
                        <div class="card-content" style="text-align: center;">
                            <span style="display: block;">'.$nom[$a].'</span> 
                        </div>
                    </div>
                </div>';
            }
            echo '<div class="col s2 m2"></div>';
            echo '  </div>';

















        ?>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var photos = document.querySelectorAll('.sc');

            photos.forEach(function(photo) {
                photo.addEventListener('click', function() {
                    if (photo.getAttribute('src') !== 'replacement.jpg') {
                        // Si la photo n'est pas déjà remplacée, la remplacer par "replacement.jpg"
                        photo.setAttribute('src', 'replacement.jpg');
                    } else {
                        // Sinon, la remplacer par son image d'origine
                        var originalSrc = photo.getAttribute('data-original-src');
                        photo.setAttribute('src', originalSrc);
                    }
                });

                // Stocker l'URL d'origine de la photo dans un attribut de données personnalisé
                photo.setAttribute('data-original-src', photo.getAttribute('src'));
            });
        });
        </script>
        <script>
            // Sélection aléatoire d'une division avec la classe "photo-pin"
            var photoPins = document.getElementsByClassName("card");
            var randomIndex = Math.floor(Math.random() * photoPins.length);
            var randomPhotoPin = photoPins[randomIndex];

            // Application de la bordure rose
            randomPhotoPin.style.border = "5px solid red";
        </script>

    </body>
</html>