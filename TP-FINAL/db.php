<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "tpfinal";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
   die("<script>alert('connexion failed')</script>");
}
try{
   $bdd = new PDO('mysql:host=localhost;dbname=tpfinal;charset=utf8','root' ,'root');
}catch (Exception $e){
   die('Erreur:'.$e->getMessage());
}










?>






// ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS