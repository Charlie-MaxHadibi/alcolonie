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
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        // Vérifier si le formulaire a été soumis
        if (isset($_FILES['file'])) {
            // Emplacement du dossier de destination
            $dossier_destination = "photo/";
        
            // Nom du fichier après renommage
            $nouveau_nom = $_POST['prenom']."." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        
            // Chemin complet du fichier de destination
            $chemin_destination = $dossier_destination . $nouveau_nom;
        
            // Vérifier si le fichier a été téléchargé avec succès
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $chemin_destination)) {
                echo "Le fichier a été téléchargé avec succès.".$_POST['prenom'].$nouveau_nom;
            } else {
                echo "Une erreur s'est produite lors du téléchargement du fichier.";
            }
        } else {
            echo "Erreur : Aucun fichier n'a été soumis.";
        }
        














        include('footer.php'); 
    
    ?>
    <script src="script.js"></script>
</body>
</html>