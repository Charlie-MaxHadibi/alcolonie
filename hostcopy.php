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
        //fonction de generation aléatoire entre 1 et 10
        function genererNombreAleatoire() {
            return mt_rand(1, 10);
        }
        //generation d"une seed aléatoire
        $seed = genererNombreAleatoire();

        //connexion a la bdd
        $servername = "localhost";
        $db_username = "root";
        $db_password = "1015";
        $dbname = "test";
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);


        /*  * verification KO (table vide meme si idgame =/=)
            * verification que la partie n'existe pas deja     
        */
            $sql = "SELECT COUNT(idgame) FROM partie WHERE idgame='".$seed."'";
        $existpartie = $conn->query($sql);
        foreach ($existpartie as $row){
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

        // Sélectionner les 8 premières valeurs
        $valeurs_aleatoires = array_slice($tablenom, 0, 16);

        // Creer la partie avec la seed
        foreach ($valeurs_aleatoires as $valeur) {
            $sql = "SELECT nomphoto FROM personne WHERE prenom ='".$valeur."' ORDER BY RAND() LIMIT 1";
            $result = $conn->query($sql);
            foreach($result as $row){
                //recuperation nom + idgame + nomphoto pour envoie sur bdd
                $send="INSERT INTO partie (idgame, nom, nomphoto) VALUES ('".$seed."', '".$valeur."', '".$row['nomphoto']."')";
                $conn->query($send); 
            }
            

        }

        // Affichage de la partie en fonction de la seed
        
        //recuperation des nom/nomphoto
        $sql = "SELECT nom, nomphoto FROM partie WHERE idgame='".$seed."'";
        $result = $conn->query($sql);
        //affichage des photo
        $i=0;
        echo '<div class="photo-frame"><div class="row">';
        foreach($result as $row){       
            echo '<div class="photo-pin">'.$row['nom'].'<img class="photo" src="photo/'.$row['nomphoto'].'.jpg"></div>';
            $i = $i+1;  
            if ($i >= 8){
                echo '</div><div class="row">';
                $i=0;
            }              
        }
        echo '</div></div>';

    
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
    <script>
        // Sélection aléatoire d'une division avec la classe "photo-pin"
        var photoPins = document.getElementsByClassName("photo-pin");
        var randomIndex = Math.floor(Math.random() * photoPins.length);
        var randomPhotoPin = photoPins[randomIndex];

        // Application de la bordure rose
        randomPhotoPin.style.border = "5px solid pink";
    </script>

</body>
</html>