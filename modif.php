<?php

require_once "connexion.php";
$email=$_POST['EMAIL'];
$nom=$_POST['NOM'];
$prenom=$_POST['PRENOM'];
$date=$_POST['DATE'];
$formation=$_POST['FORMATION'];

$recupere=$db->prepare("UPDATE monprojet SET EMAIL=?, NOM = ?, PRENOM=? , DATE=? , FORMATION=? WHERE EMAIL=?  LIMIT 1");
$recupere->execute(array($email, $nom, $prenom, $date, $formation,$email));

?>



<?php include ('header.php');?>
<div class="alert alert-success mt-4" role="alert">
  <h4 class="alert-heading text-center">Les informations de l'apprenants ont été modifiées</h4>
  <p class="text-center mt-3"><a href="liste.php">Cliquez ici pour retourner</a></p>
</div>