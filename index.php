<!DOCTYPE html>
<html lang="en">
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
        include('header.php'); 
    ?>
        <div class="container">
            <div class="row">


                <div class="col s1"></div>

                <div class="col s4 formstart">
                    <form  action="hostcopy.php">
                        <div class="cardd">
                            <h2>Créer une partie !</h2>
                            <p>Host<br><p>
                            <input type="submit" value="Créer">
                        </div>
                    </form>
                
                    
                </div>

                <div class="col s2"></div>

                <div class="col s4 formstart">
                    <form action="join copy.php" method="POST">
                        <div class="cardd">
                            <h2>Rejoins une partie !</h2>
                            <p> Join</p>
                            <input type="number" name="seed" placeholder="Code partie" required="requis">
                            <input type="submit" value="Rejoindre"">
                        </div>
                    </form>
                </div>

                <div class="col s1"></div>

                <!--
                <div class="col s4 formstart">
                    <form action="insert.php" method="POST">
                        <h2>Ajoute une photo ! </h2>
                        <p>EN COURS DE DEVELOPPEMENT</p>
                        <?php
                        /*
                            //connexion a la bdd
                            $servername = "localhost";
                            $db_username = "root";
                            $db_password = "1015";
                            $dbname = "test";
                            $conn = new mysqli($servername, $db_username, $db_password, $dbname);

                            //recuperation des nom existant et les affiche dans une liste
                            $sql = "SELECT prenom FROM personne GROUP BY prenom";
                            $result = $conn->query($sql);
                            $i=1;
                            echo '<select name="prenom">';
                            foreach($result as $row){
                                echo '<option value="'.$row['prenom'].'">'.$row['prenom'].'</option>';
                            }
                            echo '</select>';
                        */
                        ?>
                        <input type="file" id="file" name="file">
                        <input type="submit" value="Ajouter">
                    </form>
                </div>
                -->

            </div>
        </div>



        <?php include('footer.php'); ?>
    <script src="script.js"></script>
</body>

</html>