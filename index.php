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
<!--Let browser know website is optimized for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <?php 
        include('header.php'); 
    ?>
        <div class="container">
            <div class="row">


               

                <div class="col s4 formstart">
                    <form  action="hostcopy.php">
                        <div class="cardd">
                            <h2>Créer une partie !</h2>
                            <p>Host<br><p>
                            <input type="submit" value="Créer">
                        </div>
                    </form>
                
                    
                </div>

                

                <div class="col s4 formstart">
                    <form action="join copy.php" method="POST">
                        <div class="cardd">
                            <h2>Rejoins une partie !</h2>
                            <p> Join</p>
                            <input type="number" name="seed" placeholder="Code partie" required="requis">
                            <input type="submit" value="Rejoindre">
                        </div>
                    </form>
                </div>

             
                <!--
                <div class="col s4 formstart">
                    <form action="insert.php" method="POST" enctype="multipart/form-data">
                        <div class="cardd">
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

                                //recuperation des nom existant et les met dans un tableau
                                $sql = "SELECT prenom FROM personne GROUP BY prenom";
                                $result = $conn->query($sql);
                                
                                $i=0;
                                foreach($result as $row){
                                    //echo '<option value="'.$row['prenom'].'">'.$row['prenom'].'</option>';
                                    $prenom[$i] = $row['prenom'];
                                    $i++;
                                }
                                $compteurnom = $i;
                                // affichage des prenom dans une liste deroulante
                                echo '<div class="input-field">';
                                    echo '<select>';
                                    for ($i=0;$i<$compteurnom;$i++){
                                        echo '<option value="'.$prenom[$i].'">'.$prenom[$i].'</option>';
                                        echo $prenom[$i];
                                    }

                                    echo '</select>';
                                echo '</div>';
                                */

                                ?>
                                
                                    <select multiple>
                                        
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                
                                    <input type="file" id="file" name="file">
                                    <br>
                                    <input type="submit" value="Ajouter">
                                
                           
                            
                        </div>
                    </form>
                            
                </div>
                                -->
       
                

            </div>
        </div>



        <?php include('footer.php'); ?>
    <script src="script.js"></script>
    <script>
         $(document).ready(function() {
    $('select').material_select();
  });
    </script>
</body>

</html>