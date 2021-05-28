<?php require_once('conexion.php');




if (isset($_GET['mod'])) {
    $id = $_GET['mod'];
    $record = mysqli_query($cnlocar, "SELECT * FROM automobile
    WHERE IMM='$id'");
    $data = mysqli_fetch_assoc($record);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifie</title>
</head>
<body>
    <div id="container">
        <form action="" name="formulaire" method="POST" class="formulaire" enctype="multipart/form-date">
    <h2 align="center">Mettre a jour un produit...</h2>
    <label for=""><b>id:</b></label>
<input type="text" name="txtImm" class="zonetext" value="<?php echo $data ['IMM']?>"required> <br>
<label for=""><b>Nom:</b></label>
<input type="text" name="txtMarque"  value="<?php echo $data ['MARQUE']?>"  class="zonetext" required><br>
<label for=""><b>Prix:</b></label>
<input type="text" name="txtPl"  value="<?php echo $data ['PRXLOCA']?>"   class="zonetext" required><br>
<label for=""><b>Catégorie:</b></label>
<input type="text" name="txtCT"  value="<?php echo $data ['CAT']?>"   class="zonetext" required><br>
<label for=""><b>Photo:</b></label>
<input type="file" name="img" value="<?php echo $data ['PHOTO']?>"   class="zonetext" ><br>
<input type="submit" class="submit" name="btmod" value="Mettre a jour">
<p><a href="accuile.php" class="submit">Tableau de bord</a></p>
<label for="" style="text-align:center;color: #960496;">
<?php
if(isset($_POST['btmod']))
{
    $imm=$_POST['txtImm'];
    $marque=$_POST['txtMarque'];
    $prixloc=$_POST['txtPl'];
    $cat=$_POST['txtCT'];
    $modifie=$_GET['mod'];   
    $image=$_FILES['img']['tmp_name'];
    $target="images/".$_FILES['img']['name'];
    move_uploaded_file($image,$target);
    $reqUp="UPDATE automobile SET MARQUE='$marque',PRXLOCA='$prixloc',CAT='$cat',PHOTO='$target' WHERE IMM='$modifie'";
    $resultat=mysqli_query($cnlocar,$reqUp);
    if($resultat)
    {
        echo "Mise a jour des données validés";
    }
    else{
        echo "Echec de modification des données";
    }
}

?>
</label>
</form>


    </div>
</body>
</html>