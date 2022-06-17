<?php
/*Commande qui permet de changer de page sans perdre les données*/
session_start();

/*Etape 1 : liaison base de donnée Mafasa */
try{
    $bdd = new PDO('mysql:host=localhost;dbname=Mafasa;charset=utf8','root','');
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}









?>