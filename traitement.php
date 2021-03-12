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

$email= $_POST['EMAIL'];
$nom = $_POST['NOM'];
$prenom = $_POST['PRENOM'];
$naissance = $_POST['DATE'];
$formation= $_POST['FORMATION'];


$preparation =$db -> prepare('INSERT INTO monprojet (EMAIL,NOM,PRENOM,DATE,FORMATION) VALUES(?, ?, ?,?,?)');
$data=array($email,$nom,$prenom,$naissance,$formation);
$preparation -> execute($data);


?>
<?php include ('header.php');?>
<div class="alert alert-success mt-4" role="alert">
  <h4 class="alert-heading text-center">Apprenant bien enregistre!!</h4>
  <p class="text-center mt-3"><a href="index.html">Cliquez ici pour retourner</a></p>
</div>
</body>
</html>