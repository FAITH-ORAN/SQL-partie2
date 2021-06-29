<?php

$serveur="localhost";
$login="root";
$pass="";
//exercice 1
try{
    $connexion= new PDO ("mysql:host=$serveur;dbname=webdevelopment",$login,$pass);//j'utilise les bloc try and catch pour la gestion des erreurs
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*$codesql= "CREATE TABLE languages(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        language VARCHAR (50),
       
        )";//je cree ma table language*/
//exercice 2

/*$codesql= "CREATE TABLE tools(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tool VARCHAR (50),
   
    )";*/

    //exercice 3
   /* $codesql= "CREATE TABLE framworks(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR (50),
        )";*/

  //exercice 4
  /*$codesql= "CREATE TABLE librairies(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   library VARCHAR (50),
    )";*/

    //exercice 5
   /* $codesql= "CREATE TABLE ide(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        librairy VARCHAR (50),
        )";*/

    //exercice 6 

    /*$codesql= "CREATE TABLE IF NOT EXISTS framworks(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR (50),
      
        )";*/

 $connexion->exec($codesql);//j'execute mon code sql
    echo"connexion à la base de donnée webdevelopment est reussi<br>";
    echo "table language créée dans la base de donnée webdevelopment<br>";
    echo "table tools créée dans la base de donnée webdevlopment <br>";
    echo "table framworks créée dans la base de donné webdevelopment<br>";
    echo "table librairies créée dans la base de donné webdevelopment<br>";
    echo "table ide  créée dans la base de donné webdevelopment<br>";
    echo "table fraworks créée si elle n'existe pas dans la base de donné webdevelopment<br>";
}catch(PDOException $e){
    echo'echec : ' . $e->getMessage();

}