<?php
try{
    $db=new PDO ('mysql:host=localhost; dbname=mabase','root','');
} catch(Exception $e) {
    die('Erreur: '.$e-> getMessage());
}
if (extension_loaded('PDO')){
 }
?>