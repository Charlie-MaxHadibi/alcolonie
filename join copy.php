<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>QUI EST-CE ? L'ALCOLONIE</title>
<link rel="stylesheet" href="stylephoto.css">
</head>
<body>

    <?php
        include('header.php');
        //connexion a la bdd
        $servername = "localhost";
        $db_username = "root";
        $db_password = "1015";
        $dbname = "test";
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);


        //recuperation et verification de la seed
        if (isset($_POST['seed'])){
            $seed = $_POST['seed'];
            //recuperation des nom/nomphoto
            $sql = "SELECT nom, nomphoto FROM partie WHERE idgame='".$seed."'";
            $result = $conn->query($sql);
            //affichage des photo
            echo '<div class="photo-frame"><div class="row">';
            foreach($result as $row){
                
                echo '<div class="photo-pin">'.$row['nom'].'<img class="photo" src="photo/'.$row['nomphoto'].'.jpg"></div>';                
            }
            echo '</div></div>';




        }
        else{
            //en cas ou la seed n'est aps recuperer depusi l'accueil
            echo 'erreur';
        }
        include('footer.php');
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var photos = document.querySelectorAll('.photo');

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

</body>
</html>