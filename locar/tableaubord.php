

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
    <title>tableaubord</title>
</head>
<body>
<p style="text-align:center"><b> <a href="catégorie.php">CATEGORIE</a></b></p>

    <p><h1>liste des produit</h1>

    <?php
    $reqselect="SELECT * FROM automobile";
    $resultat=mysqli_query($cnlocar,$reqselect);
    $nbr=mysqli_num_rows($resultat);
    echo "<p> Total <b>".$nbr."</b> produits...</p>";
    ?>
    </p>
    <p><a href="ajouter.php"><img src="images/ajouter.png" width="50px" height="50px" alt=""></a></p>
    <table class="table table-hover table-light" width="100%" border="1">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>prix(dh) </th>
            <th>Categorie</th>
            <th>photo</th>
            <th>supprimer</th>
            <th>modifie</th>
        </tr>
        <?php
       while($ligne=mysqli_fetch_assoc($resultat))
       {
        ?>
     
       <tr>
           <td><?php echo $ligne['IMM']?></td>
           <td><?php echo $ligne['MARQUE']?></td>
           <td><?php echo $ligne['PRXLOCA']?></td>
           <td><?php echo $ligne['CAT']?></td>
           <td><img src="<?php echo $ligne['PHOTO'] ?>" class="photocar" width="100px" height="60px"></td>
           <td><a href="supprime.php?supcar=<?php echo $ligne['IMM']?>"><img src="images/supprime.jpg" width="50px" height="50px" alt=""></a></td>
           <td><a href="modifie.php?mod=<?php echo $ligne['IMM']?>"><img src="images/modifier.jpg" width="50px" height="50px" alt=""></a></td>
       
    </tr>
    <?php
       }
    ?>


    </table>
</body>
</html>