
<?php require_once('conexion.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>LOCATION DU VOITURE</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div id="entete" class="row">
        <div class="col-md">
    <a href="login.php" class="login" >login</a>
    <video autoplay="autoplay"  class="video_entete" muted src="loc.mp4" type="viseo/mp4"></video>
    <p class="nomesit">location car</p>
  
    </div>
    </div>
    </div>

    <div id="articles" class="row">
        <div class="col-md">
            
    <?php
    if(isset($_POST['btsubmit'])){
        $mc=$_POST['motcle'];
        $reqSelect="SELECT * FROM automobile WHERE MARQUE like '%$mc'";
    }else{ $reqSelect="SELECT * FROM automobile";
    }
    $resultat=mysqli_query($cnlocar,$reqSelect);
    $nbr=mysqli_num_rows($resultat);
   
    echo "<p><b>".$nbr."</b>Resultats de votre recherch...</p>";
    while($ligne=mysqli_fetch_assoc($resultat)){

    ?>
    <div id="auto">
    <img style="width: 130px;height: 100px;" id="img" src="<?php echo $ligne['PHOTO']?>"/><br>
    <?php echo $ligne['IMM']; ?><br>
    <?php echo $ligne['MARQUE']; ?><br>
    <?php echo $ligne['PRXLOCA']; ?>
    </div>
    <?php } ?>

    </div>
    </div>
</body>
</html>