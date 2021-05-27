<?php require_once('conexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <div id="container">
        <form action="" method="POST" class="formulair">
            <h1>Connexion</h1>
            <label for=""><b>Nom d'utilisateur</b></label><br>
            <input type="text" placeholder="entrer le nom d'utilisateur" name="txtlogin" required class="zonetext"><br>
            <label for=""><b>Mot de passe:</b></label><br>
            <input type="password" placeholder="entrer le mot de passe" name="txtpw" required class="zonetext"><br>
            <input type="submit" name="btlogin" value="LOGIN" id='submit' class="submit"> 
<?php
if(isset($_POST['btlogin'])){
    $req="select * from utilisateurs where login='".$_POST['txtlogin']."'and motpass='".$_POST['txtpw']."'";
   if( $resultat=mysqli_query($cnlocar,$req)){
       $ligne=mysqli_fetch_assoc($resultat);
       if($ligne!=0){
           session_start();
           $_SESSION['monlogin']=$_POST['txtlogin'];
           header("location:accuile.php");
       }
       else{
           echo "<font color='#f30'>login ou mot de passe est invalide</font>";
       }
   }
}
?>
        </form>

    </div>
</body>
</html>