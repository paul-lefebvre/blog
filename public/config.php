<?php
//Identifiants de connexion à la BDD
$hostname="localhost";
$username="root";
$password="";
$dbname="cesiblog";


//Test de connexion à la BDD  et création de la variable globale $bdd
try{

    $bdd = new PDO('mysql:host='.$hostname.';dbname='.$dbname.';charset=utf8', $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (Exception $e){

    die('Erreur : ' . $e->getMessage());

}
