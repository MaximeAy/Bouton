<?php
//require_once"connexion.php" ;
$db=new PDO ('mysql:host=localhost; dbname=mabase','root','');
if(isset($_POST['EMAIL']) AND !empty($_POST['EMAIL']));{
$suppr_email = htmlspecialchars($_POST['EMAIL']);

$suppr = $db->prepare('DELETE FROM monprojet WHERE  EMAIL= EMAIL LIMIT 1' );
$suppr -> execute(array(
'EMAIL'=>$suppr_email));

header('Location: liste.php');

}

?>