
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ajouter</title>
</head>
<body>
    <div id="container">
        <form name="formAdd" action="" enctype="multipart/form-data" method="POST" class="formulaire" >
    <h2 align="center">Ajouter nouvelle voiture...</h2>
    <label for=""><b>Immatriculation:</b></label>
    <input type="text" name="txtImm" class="zonetext"placeholder="Entrer Immatriculation" required><br>
    <label for=""><b>Marque:</b></label>
    <input type="text" name="txtMarque" class="zonetext"placeholder="Entrer la marque" required><br>
    <label for=""><b>Prix de location:</b></label>
    <input type="text" name="txtPl" class="zonetext"placeholder="Entrer le prix de location" required><br>
    <label for=""><b>Photo:</b></label>
    <input type="file" name="txtphoto" class="zonetext" placeholder="choisie une image" required><br>
    <input type="submit" name="Ajouter" value="Ajouter" id="submit">
<p><a href="accuile.php" class="submit">Tableau de bord</a></p>
<label for="" style="text-align:center;color:#960406">
<?php 
   require_once('conexion.php');
if(isset($_POST['Ajouter']))
{ 
  
    $imm=$_POST['txtImm'];
    $marque=$_POST['txtMarque'];
    $prixloc=$_POST['txtPl'];

    $image=$_FILES['txtphoto']['tmp_name'];
    $target="images/".$_FILES['txtphoto']['name'];
    move_uploaded_file($image,$target);

    $reqAdd="INSERT INTO automobile(IMM,MARQUE,PRXLOCA,PHOTO) VALUES('$imm','$marque','$prixloc','$target')";
    $resultat= mysqli_query($cnlocar,$reqAdd);

if($resultat)
{
    echo " Insertion des donées validés";
}
else
{
    echo "Echec d Insertion des données";
}
}
?>
</label>

    </form>

    </div>
</body>
</html>