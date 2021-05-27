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
    <title>Accuile</title>
    <style>
        .myphoto{
            width: 50px;
            height: 50px;
        border-radius:50%;
        border:1px solid;
        }
    </style>
</head>
<body>
    <div id="global" class="row">
        <div id="profil" class="col-sm-3">
            <?php
            session_start();
            echo "Bonjour et bienvenue ".$_SESSION['monlogin']."<br>";
            $req="SELECT * FROM utilisateurs WHERE login='".$_SESSION['monlogin']."'";
            $resultat=mysqli_query($cnlocar,$req);
            $linge=mysqli_fetch_assoc($resultat);
            ?>
            <img src="<?php echo $linge['my_photo'];?>"class="myphoto" >
            <br>
            <a href="deconnecter.php">Deconnection</a>
            
            
        </div>
        <div id="tableaubord" class="col-sm-9">
              <?php include("tableaubord.php")?>  
            </div>

    </div>
</body>
</html>