<?php require_once('conexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <form action="" name="formdelet" method="post" class="formulaire" >
   <p><a href="accuile.php" class="submit">Tableau de bord</a></p>
</form>


    
    <?php
    if(isset($_GET['supcar']))
    {
        $sup=$_GET['supcar'];
        $reqDelete="DELETE FROM automobile WHERE IMM='$sup'";
        $resultat=mysqli_query($cnlocar,$reqDelete);
    }
    if($resultat)
    {
echo "<label style='text-align:center;color: #960496;'> La supprission a été correctement efféctuée....</label>";
    }else{
echo "<label style='text-align:center;color: #960496;'> la suppression a échouée...";
    }
    ?>
    </div>
</body>
</html>