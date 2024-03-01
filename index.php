<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>QUI EST-CE ? L'ALCOLONIE</title>
<link rel="stylesheet" href="stylephoto.css">
</head>
<body>
    <?php 
        include('header.php'); 
    ?>
    <div class="row2">
        <form action="hostcopy.php">
            <h2>Créer une partie !</h2>
            <p>Host<br><p>
            <input type="submit" value="Créer">
        </form>


        <form action="join copy.php" method="POST">
            <h2>Rejoins une partie !</h2>
            <p> Join</p>
            <input type="number" name="seed" placeholder="Code partie" required="requis">
            <input type="submit" value="Rejoindre"">
        </form>
        <form action="insert.php" method="POST">
            <h2>Ajoute une photo ! EN COURS DE DEVELOPPEMENT</h2>
            <?php
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



            ?>
            <input type="file" id="file" name="file" accept=".jpg,.png,.jpeg">
            <input type="hidden" name="MAX_FILE_SIZE" value=".....">
            <input type="submit" value="Rejoindre"">
        </form>
    <?php include('footer.php'); ?>
    <script src="script.js"></script>
</body>
</html>