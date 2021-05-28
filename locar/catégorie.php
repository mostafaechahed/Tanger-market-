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
    <title>Document</title>
</head>
<body>
    <?php 
    $reqet="SELECT DISTINCT CAT FROM automobile";
    $resultat=mysqli_query($cnlocar,$reqet);
    while($ligne=mysqli_fetch_assoc($resultat))
{
?>
<div class="container">
    <div class="row">
<div class=" col-12 d-flex justify-content-center mb-5">
<div class="card " style="width: 18rem;">
    <h5 style= "text-align:center;" class="card-title"><?php echo $ligne['CAT'];?></h5>
    <a href="tcategorie.php?nomcat=<?php echo $ligne['CAT'];?>" id="csscat" class="btn btn-success">Decouvert</a>
  </div>
</div>
</div>

</div>

</div>

<?php } ?>
<p class="text-center " width="10%"><a  href="accuile.php" ><b> Tableau de bord</b></a></p>

    
</body>
</html>