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
<!--import stylce.css -->
<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>

    <?php
        


        //recuperation et verification de la seed
        if (isset($_POST['seed'])){
            $seed = $_POST['seed'];
            include('header.php');

            //connexion a la bdd
            $servername = "mysql";
            $db_username = "otherUser";
            $db_password="password";
            $dbname = "dbtest";
            $conn = new mysqli($servername, $db_username, $db_password, $dbname);
                
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




        }
        else{
            //en cas ou la seed n'est aps recuperer depusi l'accueil
            echo 'erreur';
        }
        include('footer.php');
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
        randomPhotoPin.style.border = "5px solid pink";
    </script>
</body>
</html>