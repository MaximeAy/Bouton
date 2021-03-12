<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php
require_once 'connexion.php';
?>
<?php include ('header.php');?>
<div>
</div>
<table class="table col-lg-10 col-sm-12 col-md-12 offset-1">
  <thead>
    <tr>
      <th scope="col">EMAIL</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
     <!--<th scope="col">NAISSANCE</th>
     <th scope="col">FORMATION</th>  --> 
    </tr>
  </thead>
 
  <body>
    <tr>
    <?php
    
        try{
            $afficher=$db->query('SELECT*FROM monprojet order by EMAIL ASC');
            while($reccuperation=$afficher ->fetch()) { ?>
                <tr>
                    <td><?= $reccuperation['EMAIL'] ?></td>
                    <td><?= $reccuperation['NOM'] ?></td>
                    <td><?= $reccuperation['PRENOM'] ?></td>
                    <td>
                        <a href="details-mod.php?EMAIL=<?= $reccuperation['EMAIL'] ?>" class='btn btn-info'>Details</a>
                        <a href='details-mod.php?EMAIL=<?= $reccuperation['EMAIL'] ?>'; class='btn btn-success'>Modifier</a>
                        <a href='supprimer.php' onclick='return confirm("Etes vous sur de vouloir supprimer cet apprenant ?");' class='btn btn-danger'>Supprimer</a>
                    </td>
                </tr>
    <?php    }
            $afficher->closecursor();
        }
        catch(PDOException $e){
            print "erreur !:" . $e->getMessage() . "</br>";
            die();}
    
    ?>
        
    </tr>
        </table>
    <style>
        td{
            color:white;
        }
        
    </style>
    <a href="index.html"><p class='text-center'><button type="button" class="btn btn-outline-warning">Retour</button></p></a>
    <?php include ('footer.php');?>
    <?php
?>
</body>
</html>